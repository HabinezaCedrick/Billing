
<?php
session_start();
include('session.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <title>WBS-Pay</title>
    
    <meta name="viewport">
	
     <H1 align="center">  <b>WELCOME TO WATER BILLING SYSTEM</b>
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               <a href="twitter.com"><i class="fa fa-twitter" id="twitter"></i></a>&nbsp &nbsp &nbsp 
                <a href="facebook.com"><i class="fa fa-facebook"></i></a>&nbsp &nbsp &nbsp 
                <a href="google.com"><i class="fa fa-google-plus"></i></a>&nbsp &nbsp &nbsp 
                <a href="youtube.com"><i class="fa fa-youtube"></i></a>
	 </H1>
	<meta name="description" content="">
    <meta name="author" content="NIYIGENA Odette">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
	
	
	<!--<link rel="stylesheet"  href="page.css"/>--> 
    <link rel="stylesheet" href="slider/engine0/style.css">
    <script type="text/javascript" src="slider/engine0/jquery.js"></script>
    <script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/freeze.css">
	<link href="logow.png" rel="icon"/>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->
	
</head>    

<body>

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                  
				  
                <div class="logo">
                    <img src="logow.png">
                </div>
                <!--/.navbar-header-->
                <div id="hmenu" >

<div>
                    <ul class="nav navbar-nav navbar-right" id="mainNav">
					    <li><a href="index.html">HOME</a></li>
						<li><a href="retreive.php">CHECK ALL PAY</a></li>
						<li><a href="test.php">MANAGE CUSTOMERS AND USERS</a></li>
						<li><a href="contactus.php">SEE ALL MESSAGES</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
						
                    </ul>
                </div>

</div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
	<div class="main"><br>
	
	<h1 align="center"><u>WELCOME TO YOUR SYSTEM </u></h1><br><br>
	<section class="cont_form">
	<div class="container">
	
	<b> WELCOME <h2><?php echo $_SESSION['login_user']; ?></h2> TO THE SYSTEM</b>
	<br>
	<br>
	<p>
	Here you can:
	<ul>
	<li>View and manage all pay
	<li>View and manage all customers
	<li>View and manage all coments from our customers
	<li>Add and remove all user of this system
	</ul>
	</p>
		
	</div>
	</section>
   <footer>
        <div class="container">
           

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2019 | All Rights Reserved.
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section> 
	</div>
</body>
</html>
