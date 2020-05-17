$bank = []
$.ajax({
    type: "get",
    url: "http://localhost/proyek1/tibus-ci-admin/api/method",
    data: {
        'tkn': 'qwe123',
    },
    dataType: "json",
    success: function(response) {
        $bank = response.data
    }
});
$(document).ready(function() {
    $(".pembayaranwrapper").click(function(e) {
        $.each($bank, function(index, data) {
            if ($("input[name='pembayaran']:checked").val() == data.id) {
                $('#detail').val("");
                $('#detail').val("No Rekening: " + data.no + " \nAtas Nama: " + data.an);
            }
        });
    });
});