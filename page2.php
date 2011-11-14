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
                <a href="#" class="brand">Click Buy Pay</a>
            </div>
        </div>
    </div><!-- end of topbar -->

    <div class="container">
        <div class="content">
    	<p><strong>Your contact email is <input type="email" class="input" value="<?php echo $_GET['email']; ?>" id="confirm_email" />.</strong></p>
		<p>Thank you for expressing interest in ClickBuyPay.</p>
		<p>This offer is ONLY for people interested in ClickBuyPay just like <u>YOU</u></p>
        <p>Pay $0.01 and you get to use ClickBuyPay <span style="font-color:red; font-weight: strong">FOR FREE LIFETIME ACCESS</span> when we launch.</p>
        <p><u><strong>Your $0.01 will NOT be refunded under any circumstances.</strong></u></p>
        <p>First 10 people stand to win free lifetime membership. Next 10 get free membership for 1 year!</p>

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
        </div>
    </div>
</body>
</html>
