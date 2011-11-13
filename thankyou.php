<?php
session_start();
require_once("rb.php");
include("db.php");


R::setup("mysql:host=$host;dbname=$database_name", $user, $password);

if(isset($_POST['payer_email'])) {

    $payer_email = $_POST['payer_email'];
    $user_id = $_SESSION['user_id'];

    $user = R::load('user', $user_id);

    $survey = R::dispense('survey');
    $survey->user = $user;
    $survey->date_of_payment = date("F j, Y, g:i a");
    $survey->payer_email = $payer_email;
    R::store($survey);

}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Click Buy Pay</title>
     <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
    <div class="topbar">
    	<div class="fill">
    		<div class="container">
    			<a href="page1.php" class="brand">Click Buy Pay</a>
    		</div>
    	</div>
    </div>

    <div class="container">
    	<div class="hero-unit">
    		<h1>Thank You!</h1>
            <p>Thank you for participating in this survey. We hope to see you soon.</p>
            <a href="page1.php" class="btn primary">Back to Home</a>
    	</div>
    </div>
</body>
</html>
