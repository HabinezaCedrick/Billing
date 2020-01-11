<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <title>LIST OF PAY</title>
    
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
                        <li class="active"><a href="retreive.php">CHECK ALL PAY</a></li>
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
	<div class="main">
	<br><h1 align="center"><u>LIST OF PAY</u></h1><br><br>
	<section class="services">
    	<div class="container">
           
			<div class="search" align="center">
<form action="search.php"method="POST">

<input type="text" name="k" value="search here.." onClick="this.value='';" >
<input type="submit" name="search" value="search" class="">
</tr></td>


</form>
</div> <br><br>
            <div>



<?php 
mysql_connect("localhost","root","");
mysql_select_db("billing");

$searchtxt=mysql_real_escape_string(htmlentities($_POST['k']));
$_POST['k']=$searchtxt;
 if($_POST['k']==null)
	{
		echo"Make search plz";
	}
	else
	{ 
	$sql = "SELECT * FROM pay where id='$_POST[k]' || reg_no='$_POST[k]'";
		
		$result = mysql_query($sql) or die('Fail to Select Information' . mysql_error());
		if(mysql_num_rows($result)>0)
		{
		$_SESSION['id']=$_POST['k'];
		$_SESSION['reg_no']=$_POST['k'];
		
		?>
		
		<table width="600" border="1" cellpadding="3" cellspacing="1" bgcolor="bovine"> 
	<tr> <td colspan="7" bgcolor="#6495ED" align="center"><strong>Search result</strong> </td> </tr>
    <tr> <th align="center" bgcolor="#FFFFFF"><strong> Bill Id</strong></th> 
	<th align="center" bgcolor="#FFFFFF"><strong>Customer Reg</strong></th>
	<th align="center" bgcolor="#FFFFFF"><strong>Amount</strong></th> 
	<th align="center" bgcolor="#FFFFFF"><strong>Slip_no</strong></th> 
	<th align="center" bgcolor="#FFFFFF"><strong>Delete</strong></th> 
	<th align="center" bgcolor="#FFFFFF"><strong>Update</strong></th>
	<th align="center" bgcolor="#FFFFFF"><strong>Details</strong></th>
	
	</tr>
	<?php
			while($row = mysql_fetch_assoc($result)) 
			{
				?>
			
	
	   <tr> <td bgcolor="#FFFFFF"><?php echo $row['id'].""; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['reg_no'.""] ; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['amount']."" ; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['slip_no'] . ""; ?></td>
	   <td bgcolor="#FFFFFF"><a href="delete_p.php?id=<?php echo $row['id'].""; ?>&del=delete"><input type="submit"value="delete"></a></td>
	   <td bgcolor="#FFFFFF" align="center"><a href="updatep.php?rqst=send& id=<?php echo $row['id'].""; ?>"><input type="submit"value="update" ></a></td>
	   <td bgcolor="#FFFFFF" align="center"><a href="printpay.php?rqst=send& id=<?php echo $row['id'].""; ?>"><input type="submit"value="Details" ></a></td>
	   
	   </tr>
	   <?php
}
echo"</table>";
}
else
{
echo"no record found!";
}
}
?>
	   
	   
	
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
                    Copyright 2015 | All Rights Reserved.
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section> 
</body>
</html>