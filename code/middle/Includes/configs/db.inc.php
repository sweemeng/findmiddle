<?PHP
//start the session
session_start();

//debuging
//ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

//set local variables
$dbhost = "mysql.findmiddle.com";
$dbuser = "findmiddle";
$dbpass = "middleground246";
$dbname = "findmiddledb";

//connect
$db = @mysql_connect($dbhost,$dbuser,$dbpass);
if (!$db) {
    die("<p>Unable to connect to the database at this time.</p>");
}

if (!@mysql_select_db($dbname) ) {
    echo( "<p>Unable to locate the database at this time.</p>" );
    exit();
}

// Now will be possible to switch db back to it later; possibly rewrite FUDForum code to be refactored
// depends on secondary code to use new_link; FUDforum does not though ... but my own code coverage will ...
define('openauto_sql_lnk', $db);

?>
