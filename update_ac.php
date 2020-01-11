<?php $host="localhost"; // Host name
 $username="root"; // Mysql username 
 $password=""; // Mysql password 
 $db_name="billing"; // Database name 
 $tbl_name="register"; // Table name 
 // Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect");
 mysql_select_db("$db_name")or die("cannot select DB");
 
 $id=$_POST['id'];
 $names=$_POST['names'];
$national_id=$_POST['national_id']; 
$tel_no=$_POST['tel_no'];
$sex=$_POST['sex'];
$sector=$_POST['sector']; 
$district=$_POST['district'];
$province=$_POST['province'];
 // update data in mysql database
 $sql="UPDATE $tbl_name SET names='$names', national_id='$national_id', tel_no='$tel_no', sex='$sex',sector='$sector', district='$district',province='$province' WHERE id='$id'";
 $result=mysql_query($sql); // if successfully updated. 
 if($result)
 { 
 header("Location:test.php"); 
}
 else
 {
 echo "ERROR"; 
 } ?>
