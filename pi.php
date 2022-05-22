<?php
$page_title = "actiUGI | Education Store";

include ('includes/header.php');
?>
<div class="container wrapper">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="edstore.php">Edstore</a></li>
		<li class="breadcrumb-item active">Placement Interview Papers | Question-Banks | Multiple Choice Questions | CS & IT Branch</li>
	</ul>
</div>

<div class="container" style="float: center;">
    <div class="row mt-5">
        <div class="col-4">
            
            <p><a href="edstore/OS1_placement_mcq.pdf" target="iframe_a">Operating System: Unit-1</a></p>
            <p><a href="edstore/OS2_placement_mcq.pdf" target="iframe_a">Operating System: Unit-2</a></p>
            <p><a href="edstore/OS3_placement_mcq.pdf" target="iframe_a">Operating System: Unit-3</a></p>
            <p><a href="edstore/OS4_placement_mcq.pdf" target="iframe_a">Operating System: Unit-4</a></p>
            <p>Source: CSTechnocrat(https://www.cstechnocrat.com)</p>
        </div>
        <div class="col-8 mb-5">
            <div class="card center">
            <iframe src="edstore/teacher.png" height="500px" width="100%" name="iframe_a" title="Iframe Example">
            </iframe>
            </div>
        </div>
    </div>
</div>
<?php
	include_once('includes/footer.php');