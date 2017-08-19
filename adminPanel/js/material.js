$(document).ready(function() {
	$('#myCarousel').carousel({
		interval: 5000
	});
	//Handles the carousel thumbnails
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
    	var id = $('.item.active').data('slide-number');
    	$('#carousel-text').html($('#slide-content-'+id).html());
    });
})
function showGallery(ele) {
	var itemTarget=$(ele).closest("[data-ind]");
	var ind=itemTarget.attr("data-ind");
	var target=$("#imageViewer");
	var info=material_images[ind];
	target.find(".materialNo").html(info['materialNo']);
	var thumb_target=$("#slider-thumbs .hide-bullets").empty();
	var images_target=$("#myCarousel .carousel-inner").empty();
	$.each(info['images'],function(i,thisImg) {
		var id='carousel-selector-'+i;
		var imgUrl=[
		'/uploads/materials/',info['materialNo'],'/',thisImg,
		].join("");
		thumb_target.append([
			'<li class="col-sm-3">',
			'<a class="thumbnail" id="',id,'">',
			'<img src="',imgUrl,'">',
			'</a>',
			'</li>',
			].join(""));
		images_target.append([
			'<div class="item" data-slide-number="',i,'">',
			'<img src="',imgUrl,'">',
			'</div>',
			].join(""));
	});
	images_target.find(".item:first-child").addClass('active');
	$('.carousel-indicators > li').first().addClass('active');
 	target.find('[id^=carousel-selector-]').click(function () {
    	var id_selector = $(this).attr("id");
    	try {
    		var id = /-(\d+)$/.exec(id_selector)[1];
    		console.log(id_selector, id);
    		$('#myCarousel').carousel(parseInt(id));
    	} catch (e) {
    		console.log('Regex failed!', e);
    	}
    });
	target.modal("show");
}