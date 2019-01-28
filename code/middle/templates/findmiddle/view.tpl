<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
    <head>
        <title>Find Middle - View Page</title>
        <link rel='stylesheet' type='text/css' href='/stylesheet/forms.css'/>
        <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=2.0; user-scalable=1;">


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
        var request = 'http://api.foursquare.com/v1/venues.json?geolat={$alat}&geolong={$alng}&l=50';

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


 									var bounds = new google.maps.LatLngBounds();
 									bounds.extend(newLatLng2);
 									bounds.extend(newLatLng3);
 									map.fitBounds(bounds);                                                                            line.setMap(map);

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
                                    {/literal}
                                    content : item.name + '<br/>' + item.city + '<br/>' + '<a href="view.php?id={$id}&4slat=' + lat + '&4slng=' + lng + '&4sname=' + item.name + '&myaction=accept">Accept</a>'
                                    {literal}
                                    });
                                google.maps.event.addListener(marker,'click',function(){
                                    marker.infowindow.open(map,marker);
                                    });
                            });
                        }
                    });
                });

            });

            });
        </script>
		<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19286800-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

</script>
    {/literal}
    </head>
    <body>
        <div>
            <img src="images/finmiddle-logo-long.png" alt="Find in Middle Logo" height="77" width="320" style="margin-left:5px;margin-top:5px;" />
        </div>

        <div id='maps'></div>
    </body>
</html>
