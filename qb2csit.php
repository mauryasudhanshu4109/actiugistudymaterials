<?php
$page_title = "actiUGI | Education Store";

include ('includes/header.php');
?>
<div class="container wrapper">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="edstore.php">Edstore</a></li>
		<li class="breadcrumb-item active">Sessional Papers | Unit Test Papers  | Assignments | B. Tech. 2nd year | CS & IT Branch</li>
	</ul>
</div>

<div class="container" style="float: center;">
    <div class="row mt-5">
        <div class="col-4">
            <p><a href="edstore/M4_sessional_1.pdf" target="iframe_a">Mathematics-IV: S1</a></p>
            <p><a href="edstore/OS_sessional_1.pdf" target="iframe_a">Operating System: S1</a></p>
            <p><a href="edstore/TOC_sessional_1.pdf" target="iframe_a">Theory of Automata & Formal Languges: S1</a></p>
            <p><a href="edstore/M4_u1.pdf" target="iframe_a">Mathematics-IV: UT1</a></p>
            <p><a href="edstore/OS_u1.pdf" target="iframe_a">Operating System: UT1</a></p>
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