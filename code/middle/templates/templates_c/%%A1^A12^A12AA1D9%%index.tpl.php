<?php /* Smarty version 2.6.18, created on 2010-10-23 06:27:09
         compiled from findmiddle/index.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Find Middle</title>
    <link rel='stylesheet' type='text/css' href='/stylesheet/forms.css'/>
    <?php echo '
    <style type="text/css">
        html { height: 100% }
        body { height: 100%; margin: 0px; padding: 0px }
        #maps { height: 90% }
    </style>
    <script type=\'text/javascript\' src=\'http://maps.google.com/maps/api/js?sensor=false\'></script>
    <script type=\'text/javascript\' src=\'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\'></script>
    <script type=\'text/javascript\' src=\'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js\'></script>
    <link type=\'text/css\' href=\'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css\' rel=\'stylesheet\' />
    <script type=\'text/javascript\'>
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();
        var initialLocation;
        var siberia = new google.maps.LatLng(60, 105);
        var newyork = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
        var browserSupportFlag =  new Boolean();
        function mapInit(){

            var myOption = {
                zoom:11,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            return new google.maps.Map($("#maps")[0],myOption);
        }
        function handleNoGeolocation(errorFlag) {
            if (errorFlag == true) {
                alert("Geolocation service failed.");
                initialLocation = newyork;
            } else {
                alert("Your browser doesn\'t support geolocation. We\'ve placed you in Siberia.");
                initialLocation = siberia;
            }
            map.setCenter(initialLocation);
        }
        $(document).ready(function(){
            directionsDisplay = new google.maps.DirectionsRenderer();
            map = mapInit();
            directionsDisplay.setMap(map);
            $.getJSON(\'/todolistjson/\',
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
    '; ?>

</head>
<body>
    <?php if ($this->_tpl_vars['view'] == 'inserted'): ?>
        <br/>
            Successfully inserted new Appointment.  The URL sent is <a href="http://middle.my/meetup.php?id=<?php echo $this->_tpl_vars['id']; ?>
">http://middle.my/meetup.php?id=<?php echo $this->_tpl_vars['id']; ?>
</a>.<br/>
            Please wait at the <a href="http://middle.my/view.php?id=<?php echo $this->_tpl_vars['id']; ?>
">View</a> page until your friend his/her location.
        <br/>
    <?php else: ?>
    <div id='add'>
        <form method="post" action="/">
            <label for="from">your email:</label><input type="text" id="from" value="jweng.leow@gmail.com" name="from"/>
            <label for="to">appointment email:</label><input type="text" id="to" value="jweng_leow@hotmail.com" name="to"/>
            <input type="hidden" id="lat" name="lat"/>
            <input type="hidden" id="lng" name="lng"/>
            <input type="submit" value="make appointment"/>
        </form>
    </div>
    <div id='maps'</div>
    <?php endif; ?>
</body>
</html>