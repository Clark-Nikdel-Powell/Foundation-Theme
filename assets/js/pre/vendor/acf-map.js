(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// Map config data from map element
	var zoomVal          = $el.data('zoom_level') == false ? 12 : $el.data('zoom_level');
	var showMarkers      = $el.data('show_markers') == false ? true : $el.data('show_markers');
	var disableControls  = $el.data('disable_controls') == false ? true : $el.data('disable_controls');
	var allowPanning     = $el.data('allow_panning') == false ? true : $el.data('allow_panning');
	var allowDragging    = $el.data('allow_dragging') == false ? true : $el.data('allow_dragging');
	var allowZooming     = $el.data('allow_zooming') == false ? true : $el.data('allow_zooming');

	// Map markers
	var $markers = $el.find('.module-map-marker');

	// Map options
	var args = {
		zoomVal		     : zoom,
		center		     : new google.maps.LatLng(0, 0),
		disableDefaultUI : disableControls,
		draggable        : allowDragging,
		scrollwheel      : allowZooming,
		panControl       : allowPanning,
		mapTypeId	     : google.maps.MapTypeId.ROADMAP,
	};


	// create map
	var map = new google.maps.Map( $el[0], args);

	map.markerVisibility = showMarkers;


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		visible     : map.markerVisibility
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.module-map-map').each( function(){

		// create map
		map = render_map( $(this) );

	});

});

})(jQuery);