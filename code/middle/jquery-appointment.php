<?php
require_once "./Includes/configs/db.inc.php";
require_once "./Includes/libs/Middle-scripts/middle-functions.php";

// Can query the central location, participants based on the id sent
// Get this from the view ...

// curl -l http://api.foursquare.com/v1/venues.json?q=cafe\&l=25\&geolat=3.1179334397319045\&geolong=101.6770076751709
// array(key, (array(value[0] -> title value[1] -> lat value[2] -> lng)

$message = "Success!";
$status = "success";

$google_maps = array();

$key = "center";
// Get from DB
// $value_array = array('3.1179334397319045','101.6770076751709');
// $mid_point = get_mid_point_between_participants($appointment_id);
// $value_array = array($mid_point['alat'],$mid_point['alng']);

$key2 = "friends";
// Get from DB
$participant = array();
$from_point = array('3.197933','101.677008');
$to_point = array('3.10093345','101.16700367');
$participant[] = $from_point;
$participant[] = $to_point;

$google_maps = array($key => $value_array, $key2 => $participant);

// When all is said and done; either success or failure .. :(
// Check if operation was successful or not ...
if (! empty($innerHTML))
{
    // OK, got payload to be ent back to the client ...
    echo json_encode(
        array('status' => $status, 'message' => $message, 'innerHTML' => $innerHTML)
    );
    return;
}
else
{
    echo json_encode(
        $google_maps
    );
    return;
}

?>
