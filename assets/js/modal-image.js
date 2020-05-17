$(document).ready(function() {
    $(".img-responsive").click(function() {
        var img = $(this).attr('src');
        $("#show-img").attr('src', img);
        $('#imgmodal').modal('show');
    });
});