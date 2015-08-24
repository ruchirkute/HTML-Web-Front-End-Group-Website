<?php
	$url="index.php";
	if(isset($_REQUEST['register']))
	{
		if($_REQUEST['register']=="register")
		{
			$uname=$_REQUEST['uname'];
			$pass=$_REQUEST['pass'];
			$file_name = 'cred.txt';	
			$file = file_get_contents($file_name, true);
			$file .= "---".$uname.",".$pass;
			file_put_contents($file_name, $file);
			header('Location: '.$url."?registered=succ");
		}
	}
	
?>