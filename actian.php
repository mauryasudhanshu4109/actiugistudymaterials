<?php
	$page_title = "actiUGI | actiAN Member";
	include_once('includes/header.php');
?>
<div class="container wrapper">
<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">actiAN Member</li>
	</ul>
</div>

<main>
<div class="container-flex text-center" style="background-image: url('images/headfoot.png'); color: white;">
  <div class="card-body">
        <br>
        <h4 class="card-title">Hey yaa, Let's go for an <span>acti</span><span style="color: red;">AN!</span></h4>
        <br>
        <p class="card-text">Hello User, actiUGI values your efforts and feels happy to invite you as an actiAN. 
          As an active actiAN member, you can contribute your content, share your thoughts & experiences on actiUGI 
          to help others.</p>
          <h6 class="card-title">And as a genuine actiAN, you also have<span style="color: #3DCFD3;"> a chance to become a core actiUGI developer member</span> 
          after fulfilling certain specified criteria...</h6>
          <a href="#tabs" class="card-link" style="float: right;">...check details here</a><br>
    
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <a href="actianform.php" class="btn btn-outline-success">Become an actiAN!</a>  
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="#tabs" class="btn btn-outline-info">Check Eligibility Criteria</a>  
        </div>
  </div>
</div>
</main>

<div class="container" id="tabs">
<br><br><br><br><br><br>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
        What is the actiAN membership program?</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
        What are the benefits we get as an actiAN?
      </a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
        What are the Eligibility Criteria to become an actiAN?
      </a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
        As a genuine actiAN, when does my profile become eligible for a core actiUGI developer membership?
      </a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
       <b>The actiAN membership program</b> is just like<b> an online internship job for students </b>in the field of 
        web development by actiUGI<b> to provide live project experience</b> to their users (an actiAN) via contributing and 
        working with the core actiUGI developer team members.<br><br>
        <b>You may also get a chance to be the core actiUGI Developer team member.</b><br>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <b>As an actiAN, at an Initial stage –</b><br>
      First of all, you have to prove that you have the potential to be an actiAN at a later stage. 
      To judge your potential our team give you a certain task (like- writing an article, designing a sample web page, 
      make a sample question-banks, etc.) anything related to your chosen stream.<br>
      <b>As an actiAN, at a Final stage –</b><br>
      After completing your initial stage, who performed well and with the recommendation of our actiAN membership program team, 
      the actiUGI team select them as a core actiUGI developer member after fulfilling certain terms & conditions of actiUGI.<br>
      <b>The selected actiAN’s profile will be hosted in the developer profile section of the official actiUGI website.</b><br>

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        To be an actiAN, one has to fulfill the below-mentioned eligibility criteria:<br><br>
      <b>a.) You must have your account on actiUGI for at least 1-month.<br>
        b.) You must have enrolled in any educational institution.</b><br>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      After passing all certain conditions, completing all actiAN stages,<b> within 3-6 months depending on your 
      performance</b> you will get an alert from our developer team regarding actiUGI developer membership. 
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
</div>


<?php
	include_once('includes/footer.php');