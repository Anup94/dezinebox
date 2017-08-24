// CONTACT MAP

var PageContact = function() {

	var _init = function() {

		var mapbg = new GMaps({
			div: '#gmapbg',
			lat: 32.909281,
			lng: -97.401851,
			scrollwheel: false,
		});


		mapbg.addMarker({
			lat: 32.909281,
			lng: -97.401851,
			title: 'Your Location',
			infoWindow: {
				content: '<h3>Gold Star Metallex </h3><p>10201 Hicks Field Rd,Dallas Tx 76179, United States of America</p>'
			}
		});
	}

    return {
        //main function to initiate the module
        init: function() {

            _init();

        }

    };
}();

$(document).ready(function() {
    PageContact.init();
});