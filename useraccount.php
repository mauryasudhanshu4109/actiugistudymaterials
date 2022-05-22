<?php
$page_title = "Dashboard";
require_once ('includes/header.php');
require_once ('includes/database.php');


//retrieve user id
$user_id = $session_id;

//define the select statement
$query_str = "SELECT * FROM $tblUsers WHERE user_id=" . $user_id;

//execute the query
$result = $conn->query($query_str);
//$review_result = $conn->query($review_str);



//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { //display results in a table
	?>
	<div class="container wrapper">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active">My Account</li>
		</ul>
		<br><br>
		<div class="row text-center">
			<div class="col-xs-8 col-xs-offset-2">
				<h1 class="text-center text-success">Hi <?php echo $name; ?>!</h1>
				<p class="lead">Welcome to Your Account!</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<form name="edituser" class="form-horizontal" role="form" action="updateaccount.php" method="post">
					<input type="hidden" name="id" value="<?php echo $result_row['user_id']; ?>"/>
					<div class="form-group">
						<label for="newUserName" class="col-sm-4 control-label">User Name *</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="newUserName" name="username" value="<?php echo $result_row['user_name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newName" class="col-sm-4 control-label">Full Name *</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="newName" name="name" value="<?php echo $result_row['user_full_name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newEmail" class="col-sm-4 control-label">Email *</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="newEmail" name="email" value="<?php echo $result_row['user_email']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newNumber" class="col-sm-4 control-label">Mobile No.</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="newNumber" name="number" value="<?php echo $result_row['mobile_no']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="newPassword" class="col-sm-4 control-label">Password *</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="newPassword" name="password" value="<?php echo $result_row['user_password']; ?>" required><br>
							<input type="checkbox" onclick="myFunction()"> Show Password
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<a href="javascript:document.edituser.submit()" class="btn btn-success">UPDATE</a>
							<a href="logout.php" class="btn btn-warning">SIGN OUT</a>
							<a class="btn btn-danger" href="deleteuser.php?id=<?php echo $result_row['user_id'] ?>">&nbsp;&nbsp;&nbsp;DELETE ACCOUNT&nbsp;&nbsp;&nbsp;</a>
							<br><br><br>
						</div>
					</div>
				</form>
			</div>
		</div>


	</div>
<?php
}
include ('includes/footer.php');
?>