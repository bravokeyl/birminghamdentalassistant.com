function initMap() {
    var address = { lat: 33.415864, lng: -86.6642536 };
    var map = new google.maps.Map(document.getElementById('google-maps-footer'), {
        zoom: 17,
        scrollwheel: false,
        center: address
    });
    var marker = new google.maps.Marker({
        mapTypeIds: [
            'roadmap',
            'satellite'
        ],

        position: address,
        map: map,
        title: 'Birmingham Dental Assistant School',
        pixelOffset: new google.maps.Size(100,140)
    });

}

initMap();
