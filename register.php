<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="billing"; // Database name 
$tbl_name="register"; // Table name 
// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");
// Get values from form 
$names=$_POST['names'];
$national_id=$_POST['national_id']; 
$tel_no=$_POST['tel_no'];
$sex=$_POST['sex'];
$sector=$_POST['sector']; 
$district=$_POST['district'];
$province=$_POST['province'];



// Insert data into mysql 
$sql="INSERT INTO $tbl_name(names, national_id, tel_no,sex,sector,district,province)VALUES('$names', '$national_id','$tel_no','$sex','$sector','$district','$province')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
header("Location:register.html");
}
?> 
<script> alert("Data saved successfully");
<?php 
// close connection 
mysql_close();
?>