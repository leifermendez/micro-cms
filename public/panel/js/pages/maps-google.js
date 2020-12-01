$( document ).ready(function() {
    
    "use strict";
    
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(42.1499929,12.24317,6),
            zoom: 6
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
});
