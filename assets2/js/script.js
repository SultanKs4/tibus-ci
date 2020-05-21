//////////////
// seat map //
//////////////
let price = $inputPrice;
let firstSeatLabel = 1;
var details = [];

var $cart = $('#selected-seats'),
    $counter = $('#counter'),
    $total = $('#total'),
    sc = $('#seat-map').seatCharts({
        map: [
            'ee_ee',
            'ee_ee',
            'ee_ee',
            'ee_ee',
            'ee_ee',
            'ee_ee',
            'ee_ee',
            'ee_ee',
            '___ee',
            'eeeee',
        ],
        seats: {
            e: {
                price: price,
                classes: 'economy-class', //your custom CSS class
                category: 'Economy Class'
            }

        },
        naming: {
            top: false,
            getLabel: function(character, row, column) {
                return firstSeatLabel++;
            },
        },
        // legend: {
        //     node: $('#legend'),
        //     items: [
        //         ['f', 'available', 'First Class'],
        //         ['e', 'available', 'Economy Class'],
        //         ['f', 'unavailable', 'Already Booked']
        //     ]
        // },
        click: function() {
            if (this.status() == 'available') {
                $(event.target).toggleClass('animated rubberBand')
                    //let's create a new <li> which we'll add to the cart items
                if (sc.find('selected').length >= 1) {
                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);

                    //remove the item from our cart
                    $('#' + sc.find('selected').seatIds)
                        .toggleClass('animated rubberBand');
                    $('#cart-item-' + sc.find('selected').seatIds).remove();
                    $('#no_duduk').val("")
                    $('#id_duduk').val("")
                    no = sc.find('selected').seats[0].settings.label;
                    var filtered = details.filter(function(item) {
                        return item.seatNo != no;
                    });
                    details = filtered;
                    sc.find('selected').status('available')
                }
                $('<li class="p-b-4"> Seat # ' +
                        this.settings.label + ': <b>Rp ' + this.data().price +
                        '</b> <a href="javascript:void(0);"' +
                        ' class="cancel-cart-item btn btn-danger btn-sm"><i class="fa fa-trash"></i> cancel</a></li>')
                    .attr('id', 'cart-item-' + this.settings.id)
                    .data('seatId', this.settings.id)
                    .appendTo($cart);
                $("#no_duduk").val(this.settings.label)
                $("#id_duduk").val(this.settings.id)
                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                $counter.text(sc.find('selected').length + 1);
                $total.text(recalculateTotal(sc) + this.data().price);
                details.push({
                    ['seatNo']: this.settings.label,
                    ['price']: this.data().price
                });

                return 'selected';
            } else if (this.status() == 'selected') {
                $(event.target).toggleClass('animated rubberBand')
                    //update the counter
                $counter.text(sc.find('selected').length - 1);
                //and total
                $total.text(recalculateTotal(sc) - this.data().price);

                //remove the item from our cart
                $('#cart-item-' + this.settings.id).remove();
                $('#no_duduk').val("");
                $('#id_duduk').val("");
                no = this.settings.label;
                var filtered = details.filter(function(item) {
                    return item.seatNo != no;
                });
                details = filtered;

                //seat has been vacated
                return 'available';
            } else if (this.status() == 'unavailable') {
                //seat has been already booked
                return 'unavailable';
            } else {
                return this.style();
            }
        }
    });

function getBooked() {
    $.ajax({
        type: "get",
        url: "http://localhost:8000/api/tiket/booked",
        data: {
            'tkn': 'qwe123',
            'id_trayek': $idTrayek
        },
        dataType: "json",
        success: (response) => {
            sc.find('unavailable').status('available')
            $.each(response.data, (index, booked) => {
                sc.status(booked.id_duduk, 'unavailable')
            });
        }
    });
}

getBooked()
setInterval(getBooked, 10000);

let recalculateTotal = sc => {
        var total = 0;

        //basically find every selected seat and sum its price
        sc.find('selected').each(function() {
            total += this.data().price;
        });

        return total;
    }
    //this will handle "[cancel]" link clicks
$('#selected-seats').on('click', '.cancel-cart-item', function() {
    $('#' + sc.get($(this).parents('li:first').data('seatId')).settings.id)
        .toggleClass('animated rubberBand');
    //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
    $('#no_duduk').val("");
    $('#id_duduk').val("");
    sc.get($(this).parents('li:first').data('seatId')).click();
});


let booked_seats = function(bus_id) {
    $.ajax({
        method: 'GET', //https://examinationcomplaint.theschemaqhigh.co.ke/HCI/api/book/
        url: 'api/book.php?bus_id=' + $.trim(bus_id) + '&booked_seats',
        success: function(data) {
            sc.find('unavailable').status('available');
            data.forEach((element => sc.get([sc.seatIds[element - 1]]).status('unavailable')))
        },
        error: function(data) {
            console.log(data)
        }
    });
};