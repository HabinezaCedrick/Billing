<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="billing"; // Database name 
$tbl_name="pay"; // Table name 
// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");
// Get values from form 
$reg_no=$_POST['reg_no'];
$amount=$_POST['amount'];
$slip_no=$_POST['slip_no'];




// Insert data into mysql 
$sql="INSERT INTO $tbl_name(reg_no,amount,slip_no,date)VALUES( '$reg_no','$amount','$slip_no','now()')";
$result=mysql_query($sql);
header("Location:payyy.php");
?>
<?php 
// close connection 
mysql_close();
?>