<?php
	$page_title = "actiUGI | More: Important Links";
	include_once('includes/header.php');
?>
<div class="container wrapper">
<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">More(About Us / Terms & Conditions / Privacy Policy / Contact Us)</li>
	</ul>
</div>
<br><br><br>
<div class="container">
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#aboutus" role="tab" aria-controls="home">About Us</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#tnc" role="tab" aria-controls="profile">Terms & Conditions</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#privacy" role="tab" aria-controls="messages">Privacy Policy</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#contactus" role="tab" aria-controls="settings">Contact Us</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="aboutus" role="tabpanel" aria-labelledby="list-home-list">
        <strong style="color: #3DCFD3">actiUGI - A glimpse of UGI activities</strong> is the website designed to provide 
        the best and genuine updates to their users regarding their college like-<br> 
        news updates, notices, events, latest technology trends, exams related queries(such as sessional papers, 
        question-banks, AKTU ESE papers, etc.), placement interview question-bank sets and a lot more…</div>
      <div class="tab-pane fade" id="tnc" role="tabpanel" aria-labelledby="list-profile-list">The Terms and Conditions create a binding 
    legal contract between the candidate and actiUGI. By using this website you represent and warrant that you have read, 
    understood, and agree to be bound by these terms. If you do not accept these terms, you must not use – 
    and are not authorized to use – all or any portion of the actiUGI and services.</div>
      <div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="list-messages-list">actiUGI group is committed 
        to protecting your privacy and developing technology to give you a powerful and safe online experience.</div>
      <div class="tab-pane fade" id="contactus" role="tabpanel" aria-labelledby="list-settings-list">
      <p> 
            <i class="fas fa-map-marker-alt"></i>&nbsp;
            United College of Engineering & Research,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A-31, UPSIDC, Industrial Area,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Naini, Prayagraj,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uttar Pradesh-211010
            </p>
            <p><a href="#" style="text-decoration:none"><i class="fas fa-envelope"></i>&nbsp;&nbsp;info@actiugi.com</a></p> 
      </div>
    </div>
  </div>
</div>

</div>

<br><br><br>
<?php
	include_once('includes/footer.php');