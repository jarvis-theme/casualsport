

// call unslider
$(function() {
    var unslider = $('#slider').unslider({
    	keys: true,               
		dots: true, 
    });

    $('.unslider-arrow').click(function(e) {
        var fn = this.className.split(' ')[1];
        
        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
        e.preventDefault();
        return false
    });

});

$(document).ready(function(){
  	//THUMB LIST
	$('#thumb-list').owlCarousel({
		itemsCustom : [
			[350, 2],
			[350, 3],
			[600, 4],
			[700, 4],
			[1000, 4],
			[1200, 3],
			[1400, 3]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});

	$('.fancybox').fancybox({
		padding: 10,
		openEffect : 'elastic',
		openSpeed  : 150,
		closeEffect : 'elastic',
		closeSpeed  : 150
	});
});


// // toggle slider
// $(function() {
// 	var unslider = $('#slider').unslider();
    
//     $('.unslider-arrow').click(function() {
//         var fn = this.className.split(' ')[1];
        
//         //  Either do unslider.data('unslider').next() or .prev() depending on the className
//         unslider.data('unslider')[fn]();
//     });
// })