<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
    <head>
        <title>Find Middle - View Page</title>
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
                    zoom:17,
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
            $(document).ready(function(){
        
                directionsDisplay = new google.maps.DirectionsRenderer();
                map = mapInit();
                directionsDisplay.setMap(map);
{/literal}
        // var request = 'http://api.foursquare.com/v1/venues.json?geolat=3.1179334397319045&geolong=101.6770076751709';
        var request = 'http://api.foursquare.com/v1/venues.json?geolat={$alat}&geolong={$alng}';

                                    initialLocation = new google.maps.LatLng({$alat},{$alng});
                                    map.setCenter(initialLocation);
{literal}
                                    var marker = new google.maps.Marker({
                                        position : initialLocation,
                                        map:map,
                                        title:'center'
                                        });
{/literal}

                                    var image2 = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
                                        var newLatLng2 = new google.maps.LatLng({$flat},{$flng});
{literal}
                                        var marker2 = new google.maps.Marker({
                                            position : newLatLng2,
                                            icon:image2,
                                            map:map,
                                            title:"friend from"
                                            });

{/literal}

                                    var image3 = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
                                        var newLatLng3 = new google.maps.LatLng({$tlat},{$tlng});
{literal}
                                        var marker3 = new google.maps.Marker({
                                            position : newLatLng3,
                                            icon:image3,
                                            map:map,
                                            title:"friend to"
                                            });
									
									var line = new google.maps.Polyline({
									    path: [newLatLng2,newLatLng3],
										strokeColor: "#FF0000",
										strokeOpacity: 1.0,
										strokeWeight: 2
									});

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
                                marker.infowindow = new google.maps.InfoWindow({
                                    content : item.name + '<br/>' + item.city + '<br/>' + '<a href="">Accept</a>'
                                    });
                                google.maps.event.addListener(marker,'click',function(){
                                    marker.infowindow.open(map,marker);
                                    });
                            });
                        }
                    });
                });

            });


                browserSupportFlag = true;
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                        map.setCenter(initialLocation);
                    },
                    function() {
                        handleNoGeolocation(browserSupportFlag);
                    }
                );


            });
        </script>
    {/literal}
    </head>
    <body>

        <div id='maps'></div>
    </body>
</html>