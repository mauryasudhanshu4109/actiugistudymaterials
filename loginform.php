<?php
$page_title = "actiUGI | Sign In";
$login_status = "";

/**
 * Description:
 * check login status:
 * 1 -- last login attempt success
 * 2 -- last login attempt failed.
 * 3 -- user just registered. Logged in automatically.
 * other -- new login attempt
 *
 */
require_once('includes/header.php');
?>
    <div class="col-xs-8 col-xs-offset-2">
        <?php
        if( isset( $_GET['ls'] ) ) {
            $login_status = $_GET['ls'];
            if ($login_status == 1) { 
                header( 'Location: index.php');
            } elseif ($login_status == 2) {
                echo "<p class='lead text-danger'>Incorrect user name/password combination.</p>";
            } elseif ($login_status == 3) {
                header( "Refresh:3; url=useraccount.php", true, 303);
            }
        }else {
            echo "";
        }
if ( $login_status != 1 && $login_status != 3 ) {?>
            
    <div class="signin">
    <a href="index.php"><i class="far fa-times-circle"></i></a>
    <h1>Hey! Sign in to explore</h1>
    <form role="form" action="login.php" method="post">
        <div class="username">
            <div class="text">User Name</div>
            <input type="name" class="input-box" id="newUserName" name="username" placeholder="Enter your User Name"  required>
            </div>
            <div class="password">
            <div class="text">Password</div>
            <input type="password" class="input-box" id="newPassword" name="password" placeholder="Enter your password"  required>
            </div>
        <div class="k">
        <tr>
        <th><span><input type="checkbox" onclick="myFunction()"></span> Show Password</th>
        <th><a href="#">Forgot Password</a></th>
        </div>
        <div class="btn">
            <button type="submit" class="signinbtn">Sign In</button>
        </div>
        <hr>
        <p>OR</p>
        <p><b>New User?</b><a href="registration.php"><b>Sign Up</b></a></p>
    </form>
</div>
    <?php }?>
    </div>
</div>
<?php
include ('includes/footer.php');
?>