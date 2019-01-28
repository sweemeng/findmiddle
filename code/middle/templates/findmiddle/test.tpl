<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
    <head>
        <title>Find Middle</title>
        <link rel='stylesheet' type='text/css' href='/stylesheet/forms.css'/>
    {literal}
        <style type="text/css">
            html { height: 100% }
            body { height: 100%; margin: 0px; padding: 0px }
            #maps { height: 90% }
        </style>
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js'></script>
        <link type='text/css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' />
        <script type='text/javascript'>
            var directionDisplay;
            var directionsService = new google.maps.DirectionsService();
            var initialLocation;
            var siberia = new google.maps.LatLng(60, 105);
            var newyork = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
            var browserSupportFlag =  new Boolean();
            function mapInit(){

                var myOption = {
                    zoom:20,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                return new google.maps.Map($("#maps")[0],myOption);
            }
            function handleNoGeolocation(errorFlag) {
                if (errorFlag == true) {
                    alert("Geolocation service failed.");
                    initialLocation = newyork;
                } else {
                    alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
                    initialLocation = siberia;
                }
                map.setCenter(initialLocation);
            }

$(document).ready(function() {
    directionsDisplay = new google.maps.DirectionsRenderer();

    map = mapInit();
    directionsDisplay.setMap(map);
    browserSupportFlag = true;
    initialLocation = new google.maps.LatLng('3.1179334397319045','101.6770076751709');
    map.setCenter(initialLocation);
    var request = 'http://api.foursquare.com/v1/venues.json?geolat=3.1179334397319045&geolong=101.6770076751709';

    $.getJSON('proxy.php?request=' + escape(request),
        function(data){

            $.each(data.groups,function(idx,val){
                $.each(val,function(key,value){
                    
                    if(key=="venues"){
                        
                        $.each(value,function(index,item) {
                         
                            var lat = item.geolat;
                            var lng = item.geolong;
                            var image = item.primarycategory.iconurl;
                            var newLatLng = new google.maps.LatLng(lat,lng);
                            var marker = new google.maps.Marker({
                                icon:image,
                                position : newLatLng,
                                map:map,
                                title:item.name
                            });
                        });
                    }
                });
            });

        });

});


        </script>
    {/literal}
    </head>
    <body>

        <div id='maps'></div>
    </body>
</html>