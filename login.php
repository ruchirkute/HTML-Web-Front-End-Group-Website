<?php
	$redirect="false";
	$succ_url="website";
	$failUrl="index.php";
	if(isset($_REQUEST['login']))
	{
		if($_REQUEST['login']=="login")
		{
			$uname=$_REQUEST['username'];
			$pass=$_REQUEST['password'];
			$file_name = 'cred.txt';	
			$file = file_get_contents($file_name, true);
			$ex=explode("---",$file);
			for($i=0; $i<count($ex); $i++)
			{
				if($ex[$i]==$uname.",".$pass)
				{
					$redirect="true";
					break;
				}
				else
				{
					$redirect="false";
				}
			}
			if($redirect=="true")
			{
				header('Location: '.$succ_url);
			}
			else
			{
				header('Location: '.$failUrl."?failcode=1");
			}
		}
	}
?>
