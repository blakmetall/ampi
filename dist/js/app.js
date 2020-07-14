$(function () {
    var isGoogleMapLoaded = false;

    $(document).ready(function () {
        initAll();
    });

    function initAll() {
        verifyGoogleMapLoad(function () {
            initMap();
        });

        initTooltips();
    }

    function initMap() {
        // var placeMarker = function (event, marker, map) {
        //     if (marker) {
        //         marker.setPosition(event.latLng);
        //     } else {
        //         marker = new google.maps.Marker({
        //             position: event.latLng,
        //             map: map,
        //             draggable: true,
        //         });
        //     }
        //     marker.setMap(map);
        //     map.panTo(event.latLng);
        // };

        // var maps = $('.yg-map');

        // if (maps.length) {
        //     maps.each(function () {
        //         var mapWrapper = $(this);
        //         var marker;

        //         var mapId = mapWrapper.data('map-id');
        //         var mapElem = document.getElementById(mapId);

        //         var dataLat = mapWrapper.data('lat');
        //         var dataLng = mapWrapper.data('lng');

        //         var position = {
        //             lat: dataLat || 20.65988743765361,
        //             lng: dataLng || -103.34962499999999,
        //         };

        //         var map = new google.maps.Map(mapElem, {
        //             center: position,
        //             zoom: 12,
        //             disableDefaultUI: false,
        //             fullscreenControl: true,
        //         });

        //         marker = new google.maps.Marker({
        //             position: position,
        //             map: map,
        //             draggable: true,
        //         });

        //         if (!dataLat && !dataLng) {
        //             marker.setMap(null);
        //         }

        //         // google.maps.event.addListener(map, 'click', function (e) {
        //         //     placeMarker(e, marker, map);
        //         // });
        //     });
        // }
    }

    function initTooltips() {
        $('[data-toggle="tooltip"]').tooltip();
    }

    function verifyGoogleMapLoad(cb) {
        var googleCheckInterval = setInterval(function () {
            if (typeof google === 'object' && typeof google.maps === 'object') {
                clearInterval(googleCheckInterval);
                isGoogleMapLoaded = true;

                if (typeof cb === 'function') {
                    cb();
                }
            }
        }, 250);
    }
});