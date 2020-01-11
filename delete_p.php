<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("billing") or die(mysql_error());
	if($_GET['del']=="delete"){
    mysql_query("DELETE FROM pay WHERE id='".$_GET['id']."'");
    header("Location:retreive.php");
	?>  <script>
	 alert("Record Deleted Successfully");
	 </script>
	<?php 
	 }
	 ?>
	
	 <?php 
	 mysql_close();
	 ?>