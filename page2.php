 <?php
session_start();
require_once("rb.php");
include("db.php");

R::setup("mysql:host=$host;dbname=$database_name", $user, $password);

$all_entries = R::count('survey');

$show_paypal = true;

// init
$max_lifetime = 10;
$max_oneyar = 10;
$total = $max_lifetime + $max_oneyar;


if($all_entries >= $total) {
    $show_paypal = false;
    $remaining_lifetime = 0;
    $remaining_oneyear = 0;
}
elseif($all_entries >= 0 and $all_entries <= $max_lifetime) {
    if($all_entries == 0 or $all_entries == 1) $remaining_lifetime = 8;
    else  $remaining_lifetime = $max_lifetime - $all_entries;

    $remaining_oneyear = 10;
}
elseif($all_entries > $max_lifetime and $all_entries < $total) {
    $remaining_lifetime = 0;
    $remaining_oneyear = $total - $all_entries;
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
    <style>
        .content {
            margin: 0 auto;
            padding: 24px;
        }
        .content p {
            line-height: 24px;
            margin: 20px 0;
        }

        #paypal {
            margin-top: 20px;
            padding-top: 20px;
        }
        .bottom {
            text-align: center;
        }

        #lifetime_access_section  {
            position:absolute;
         }


        #membership {
            margin-left: 400px;
        }

        .clear { clear: both;}

    </style>
</head>
<body>
    <div class="topbar">
        <div class="fill">
            <div class="container">
                <a href="#" class="brand">Click Buy Pay</a>
            </div>
        </div>
    </div><!-- end of topbar -->

    <div class="container">
        <div class="content">
<<<<<<< HEAD
    <p><strong>Your contact email is <input type="email" class="input" value="<?php echo $_GET['email']; ?>" id="confirm_email" />.</strong></p>
        <p>Thank you for expressing interest in ClickBuyPay</p>
        <p>This offer is ONLY for people interested in ClickBuyPay just like YOU</p>
        <p>Pay $0.01 and you get to use ClickBuyPay for <span style="color:red;text-decoration:underline;"><strong>FREE LIFETIME ACCESS</strong></span> when we launch</p>
        <p style="text-decoration:underline"><strong>Your $0.01 will NOT be refunded under any circumstances.</strong></p>
        <p>First 10 people stand to win free lifetime membership. Another 10 get free membership for 1 year.</p>
        <p style="text-decoration:underline"><strong>Once we sell out all 20 slots, we will CLOSE this offer.</strong></p>
    <?php if($show_paypal): ?>
        <div id="paypal">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="PTXDFBEKUN9LN">
                <input type="hidden" name="return" value="http://localhost:8888/survey-for-startup-idea/thankyou.php">
                <input type="hidden" name="rm" value="2">
                <input type="image" id="paypal-box" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div><!-- end of paypal -->
    <?php else: ?>
        <div id="message">
            <p style="color:red;">
                WE HAVE SOLD OUT ALL 20 SLOTS AND NOW BUSY BUILDING ClickBuyPay! Thank you for your support.
            </p>
        </div>
    <?php endif; ?>

    <div class="row bottom">
    <div id="counter" class="span8">
        <div id="lifetime_access_section">
            <h1><?php echo $remaining_lifetime;?><h1>
            <p style="color:#3a7ce5;font-size:20px;">FREE LIFETIME ACCESS LEFT</p>
        </div>
        <div id="membership" class="span8">
            <h1><?php echo $remaining_oneyear;?><h1>
            <p style="color:#3a7ce5;font-size:20px;">FREE 1 YEAR MEMBERSHIPS</p>
=======
    	<p><strong>Your contact email is <input type="email" class="input" value="<?php echo $_GET['email']; ?>" id="confirm_email" />.</strong></p>
		<p>Thank you for expressing interest in ClickBuyPay.</p>
		<p>This offer is ONLY for people interested in ClickBuyPay just like <u>YOU</u></p>
        <p>Pay $0.01 and you get to use ClickBuyPay for <span style="text-decoration:underline; color:red; font-weight: bold">FREE LIFETIME ACCESS</span> when we launch.</p>
        <p><u><strong>Your $0.01 will NOT be refunded under any circumstances.</strong></u></p>
        <p>First 10 people stand to win free lifetime membership. Next 10 get free membership for 1 year!</p>
        <p><span style="text-decoration:underline; font-weight: bold">Once we sell out all 20 slots, we will CLOSE this offer.</span></p>

<div id="paypal">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PTXDFBEKUN9LN">
<input type="hidden" name="return" value="http://sit.rp.edu.sg/91178/clickbuypay/thankyou.php">
<input type="hidden" name="rm" value="2">
<input type="image" id="paypal-box" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div><!-- end of paypal -->
>>>>>>> c7d46b0e3154348460e33e4beba35112d0f1b1c6
        </div>
    </div>
    </div><!-- end of row-->

    <div class="clear"></div>

            </div>
        </div>
    </body>
</html>
