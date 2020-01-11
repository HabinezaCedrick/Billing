<?php $host="localhost"; // Host name
 $username="root"; // Mysql username 
 $password=""; // Mysql password 
 $db_name="billing"; // Database name 
 $tbl_name="pay"; // Table name 
 // Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect");
 mysql_select_db("$db_name")or die("cannot select DB");
 
 $id=$_POST['id'];
 $reg=$_POST['reg_no'];
$amount=$_POST['amount']; 
$slip_no=$_POST['slip_no'];

 // update data in mysql database
 $sql="UPDATE $tbl_name SET  id='$id',reg_no='$reg', amount='$amount', slip_no='$slip_no' WHERE id='$id'";
 $result=mysql_query($sql); // if successfully updated. 
 if($result)
 { 
 header("Location:retreive.php"); 
}
 else
 {
 echo "ERROR"; 
 } ?>
