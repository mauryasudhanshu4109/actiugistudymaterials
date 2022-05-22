<?php
$page_title = "actiUGI | Glimpses";

include ('includes/header.php');
?>
<div class="container wrapper">
<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">UGI Glimpses</li>
	</ul>
</div>

<div id="glimpses" class="container">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
          <div class="card">
            <img src="images/campus-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">United Group of Institutions</h5>
              <p class="card-text">The <strong>United Group of Institutions,</strong> founded by<strong> late Shri Shiv Ram Das Gulati in 1951</strong> 
              emerged from a transport business to the giants in the fields of education, services, transportation and journalism. 
              The group made a mammoth leap in the education arena in the mid 80s by being the pioneers in computer education. And...</p>
              <a href="ugi.php" class="card-link" style="float: right;">Read more</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/campus-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Unted College of Engineering and Research, Prayagraj</h5>
              <p class="card-text">United College of Engineering and Research, Prayagraj is the first college of UGI established in 1951. 
              <b>And now, with 09 well established institutes in Allahabad and Greater Noida, over 11200 students and 
              more than 750 faculty members,</b> the United Group of Institutions is poised to reach...
              </p>
              <a href="ucer.php" class="card-link" style="float: right;">Read more</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/campus-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Central Library</h5>
              <p class="card-text"></p>
              <a class="card-link" href="library.php" style="float: right;">Read more</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/campus-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Life @ UGI</h5>
              <p class="card-text"></p>
              <a href="activities.php" class="card-link" style="float: right;">Read more</a>
            </div>
          </div>
        </div>
    </div>
  <div class="jumbotron" style="background-image: url('images/htop.jpg'); color: white;" >
  <h5 class="display-5">Hey, do you know about your college? Just go ahead & explore interesting glimpses about your college...</h5>
        <a href="ugi.php" class="btn btn-info mr-2">UGI</a>
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <a href="ucer.php" class="btn btn-outline-warning">UCER</a>  
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="uit.php" class="btn btn-outline-warning">UIT</a>  
        </div> 
        <div class="btn-group mr-2" role="group" aria-label="First group">
        <a href="ucem.php" class="btn btn-outline-warning">UCEM</a>  
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="uimf.php" class="btn btn-outline-warning">UIM-FUGS</a>  
        </div> 
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <a href="uim.php" class="btn btn-outline-warning">UIM</a>  
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="uip.php" class="btn btn-outline-warning">UIP</a>  
        </div>
</div>
</div>

<?php
	include_once('includes/footer.php');

