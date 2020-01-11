<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <title>LIST OF CUSTOMERS</title>
    
    <meta name="viewport">
	
     <H1 align="center"> <b>WELCOME TO WATER BILLING SYSTEM</b>
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
                        <li><a href="retreive.php">CHECK ALL PAY</a></li>
						<li class="active"><a href="">MANAGE CUSTOMERS AND USERS</a></li>
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
	<section class="services">
    	<div class="container">
            <h1 style="text-align: center;">UPDATE INFO</h1> <br><br>
            <div>





<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("billing") or die(mysql_error());
	 
	 $sql="SELECT* FROM register WHERE id='".$_GET['id']."'"; 
	 $result=mysql_query($sql); 

	// Execute the query (the recordset $rs contains the result)
	$row=mysql_fetch_array($result);
	?>
	<form method="post" action="update_ac.php">
    <table border="1" > 
	<tr> <td colspan="8" bgcolor="#6495ED" align="center"><strong>UPTADE CUSTOMER'S INFO</strong> </td> </tr>
    <tr> <td align="center" bgcolor="#FFFFFF"><strong>Id No</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Names</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>National ID  </strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Telefone</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Sex</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Sector</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>District</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Province</strong></td>
	</tr>
	<tr> 
	   
	   <td bgcolor="#FFFFFF"><input name="id" type="text" value=" <?php echo $row['id'].""; ?>"></td>
	   <td bgcolor="#FFFFFF"> <input name="names" type="text" value="<?php echo $row['names'.""] ; ?>"></td> 
	   <td bgcolor="#FFFFFF"> <input name="national_id" type="text" value="<?php echo $row['national_id']."" ; ?>"></td> 
	   <td bgcolor="#FFFFFF"> <input name="tel_no" type="text" value="<?php echo $row['tel_no'] . ""; ?>"></td>
	   <td bgcolor="#FFFFFF"> <input name="sex" type="text" value="<?php echo $row['sex'].""; ?>"></td>
	   <td bgcolor="#FFFFFF"> <input name="sector" type="text" value="<?php echo $row['sector'.""] ; ?>"></td>
	   <td bgcolor="#FFFFFF"> <input name="district" type="text" value="<?php echo $row['district']."" ; ?>"></td>
	   <td bgcolor="#FFFFFF"> <input name="province" type="text" value="<?php echo $row['province'] . ""; ?>"></td>
	   </tr>
	   </table>
	   <input type="submit" name="Submit" value="Update" align="center"/>
	   </form>
	  
 <?php 
	mysql_close();
	?>
	</div>
	<div>
                
            </div>
			
			
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
            <!-- / .row -->
        </div>
    </section> 
</body>
</html>