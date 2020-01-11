
<?php 
mysql_connect("localhost","root","");
mysql_select_db("rdaministries");

$searchtxt=mysql_real_escape_string(htmlentities($_POST['k']));
$_POST['k']=$searchtxt;
 if($_POST['k']==null)
	{
		echo"Make search plz";
	}
	else
	{ 
	$sql = "SELECT * FROM member where names='$_POST[k]' || itsinda='$_POST[k]' || cell='$_POST[k]'||village='$_POST[k]'";
		
		$result = mysql_query($sql) or die('Fail to Select Information' . mysql_error());
		if(mysql_num_rows($result)>0)
		{
		$_SESSION['names']=$_POST['k'];
		$_SESSION['itsinda']=$_POST['k'];
		$_SESSION['cell']=$_POST['k'];
		$_SESSION['village']=$_POST['k'];
		
		?>




<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
  <title>RWANDA MINISTRIES' NETWORK</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;0784206750
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;rwandaministries@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
           
                <center><h1><b>RWANDA MINISTRIES' NETWORK</b></h1></center>
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                           <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <?php include('menu.php');?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!--  Box -->
                       			<div class="search" align="center">
<form action="search_m.php"method="POST">

<input type="text" name="k" value="search here.." onClick="this.value='';" >
<input type="submit" name="search" value="search" class="">



</form>
</div> <br><br>
            <div>
                
	<table width="600" border="1" cellpadding="3" cellspacing="1" bgcolor="bovine"> 
	<tr> <td colspan="11" bgcolor="#6495ED" align="center"><strong>Here is list of all members</strong> </td> </tr>
    <tr> <td align="center" bgcolor="#FFFFFF"><strong>Member Id</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Names</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Itsinda</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Tel_no</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>National_id</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Cell</strong></td> 
	<td align="center" bgcolor="#FFFFFF"><strong>Village</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Picture</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Delete</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Update</strong></td>
	<td align="center" bgcolor="#FFFFFF"><strong>Details</strong></td>
	</tr>
	
	
	<?php
			while($row = mysql_fetch_assoc($result)) 
			{
				?>
	
	   <tr> <td bgcolor="#FFFFFF"><?php echo $row['id'].""; ?></td>  
	   <td bgcolor="#FFFFFF"><?php echo $row['names']."" ; ?></td> 
	   <td bgcolor="#FFFFFF"><?php echo $row['itsinda'] . ""; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['tel_no']."" ; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['national_id']."" ; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['cell']."" ; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['village']."" ; ?></td>
	   <td bgcolor="#FFFFFF"><?php echo $row['picture']."" ; ?></td>
	   <td bgcolor="#FFFFFF"><a href="delete_m.php ?id=<?php echo $row['id'].""; ?>&del=delete"><input type="submit"value="delete"></a></td>
	   <td bgcolor="#FFFFFF" align="center"><a href="#?rqst=send& id=<?php echo $row['id'].""; ?>"><input type="submit"value="update" ></a></td>
	   <td bgcolor="#FFFFFF" align="center"><a href="#?rqst=send& id=<?php echo $row['id'].""; ?>"><input type="submit"value="Details" ></a></td>
	   </tr></table>

	 <?php
}

}
else
{
echo"No result found"
?>
<script>
	 alert("No record found");
	 </script>


	<?php 
	}
}
	mysql_close();
	?>
	</div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">our Mission</h3>
                            <p>Some people are dying there on streets, thats why We are encouraging youth throught bible studies and give them the funds to come from streets</p><p> <a href="http://www.shutterstock.com/" target="_blank"></a>. Some people are dying there on streets, thats why We are encouraging youth throught bible studies and give them the funds to come from streets.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>0784206750
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">rwandaministries@gmail.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.example.com">www.wabigeraho.com</a>
                            </p>
                            
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Districts</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">NYARUGENGE</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">GASABO</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">KICUKIRO</a>
                                </li>
                                
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">facebook</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">twitter</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">linkedin</a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2016@ rwandaministries network</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->