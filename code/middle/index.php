<?php
require_once "./Includes/configs/db.inc.php";
require_once "./Includes/libs/Smarty.class.php";
require_once "./Includes/libs/Middle-scripts/middle-functions.php";

$smarty = new Smarty;

$from_email = $_POST['from'];
$to_email = $_POST['to'];
$from_lat = $_POST['lat'];
$from_lng = $_POST['lng'];
// Hack these numbers from demo ...
// $from_lat = 3.139;
// $from_lng = 101.687;

if (isset($from_email) && isset($to_email) && isset($from_lat) && isset($from_lng))
{
    // Now you can fill in it ..
    $appointment_id = add_new_appointment($from_email, $from_lat, $from_lng, $to_email);
    if (! $appointment_id)
    {
        echo "FAILED add_new_appointment!!";
    }

    // Make Bitly
    $short = make_bitly_url('bit.ly','findmiddle','R_97b995fd0bc448c7f9d962cecd4bd0bf','json');
    $subject = "You have been invited to FindMiddle meetup!";
    $body = "You have been invited to FindMiddle meetup!" .
            'Click the URL at <a href="' . $short . '">' . $short . '</a> and update your position.';
    // Send email
    send_the_mail($from_email, $to_email, $subject, $body);
    $smarty->assign('short_url_msg', 'The URL sent is <a href="' . $short . '">' . $short . '</a>.');
    $smarty->assign('id', $appointment_id);
    $smarty->assign('view', 'inserted');
}

// Message; please wait for the return email; once updated
// Store in DB
// Store data; get the autogenerated ID
// Generate a bit.ly curl to the final URL
// findmiddle.my?id=xxx
//
// Email to to_email address

// Click

$smarty->display("findmiddle/index.tpl");
?>