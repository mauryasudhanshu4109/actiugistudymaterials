<?php
$page_title = "Update user details";

require_once ('includes/header.php');
require_once('includes/database.php');

//retrieve all fields from the previous page
$user_id = $_POST['id'];
$user_name = $_POST['username'];
$full_name = $_POST['name'];
$user_email = $_POST['email'];
$mobile_no = $_POST['number'];
$password = $_POST['password'];

//update statement
$query_str = "UPDATE $tblUsers SET
    user_name='$user_name',
    user_full_name='$full_name',
    user_email='$user_email',
    mobile_no='$mobile_no',
    user_password='$password'
    WHERE user_id='$user_id'";

//execute the query
$result = @$conn->query($query_str);

//Handle selection errors
if (!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Connection Failed with: $errno, $errmsg<br/>\n";
  exit;
}else {header( "Refresh:5; url=loginform.php", true, 303);?>
  <div class="container wrapper">
  <br><br>
  <div class="text-center">
    <div class="spinner-border text-success" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    </div>
    <h2 class="text-center text-success">Your account has been updated successfully.<br> Login to see your profile.</h2>
    <br><br><br><br>
  </div>


<?php

    //The SQL select statement
    $query = "SELECT * FROM $tblUsers WHERE user_name='$user_name' AND user_password='$password'";

    //Execute the query
    $result = @$conn->query($query);
    if($result -> num_rows){
      session_destroy();
      //It is a valid user. Need to store the user in Session Variables
      @session_start();
      $_SESSION['login'] = $user_name;
      $result_row = $result->fetch_assoc();
      $_SESSION['role'] = $result_row['user_role'];
      $_SESSION['name'] = $result_row['user_full_name'];
      $_SESSION['id'] = $result_row['user_id'];
      //update the login status
      $login_status = 3;
    }

    
}
// close the connection.
$conn->close();

include ('includes/footer.php');
?>
