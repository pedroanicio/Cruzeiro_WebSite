//prologo jquery
$(document).ready(function () {

    //seletores jquery
    //mudar cor do link
    //header
    $("#ingr").on("mouseover", function () {
        $(".container1 #ingr").addClass("efeito");
    }).on("mouseout", function () {
        $(".container1 #ingr").removeClass("efeito");
    });

    $("#not").on("mouseover", function () {
        $(".container1 #not").addClass("efeito");
    }).on("mouseout", function () {
        $(".container1 #not").removeClass("efeito");
    });

    $("#cal").on("mouseover", function () {
        $(".container1 #cal").addClass("efeito");
    }).on("mouseout", function () {
        $(".container1 #cal").removeClass("efeito");
    });
    $("#vid").on("mouseover", function () {
        $(".container1 #vid").addClass("efeito");
    }).on("mouseout", function () {
        $(".container1 #vid").removeClass("efeito");
    });



    //boddy
    $("#botao1").on("mouseover", function () {
        $(".container #botao1").addClass("efeito3");
    }).on("mouseout", function () {
        $(".container #botao1").removeClass("efeito3");
    });
    $("#botao2").on("mouseover", function () {
        $(".container #botao2").addClass("efeito4");
    }).on("mouseout", function () {
        $(".container #botao2").removeClass("efeito4");
    });




    //footer
    $("#noti1").on("mouseover", function () {
        $(".container #noti1").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #noti1").removeClass("efeito");
    });
    $("#noti2").on("mouseover", function () {
        $(".container #noti2").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #noti2").removeClass("efeito");
    });
    $("#link1").on("mouseover", function () {
        $(".container #link1").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #link1").removeClass("efeito");
    });
    $("#link2").on("mouseover", function () {
        $(".container #link2").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #link2").removeClass("efeito");
    });
    $("#link3").on("mouseover", function () {
        $(".container #link3").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #link3").removeClass("efeito");
    });
    $("#link4").on("mouseover", function () {
        $(".container #link4").addClass("efeito");
    }).on("mouseout", function () {
        $(".container #link4").removeClass("efeito");
    });
    $("#face").on("mouseover", function () {
        $(".container #face").addClass("efeito2");
    }).on("mouseout", function () {
        $(".container #face").removeClass("efeito2");
    });
    $("#tw").on("mouseover", function () {
        $(".container #tw").addClass("efeito2");
    }).on("mouseout", function () {
        $(".container #tw").removeClass("efeito2");
    });
    $("#insta").on("mouseover", function () {
        $(".container #insta").addClass("efeito2");
    }).on("mouseout", function () {
        $(".container #insta").removeClass("efeito2");
    });
    $("#pint").on("mouseover", function () {
        $(".container #pint").addClass("efeito2");
    }).on("mouseout", function () {
        $(".container #pint").removeClass("efeito2");
    });




    $(".thumbnails").owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        navText: ["Anterior", "Próximo"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            }
        }

    });

});