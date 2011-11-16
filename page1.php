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
    <link href="styles/validationEngine.jquery.css" rel="stylesheet">
    <link href="styles/template.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">

    </script>

</head>
<body>
    <div class="topbar">
    	<div class="fill">
    		<div class="container">
    			<a href="#" class="brand">Click Buy Pay</a>
    		</div>
    	</div>
    </div>

    <div class="container">
        <div class="content">
        <div class="video">
        <ul class="media-grid">
            <li>
            <iframe  width="580" height="360" src="http://www.youtube.com/embed/GRFzMR8fAjw" frameborder="0" allowfullscreen></iframe>
            </li>
        </ul><br/>
        </div><!-- end of video -->
        <div id="row">
            <form action="process.php" method="post" class="form-stacked" id="survey_form">
            <fieldset>

                <div class="clearfix">
                    <label for="question1" class="survey_question">1. Do you want to use this to sell your products or services?</label>
                    <div class="input">
                        <input type="radio" value="Yes" name="question1" class="validate[required]" id="yes_answer"/><span> Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" value="No" name="question1" class="validate[required]" id="no_answer" /><span> No</span>
                    </div>
                </div><!--end of clearfix-->

                <div class="clearfix">
                    <label for="question2" class="survey_question">2. How much are you willing to pay?</label>
                	<div class="input pull-left">
                		<ul class="inputs-list">
                			<li>
                                <label>
                                    <input type="radio" value="monthly" name="question2"class="validate[required] radio2" id="monthly" />
                                    <span>Monthly ONLY</span>
                                </label>
                			</li>
                			<li>
                                <label>
                                    <input type="radio" value="percentage" name="question2"class="validate[required] radio2" id="percentage" />
                                    <span>Percentage of sales price ONLY</span>
                                </label>
                			</li>
                            <li>
                                <label>
                                    <input type="radio" value="monthly_and_percentage" name="question2"class="validate[required] radio2" id="monthly_and_percentage" />
                                    <span>Monthly AND percentage of sales price</span>
                                </label>
                            </li>
                		</ul>
                	</div><!-- end of input -->

                    <div class="input monthly_price combobox pull-left">
                        <select name="monthly_price" id="monthly_price">
                            <option value="" disabled="disabled">Please Select</option>
                            <option value="More than SGD $47">More than SGD $47</option>
                            <option value="SGD $27 - $47">SGD $27 - $47</option>
                            <option value="SGD $17 - $27">SGD $17 - $27</option>
                            <option value="SGD $7 - $17">SGD $7 - $17</option>
                            <option value="Less than SGD $7">Less than SGD $7</option>
                        </select>
                    </div>
                    &nbsp;&nbsp;
                    <div class="input percentage combobox pull-left">
                        <select name="percentage" id="percentage_validation">
                            <option value="" disabled="disabled">Please Select</option>
                            <option value="3">3%</option>
                            <option value="2">2%</option>
                            <option value="1">1%</option>
                        </select>
                    </div>
                </div><!--end of clearfix-->

                <div class="clearfix">
                    <label for="email" class="survey_question">3. Leave your email address if you want to be informed when we launch</label>
                    <br/>
                    <div class="input">
                        <input class="validate[required,custom[email]]" id="email" name="email" size="30" type="text" placeholder="john.doe@gmail.com" />
                    </div>
					<br />
					<p style="text-decoration:underline"><strong>We ONLY use your email to contact you when we launch. NO SPAM. NO SELLING OF EMAIL.</strong></p>
			        
                </div>
            <br/>
            <div class="clearfix">
            <input type="submit" class="large btn primary" value="Submit" name="btnSubmit"/>
            </div>
</fieldset>


            </form>

        </div>
        </div>
    </div><!-- end of container -->
</body>
</html>

