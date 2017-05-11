$(document).ready(function(){

	var viewport = $(window),
        setVisible = function (e) {
            var viewportTop = viewport.scrollTop(),
                viewportBottom = viewport.scrollTop() + viewport.height();
            $('.section').each(function () {
                var self = $(this),
                    top = self.offset().top,
                    bottom = top + self.height(),
                    topOnScreen = top >= viewportTop && top <= viewportBottom,
                    bottomOnScreen = bottom >= viewportTop && bottom <= viewportBottom,
                    elemVisible = topOnScreen || bottomOnScreen;
                self.toggleClass('visible', elemVisible);
            });
        };
    viewport.scroll(setVisible);
    setVisible();

	$('.page-scroll a').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	});

	$(".owl-carousel").owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    items: 1,
	    duration: 3000,
	    autoplay: true,
	    singleItem: true,
	    animateOut: 'fadeOut',
	})

	$('.initial').click( function() {
		$('.menu-wrap, .menu-inner, .morph-shape').toggleClass('show-menu');
	});
	$('#fullpage, .page-scroll').click( function() {
		$('.menu-wrap, .menu-inner, .morph-shape').removeClass('show-menu');
	});

	$('.count').counterUp({
		delay: 10, // the delay time in ms
		time: 1000 // the speed time in ms
	});

	lightbox.option();


	$(window).load(function(){
		var $grid = $('.grid').isotope({
		    itemSelector: '.grid-item',
		});

		var filterFns = {
		  ium: function() {
		    var name = $(this).find('.name').text();
		    return name.match( /ium$/ );
		  }
		};

		$('.filters-button-group').on( 'click', 'button', function() {
		  	var filterValue = $( this ).attr('data-filter');
		  	filterValue = filterFns[ filterValue ] || filterValue;
		  	$grid.isotope({ filter: filterValue });
		});

		$('.button-group').each( function( i, buttonGroup ) {
		  	var $buttonGroup = $( buttonGroup );
		  	$buttonGroup.on( 'click', 'button', function() {
			    $buttonGroup.find('.is-checked').removeClass('is-checked');
			    $( this ).addClass('is-checked');
		  	});
		});
	});
});
