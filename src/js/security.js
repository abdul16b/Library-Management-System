$(document).ready(function(){
    $(".pass").hide()
    $(".change-pass").on('click',function(){
        $('.old-pass').text("Old Password")
        $('.password').val("")
        $("input").css({"cursor":"pointer"})
        $(".usc_id").css({"cursor":"not-allowed"})
        $(".holder").prop('disabled',false)
        $(".pass").slideDown('slow')
        $(".password").focus()
        $(".btn-change").prop('disabled',false)
        $('html, body').animate({scrollTop: $(document).height()}, 'slow');
    })
})