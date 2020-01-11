<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="billing"; // Database name 
$tbl_name="contact"; // Table name 
// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");
// Get values from form 
$names=$_POST['names'];
$subject=$_POST['subject']; 
$email=$_POST['email'];
$message=$_POST['message'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(names, subject, email,message,date)VALUES('$names', '$subject', '$email','$message','now()')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){

header("Location:contactus.html");
}
?> 
<?php 
// close connection 
mysql_close();
?>