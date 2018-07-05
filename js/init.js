(function($){
	$(function(){

		$('.button-collapse').sideNav();
		$('.parallax').parallax();

  }); // end of document ready
	$(document).ready(function(){
		$('.scrollspy').scrollSpy();
	});
	  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
})(jQuery); // end of jQuery name space

$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });

    var typed = new Typed('.typing', {
        strings: ["Welkom op onze website"],
        typeSpeed: 70
    });
});