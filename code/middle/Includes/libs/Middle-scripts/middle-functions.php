<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

// General libraries for updating tabel
// also to get and answer to json calls ...

function add_new_appointment($from_email, $from_lat, $from_lng, $to_email)
{
    $sql = "INSERT INTO appointment (lat,lng) VALUES (0,0)";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "Died! SQL is $sql" . mysql_error();
        return false;
    }
    else
    {
        $appointment_id = mysql_insert_id();
        $is_originator = 1;
        $res = insert_new_participant($appointment_id, $from_email, $from_lat, $from_lng, $is_originator);
        if (!$res)
        {
            echo "insert_new_participant ORIGINATOR FAILED!";
            return false;
        }

        $is_originator = 0;
        $res = insert_new_participant($appointment_id, $to_email, 0, 0, $is_originator);
        if (!$res)
        {
            echo "insert_new_participant NON-ORIGINATOR FAILED!";
            return false;
        }
    }

    return $appointment_id;
}

function insert_new_participant($appointment_id, $email, $lat, $lng, $is_originator)
{
    // Create entry for sender and link
    $sql = "INSERT INTO participant
                (email, lat, lng, originator, appointment_id)
                VALUES
                ('$email', $lat, $lng, $is_originator, $appointment_id)";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "Died! SQL is $sql" . mysql_error();
        return false;
    }

    return true;
}

function update_non_originator_participant($appointment_id, $to_lat, $to_lng)
{
    $sql = "UPDATE participant SET lat = $to_lat, lng = $to_lng WHERE appointment_id = $appointment_id AND originator = 0";
    $res = mysql_query($sql);

    if (!$res)
    {
        echo "SQL is $sql! ERR: " . mysql_error();
        return false;
    }

    return true;
}

function get_originator_email($appointment_id)
{
    if (empty($appointment_id))
    {
        echo "Appointment ID not defined!";
        return false;
    }
    $sql = "SELECT email FROM participant WHERE appointment_id = $appointment_id AND originator = 1";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }
    return mysql_result($res, 0, "email");
}

function get_non_originator_email($appointment_id)
{
    if (empty($appointment_id))
    {
        echo "Appointment ID not defined!";
        return false;
    }
    $sql = "SELECT email FROM participant WHERE appointment_id = $appointment_id AND originator = 0";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }

    return mysql_result($res, 0, "email");
}

function get_mid_point_between_participants($appointment_id)
{
    $sub_sql = "SELECT
                        lng AS longitude, lat AS latitude
                FROM
                        participant
                WHERE
                        appointment_id = $appointment_id";

    $sql = "SELECT
                    AVG( U.longitude ) AS alng,
                    AVG( U.latitude ) AS alat
            FROM
                    ($sub_sql) U";

    $res = mysql_query($sql);
    if (!$res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }

    $mid_point = array();
    $mid_point['alng'] = mysql_result($res, 0, "alng");
    $mid_point['alat'] = mysql_result($res, 0, "alat");

    // echo "Mid point is " . $mid_point['alat'] . "," . $mid_point['alng'];
    return $mid_point;
}

function get_from_participants($appointment_id)
{
    $sql = "SELECT lat, lng FROM participant WHERE appointment_id = $appointment_id AND originator = 1";
    $res = mysql_query($sql);

    if (!$res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }
    $point = array();
    $point['lng'] = mysql_result($res, 0, "lng");
    $point['lat'] = mysql_result($res, 0, "lat");

    // echo "Mid point is " . $mid_point['alat'] . "," . $mid_point['alng'];
    return $point;
}

function get_to_participants($appointment_id)
{
    $sql = "SELECT lat, lng FROM participant WHERE appointment_id = $appointment_id AND originator = 0";
    $res = mysql_query($sql);

    if (!$res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }

    $point = array();
    $point['lng'] = mysql_result($res, 0, "lng");
    $point['lat'] = mysql_result($res, 0, "lat");

    // echo "Mid point is " . $mid_point['alat'] . "," . $mid_point['alng'];
    return $point;
}

function send_the_mail($from, $to, $subject, $body)
{
    // Use PHPMailer ...
    require_once "../PHPMailer/class.phpmailer.php";

    // Try to send
    // Testing send to dummy port 2525 ...
    // $send_to_port = 2525;
    // Production; send to port 25 .. will it work without authentication?  dunno ...
    // $send_to_port = 25;

    // Get the contact for this particular queue; passed in
    // $contact = "";
    // Instantiate classes
    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
    //$mail->IsSMTP(); // telling the class to use SMTP
    //echo ("hello world".$to);
    ///echo ($to);
    $iserror = false;
    try
    {
        $mail->Host = "localhost"; // SMTP server
        //$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
        // $mail->SMTPAuth   = true;                  // enable SMTP authentication
        // $mail->SMTPAuth   = false;                  // enable SMTP authentication
        // $mail->Port       = $send_to_port;                    // set the SMTP port for the GMAIL server

        $mail->SetFrom($from);
        //sending multiple email with limit.
        $msg_body = stripslashes($body);
        $mail->Subject = "$subject";
        $mail->AltBody = "$msg_body";
        $mail->MsgHTML($msg_body);
        // $mail->AddAttachment('images/phpmailer.gif');      // attachment
        // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
        $mail->Send();
    }
    catch (phpmailerException $e)
    {
        $iserror = $e->errorMessage(); //Pretty error messages from PHPMailer
        echo ($iserror);
    }
    catch (Exception $e)
    {
        $iserror = $e->getMessage(); //Boring error messages from anything else!
        echo ($iserror);
    }  
    //Do the sending here :)
    if ($iserror)
    {
        //Give back to end-user a generic exception messsage
        return false;
    }

    return true;
}

function update_appointment_location($appointment_id, $lat, $lng)
{
    $sql = "INSERT INTO appointment SET lat = $lat, lng = $lng WHERE id = $appointment_id";

    $res = mysql_query($sql);
    if (! $res)
    {
        echo "SQL is $sql. ERR: " . mysql_error();
        return false;
    }

    return true;
}

function make_bitly_url($url,$login,$appkey,$format = 'xml',$version = '2.0.1')
{
	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;

	//get the url
	//could also use cURL here
	$response = file_get_contents($bitly);

	//parse depending on desired format
	if(strtolower($format) == 'json')
	{
		$json = @json_decode($response,true);
		return $json['results'][$url]['shortUrl'];
	}
	else //xml
	{
		$xml = simplexml_load_string($response);
		return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
	}
}

/* usage */
// $short = make_bitly_url('bit.ly','findmiddle','R_97b995fd0bc448c7f9d962cecd4bd0bf','json');
// echo 'The short URL is:  '.$short;

// returns:  http://SHORT.URL/XXXXX

?>
