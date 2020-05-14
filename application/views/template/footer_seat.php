</body>

</html>

<!-- javascript -->
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/jquery.min.js"></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/popper.min.js "></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/bootstrap.min.js "></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/bootstrapValidator.js"></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/jquery-easing.min.js "></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/jquery.nice-select.js "></script>
<script type="text/javascript " src="<?= base_url(); ?>assets2/js/jquery.seat-charts.js "></script>
<script src="<?= base_url(); ?>assets2/plugins/material-datetimepicker/moment-with-locales.min.js "></script>
<script src="<?= base_url(); ?>assets2/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js "></script>
<script src="<?= base_url(); ?>assets2/plugins/material-datetimepicker/datetimepicker.js "></script>
<script type="text/javascript" src="<?= base_url(); ?>assets2/js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets2/plugins/lobibox/js/lobibox.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets2/js/script.js "></script>
<script type="text/javascript">
    $('select').niceSelect();

    $('.g-link').on('click', function(event) {
        $('.gallery1 a').trigger('click')
    });

    var $gallery = $('.gallery1 a').simpleLightbox();

    //jQuery time
    var current_fs, next_fs, previous_fs, busId = 0,
        seatsArray = []; //fieldsets
    var left, opacity, scale; //fieldset properties which we will

    $(".book_btn").click(function() {
        busId = Number($(this).data('bus')); //determine which bus was choosen
        let busName = $(this).parents('.bus-details').children('.bus-name').text();
        $('span.number_plate').text($(this).parents('.bus-details').children('.bus-name').text())
        if (animating) return false;
        animating = true;

        current_fs = $(this).parents('fieldset');
        next_fs = current_fs.next();

        if ($("fieldset").index(next_fs) == 2) {
            booked_seats(busId);
            setInterval(booked_seats(busId), 3000);
        }

        //de-activate current step on progressbar
        goNext(next_fs, current_fs)

    });