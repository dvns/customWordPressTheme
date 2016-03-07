$(function(){
	console.log("It's working");


	$('.gallery-button').on('click', function(){
		$('.gallery-overlay').fadeToggle();
	});

	$('.nav-button').on('click', function(){
		$('.nav-overlay').fadeToggle();
		$(this).toggleClass('open');
	});

	$('.gallery-container').justifiedGallery({
		rowHeight: $(this).height() / 5,
		lastRow: 'justify',
		margins: 10,
		randomize: true
	});


});