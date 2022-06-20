$(document).ready(function () {
    $(".holder").prop('disabled', true)



    $(".edit").click(function () {
        $("input").css({ "cursor": "pointer" })
        $(".usc_id").css({ "cursor": "not-allowed" })
        $(".btn-save").prop('disabled', false)
        $(".holder").prop('disabled', false)
        $('.username').focus()
    })

    function testAnim(x) {
        $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
    };
    $('#changeProfile').on('show.bs.modal', function (e) {
        // var anim = $('#entrance').val();
        testAnim('fadeInLeft');
    })
    $('#changeProfile').on('hide.bs.modal', function (e) {
        // var anim = $('#exit').val();
        testAnim('fadeOutRight');
    })

})