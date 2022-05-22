<?php
$page_title = "actiUGI | Education Store";

include ('includes/header.php');
?>
<div class="container wrapper">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="edstore.php">Edstore</a></li>
		<li class="breadcrumb-item active">Sessional Papers | B. Tech. 1st year | Common to all branches</li>
	</ul>
</div>

<div class="container" style="float: center;">
    <div class="row mt-5">
        <div class="col-4">
            <p><a href="edstore/PPS_sessional_1.pdf" target="iframe_a">Programming for Problem Solving: S1</a></p>
            <p><a href="edstore/PHY_sessional_1.pdf" target="iframe_a">Engineering Physics: S1</a></p>
            <p><a href="edstore/ELEC_sessional_1.pdf" target="iframe_a">Basic Electrical Engineering: S1</a></p>
            <p><a href="edstore/M1_sessional_1.pdf" target="iframe_a">Engineering Mathematics-I: S1</a></p>
            <p><a href="edstore/AI_sessional_1.pdf" target="iframe_a">Artificial Intelligence: S1</a></p>
            <p><a href="edstore/SS_sessional_1.pdf" target="iframe_a">Soft Skills: S1</a></p>
            <p><a href="edstore/PPS_sessional_2.pdf" target="iframe_a">Programming for Problem Solving: S2</a></p>
            <p><a href="edstore/PHY_sessional_2.pdf" target="iframe_a">Engineering Physics: S2</a></p>
            <p><a href="edstore/ELEC_sessional_2.pdf" target="iframe_a">Basic Electrical Engineering: S2</a></p>
            <p><a href="edstore/SS_sessional_2.pdf" target="iframe_a">Soft Skills: S2</a></p>
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