<?php

require_once "./Includes/configs/db.inc.php";
require_once "./Includes/libs/Smarty.class.php";
require_once "./Includes/libs/Middle-scripts/middle-functions.php";

$smarty = new Smarty;

$appointment_id = $_GET['id'];
$myaction = $_GET['myaction'];

if ($myaction == "accept")
{
    // Paramaters: 4slat, 4slng, 4sname
    // Accept a particular location
    $mylat = $_GET['4slat'];
    $mylng = $_GET['4slng'];
    $myname = $_GET['4sname'];

    $res = update_appointment_location($appointment_id, $mylat, $mylng);
    // Update lat + lng in appointment id!
    if ($res)
    {
        $subject = "FindMiddle Meetup location selected!";
        $body = "We accepted the location at $myname: Lat: $mylat Lng: $mylng <br/> Email sent to all participants!";
        print $body;
        $from = get_originator_email($appointment_id);
        $to = get_non_originator_email($appointment_id);

        send_the_mail($from, $to, $subject, $body);
    }

    // Email the location to all the participants!
}

// Calculate the center based on the participants
if (!empty($appointment_id))
{
    $mid_point = get_mid_point_between_participants($appointment_id);
    // Also get the point for originator and friend
    $from_point = get_from_participants($appointment_id);

    $to_point = get_to_participants($appointment_id);

    $smarty->assign('alng', $mid_point['alng']);
    $smarty->assign('alat', $mid_point['alat']);

    $smarty->assign('flng', $from_point['lng']);
    $smarty->assign('flat', $from_point['lat']);
    $smarty->assign('tlng', $to_point['lng']);
    $smarty->assign('tlat', $to_point['lat']);

    $smarty->assign('id', $appointment_id);
}


// $smarty->display("findmiddle/view.tpl");
$smarty->display("findmiddle/view.tpl");
?>
