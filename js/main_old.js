// Cierra o Abre el SideBar
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

//Redirige a las secciones con Scroll y los link tienen la class scrollLink
/* $(document).ready(function () {
    $("a.scrollLink").click(function (event) {
        console.log("scroll")
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
}); */