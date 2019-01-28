<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
    <head>
        <title>Find Middle - Meetup for ID {$appointment_id}</title>
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
                $.getJSON('/todolistjson/',
                        function(data){
                            $.each(data,function(index,value){
                                    var newLatLng = new google.maps.LatLng(value[1],value[2]);
                                    var marker = new google.maps.Marker({
                                        position : newLatLng,
                                        map:map,
                                        title:value[0]
                                        });

                                });
                });

 									var bounds = new google.maps.LatLngBounds();
 									bounds.extend(newLatLng);
 									map.fitBounds(bounds);                                                                            line.setMap(map);

                browserSupportFlag = true;
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                        var marker = new google.maps.Marker({
                                        position : initialLocation,
                                        map:map,
                                        title:"You are here"
                                        });
                        $("#lat").val(position.coords.latitude);
                        $("#lng").val(position.coords.longitude);
                        map.setCenter(initialLocation);
                    },
                    function() {
                        handleNoGeolocation(browserSupportFlag);
                    }
                );


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
            <img src="images/finmiddle-logo-long.png" alt="Find in Middle Logo" style="margin-left:5px;margin-top:5px;" />
        </div>

        {if $view eq "updated"}
        Congrats!  Updated!!!<br/>
        Please go to <a href="view.php?id={$id}">View</a> page to select a meeting location!
        {else}
        <div id='meetup'>
            <form method="post" action="meetup.php?id={$id}">
                <label for="from">You were invited by:</label>{$from_email}
                <label for="from">Your email:</label>{$to_email}
                <input type="hidden" id="lat" name="lat"/>
                <input type="hidden" id="lng" name="lng"/>
                <input type="hidden" name="myaction" value="update" />
                <input type="submit" value="Update your location"/>
            </form>
        </div>
        <div id='maps'</div>
        {/if}
    </body>
</html>
