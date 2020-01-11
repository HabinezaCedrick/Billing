
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <title>LIST OF COMMENT</title>
    
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
                        <li><a href="retreive.php">CHECK ALL PAY</a></li>
						<li><a href="test.php">MANAGE CUSTOMERS AND USERS</a></li>
						<li class="active"><a href="">SEE ALL MESSAGES</a></li>
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
	<div class="main">
	<br><h1 align="center"><u>LIST OF COMMENTS </u></h1><br><br>
	<section class="services">
    	<div class="container">
            
            <div>
                <?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("billing") or die(mysql_error());

	// SQL query
	$strSQL = "SELECT * FROM contact";


	$rs = mysql_query($strSQL);
	?>
	<table width="900" border="1" cellpadding="3" cellspacing="1" bgcolor="bovine"> 
	<tr> <td colspan="7" bgcolor="#6495ED" align="center"><strong>Here are all the comments</strong> </td> </tr>
    <tr> <td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Names</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Subject</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Message</strong></td>
    <td align="center" bgcolor="#FFFFFF"><strong>Date</strong></td> 	
	<td align="center" bgcolor="#FFFFFF"><strong>Delete</strong></td>
	</tr>
	
	
	<?php
	while($row = mysql_fetch_array($rs)) {
    ?>
	
	   <tr> <td bgcolor="#FFFFFF"><?php echo $row['number'].""; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['names'.""] ; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['subject']."" ; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['email'] . ""; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['message'] . ""; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['date'] . ""; ?></td>
	   <td bgcolor="#FFFFFF"><a href="delete_com.php? number=<?php echo $row['number'].""; ?>&del=delete"><input type="submit"value="delete"></a></td>
	   </tr>

	 <?php 
	 } 
	 ?>
    </table>
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
	</div>
</body>
</html>
