$(document).ready( ()=> {
    $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
        $(this).toggleClass("active");
      });
})