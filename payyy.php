<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="billing"; // Database name 
$tbl_name="register"; // Table name 
// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");
$strSQL = "SELECT * FROM register";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
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
    <meta name="author" content="HABINEZA">
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
                        <li ><a href="index.html">HOME</a></li>
						<li class="active"><a href="services.html">ONLINE SERVICES</a></li>
						<li><a href="aboutus.html">ABOUT US</a></li>
						<li><a href="news.html">NEWS &amp; EVENTS</a></li>
                        <li><a href="contactus.html">CONTACT US</a></li>
					<li><a href="loginn.php">LOGIN</a></li>
						
                    </ul>
                </div>

</div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
	<div class="main">
	<br><h1 align="center"><u>FILL THIS FORM</u></h1><br><br>
	<section class="cont_form">
	<div class="container">
		<div class="row">
			<form role="form" action="pay.php" method="post" >
			<div class="col-lg-6">
			<div class="form-group">
				<label for="InputName">Reg number</label>
				<div class="input-group">
				
				    <div class="input-group">
					<span class="input-group-addon"></span>
					
					<select name="reg_no" size=1 width="70px">
<?php
while($row = mysql_fetch_array($rs))
{
?>
 <option value="<?php echo $row['id'].""; ?> " > <?php echo $row['id'].""; ?> </option>";
 <?php
}
?>
</select>

					
				  </div>
			  </div>
			 
			  <div class="form-group">
				<label for="InputEmail">Amount </label>
				<div class="input-group">
					<span class="input-group-addon"><i ></i></span>
					<input type="text" name="amount" id="InputName" placeholder="Amount" required>
				  </div>
			  </div>
			  <div class="form-group">
				<label for="InputMessage">Slip Number</label>
				<div class="input-group">
					<span class="input-group-addon"><i></i></span>
					<input type="text"  name="slip_no" id="InputName" placeholder="Slip no" required>
				  </div>
			  </div>
			  
			  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-center">
			</div>
		  </form>
		  
		</div>
	</div>
	</section>
	</div>
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
</body>
</html>
