<?php
$page_title = "actiUGI | Join Us";

include ('includes/header.php');
?>
	<div class="signup">
        <a href="index.php"><i class="far fa-times-circle"></i></a>
        <h1>Hello! Sign up to get UGI Glimpses </h1>
        <form role="form" action="register.php" method="post">
			<div class="username">
                <div class="text">User Name *</div>
                <input type="name" class="input-box" id="newUserName" name="username" placeholder="Create a unique User Name"  required>
              </div>
			<div class="name">
                <div class="text">Full Name *</div>
                <input type="name" class="input-box" id="newName" name="name" placeholder="Enter your Name"  required>
              </div>
            <div class="email">
                <div class="text">Email Id *</div>
                <input type="email" class="input-box" id="newEmail" name="email" placeholder="Enter your Email id"  required>
              </div>
              <div class="number">
                <div class="text">Mobile No.</div>
                <input type="number" class="input-box" id="newMob" name="number" placeholder="Enter your Mobile No.">
              </div>
            <div class="password">
                <div class="text">Create Password *</div>
                <input type="password" class="input-box" id="newPassword" name="password" placeholder="Create a strong password"  required>
                
              </div>
            <p class="p"><input type="checkbox" onclick="myFunction()"> Show Password</p>
            <p class="p"><span><input type="checkbox" required></span> I agree to the <a href="aboutus.php">Privacy policy</a></p>
            <div class="btn">
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            <hr>
            <p>OR</p>
            <p><b>Already have an account?</b><a href="loginform.php"><b>Sign in</b></a></p>
		</form>
    </div>
</div>

<?php
include('includes/footer.php');
?>


