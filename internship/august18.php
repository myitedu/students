

    <!DOCTYPE html>
    <html>
    <head>
        <title>Customer Map</title>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZpLtSJlwOeet2_RQkDtu3vrQobM4wj4"></script>
        <script>


            function initMap() {
                var brooklynCenter = {lat: 40.6782, lng: -73.9442}; // Center of Brooklyn
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: brooklynCenter
                });

                var businesses = [
                    {
                        name: 'Brooklyn Museum',
                        lat: 40.6712,
                        lng: -73.9635,
                        icon: 'https://img.icons8.com/?size=100&id=VbL8v3mm1qyp&format=png&color=000000' // Custom icon URL
                    },
                    {
                        name: 'Prospect Park Zoo',
                        lat: 40.6656,
                        lng: -73.9657,
                        icon: 'https://img.icons8.com/?size=100&id=VbL8v3mm1qyp&format=png&color=000000'
                    },
                    {
                        name: 'Brooklyn Botanic Garden',
                        lat: 40.6694,
                        lng: -73.9624,
                        icon: 'https://img.icons8.com/?size=100&id=VbL8v3mm1qyp&format=png&color=000000'
                    },
                    {
                        name: 'Brooklyn Public Library',
                        lat: 40.6727,
                        lng: -73.9680,
                        icon: 'https://img.icons8.com/?size=100&id=VbL8v3mm1qyp&format=png&color=000000'
                    },
                    {
                        name: 'Barclays Center',
                        lat: 40.6827,
                        lng: -73.9757,
                        icon: 'https://img.icons8.com/?size=100&id=VbL8v3mm1qyp&format=png&color=000000'
                    }
                ];

                businesses.forEach(function(business) {
                    var marker = new google.maps.Marker({
                        position: {lat: business.lat, lng: business.lng},
                        map: map,
                        title: business.name,
                        icon: business.icon // Setting the custom icon
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: '<p>' + business.name + '</p>'
                    });

                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                });
            }



        </script>
    </head>
    <body onload="initMap()">
    <h1>Customer Locations</h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
    </body>
    </html>
