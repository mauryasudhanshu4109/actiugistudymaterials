<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
setcookie(session_name(), '', time()-3600);

//destroy the $_SESSION array
$_SESSION = array();

$page_title = "Sign Out";
include('includes/header.php');
header( "Refresh:3; url=index.php", true, 303);
?>
<div class="container wrapper">
    <br><br>
    <div class="text-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
    <h1 class="text-center">Signed Out</h1>
    <p class="lead text-center text-danger"> Thank you for your visit. You are now signed out.</p>
    <br><br><br><br>
</div>
<?php
include('includes/footer.php'); ?>