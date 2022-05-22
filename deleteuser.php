<?php

$page_title = "Delete account";

require_once ('includes/header.php');
require_once('includes/database.php');

//retrieve user id from a querystring
$user_id = $_GET['id'];

//the delete statement
$query_str = "DELETE FROM $tblUsers WHERE user_id = '" . $user_id . "'";

//execute the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Selection failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}header( "Refresh:3; url=index.php", true, 303);?>
  <div class="text-center">
    <br><br>
    <div class="spinner-border text-danger" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    </div>
  <h1 class="text-center text-danger"><br>Feeling bad to see you leaving!<br>Your account has been deleted successfully. </h1>
  <br><br><br><br>
<?php
@session_start();

session_destroy();

$_SESSION = array();



$conn->close();

include ('includes/footer.php');
?>
