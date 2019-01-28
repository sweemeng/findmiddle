<title>7</title>
<?php
require_once "./Includes/configs/db.inc.php";
require_once "./Includes/libs/Smarty.class.php";
require_once "./Includes/libs/Middle-scripts/middle-functions.php";

$smarty = new Smarty;

// Here get the id
// the form is to fill in for the other guy ...
$appointment_id = $_GET['id'];
$myaction = $_POST['myaction'];
$to_lat = $_POST['lat'];
$to_lng = $_POST['lng'];
// Hack these numbers for demo ...
// $to_lat = 3.1166;
// $to_lng = 101.675;

$from_email = get_originator_email($appointment_id);
$smarty->assign('from_email', $from_email);
$to_email = get_non_originator_email($appointment_id);
$smarty->assign('to_email', $to_email);

if ($myaction == "update")
{
    // to_email is the non-originator of the appointment!
    $is_originator = false;
    $res = update_non_originator_participant($appointment_id, $to_lat, $to_lng);

    // Should calculate the central coordinate here ...
    
    $smarty->assign('view', 'updated');
}

$smarty->assign('id', $appointment_id);
$smarty->display("findmiddle/meetup.tpl");
?>
