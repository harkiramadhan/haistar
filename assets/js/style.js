$('#navbar-brand').hide();
$('#navbar-brand-2').show();
$(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) { 
            $('#navbar-brand-2').hide();
            $('#navbar-brand').show();
        }else{
            $('#navbar-brand-2').show();
            $('#navbar-brand').hide();
        }
    })
});

$(document).ready(function() {
    $('#jakarta').show();
    $('#bandung').hide();
    $('#surabaya').hide();
    $('#palembang').hide();
    $('#makassar').hide();
});

function jakartaShow() {
    $('#jakarta').show();
    $('#bandung').hide();
    $('#surabaya').hide();
    $('#palembang').hide();
    $('#makassar').hide();
    $('#main').addClass("active");
    $('#mini').removeClass("active");
    $('#jkt').addClass("active");
    $('#bdg').removeClass("active");
    $('#sby').removeClass("active");
    $('#plb').removeClass("active");
    $('#mks').removeClass("active");
    $('#main-button').addClass("active");
    $('#mini-button').removeClass("active");
    $('#testimonial1').addClass("active");
    $('#testimonial2').removeClass("active");
    $('#testimonial3').removeClass("active");
    $('#testimonial4').removeClass("active");
    $('#testimonial5').removeClass("active");

}

function bandungShow() {
    $('#jakarta').hide();
    $('#bandung').show();
    $('#surabaya').hide();
    $('#palembang').hide();
    $('#makassar').hide();
    $('#main').addClass("active");
    $('#mini').removeClass("active");
    $('#jkt').removeClass("active");
    $('#bdg').addClass("active");
    $('#sby').removeClass("active");
    $('#plb').removeClass("active");
    $('#mks').removeClass("active");
    $('#main-button').addClass("active");
    $('#mini-button').removeClass("active");
    $('#testimonial1').removeClass("active");
    $('#testimonial2').addClass("active");
    $('#testimonial3').removeClass("active");
    $('#testimonial4').removeClass("active");
    $('#testimonial5').removeClass("active");
}

function surabayaShow() {
    $('#jakarta').hide();
    $('#bandung').hide();
    $('#surabaya').show();
    $('#palembang').hide();
    $('#makassar').hide();
    $('#main').addClass("active");
    $('#mini').removeClass("active");
    $('#jkt').removeClass("active");
    $('#bdg').removeClass("active");
    $('#sby').addClass("active");
    $('#main-button').addClass("active");
    $('#mini-button').removeClass("active");
    $('#testimonial1').removeClass("active");
    $('#testimonial2').removeClass("active");
    $('#testimonial3').addClass("active");
    $('#testimonial4').removeClass("active");
    $('#testimonial5').removeClass("active");
}

function palembangShow() {
    $('#jakarta').hide();
    $('#bandung').hide();
    $('#surabaya').hide();
    $('#palembang').show();
    $('#makassar').hide();
    $('#main').removeClass("active");
    $('#mini').addClass("active");
    $('#jkt').removeClass("active");
    $('#bdg').removeClass("active");
    $('#sby').removeClass("active");
    $('#plb').addClass("active");
    $('#mks').removeClass("active");
    $('#main-button').removeClass("active");
    $('#mini-button').addClass("active");
    $('#testimonial1').removeClass("active");
    $('#testimonial2').removeClass("active");
    $('#testimonial3').removeClass("active");
    $('#testimonial4').removeClass("active");
    $('#testimonial5').addClass("active");
}

function makassarShow() {
    $('#jakarta').hide();
    $('#bandung').hide();
    $('#surabaya').hide();
    $('#palembang').hide();
    $('#makassar').show();
    $('#main').removeClass("active");
    $('#mini').addClass("active");
    $('#jkt').removeClass("active");
    $('#bdg').removeClass("active");
    $('#sby').removeClass("active");
    $('#plb').removeClass("active");
    $('#mks').addClass("active");
    $('#main-button').removeClass("active");
    $('#mini-button').addClass("active");
    $('#testimonial1').removeClass("active");
    $('#testimonial2').removeClass("active");
    $('#testimonial3').removeClass("active");
    $('#testimonial4').addClass("active");
    $('#testimonial5').removeClass("active");
}