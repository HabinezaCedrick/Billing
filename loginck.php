<?php
$username=$_POST['username'];
$password=$_POST['password'];
MYSQL_connect("localhost","root","");
mysql_select_db("billing");
$sql="SELECT * FROM login where username='$username' and  password='$password'";
$result=mysql_query($sql) or die (mysql_error());
$title = mysql_fetch_array($result);
$row=mysql_num_rows($result);
if($row==1)
{
session_start();
$_SESSION['login_user']= $username;
$login_session =$row['username'];
$_SESSION['username']=$username;
	if($title['title']=='admin')
	{
	$_SESSION['password']=true;
	
	
	header("location: admin.html");
	

	return;
	}
	else
		{
		mysql_close(); // Closing Connection

		
		echo"Wrong Username or Password";
		include('login.html');
	}
	
		
	}
	else
	{
		
		?>
		<script type="text/javascript">
		alert('WRONG USER NAME OR PASSWORD');
		</script>
		<?php
		include('login.html');
	}
?>