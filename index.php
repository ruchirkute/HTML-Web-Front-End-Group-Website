<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
  <script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
  <script>
  	function getPassword(){
		alert("User Id is: admin\nPassword: admin (Case Sensitive)");
	}
  </script>

</head>
<body>
<div id="Tabs1" style="width:600px; margin:0 auto">
  <ul>
    <li><a style="border:1px solid #ffffff; margin:0 25px 0 0; color:#ffffff; box-shadow:#FFFFFF 0px 0px 15px" href="#tabs-1">Login</a></li>
    <li><a style="border:1px solid #ffffff; color:#ffffff; box-shadow:#FFFFFF 0px 0px 15px" href="#tabs-2">Sign Up</a></li>
  </ul>
  <div id="tabs-1">
		<?php
			if(isset($_REQUEST['failcode']))
			{
				if($_REQUEST['failcode']=="1")
				{
					echo "<p style=\"margin:80px auto; width:315px;font-size:20px; line-height:1.5\"><a href=\"\" >Oops! looks like username and password didn't match, Please try again.</a></p>";
				}
			}
			if(isset($_REQUEST['registered']))
			{
				if($_REQUEST['registered']=="succ")
				{
					echo "<p style=\"margin:80px auto; width:450px;font-size:22px; line-height:1.5\"><a href=\"\" >Congratulations you are registered.<br/>Please login in here.</a></p>";
				}
			}
					
        ?>
      <form method="post" class="login" action="login.php" >
        <p>
          <label for="username">Email:</label>
          <input type="text" name="username" id="username" Placeholder="name@example.com">
        </p>
    
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="Password">
        </p>
    
        <p class="login-submit">
          <button type="submit" class="login-button" name="login" id="login" value="login" onClick="abcd()">Login</button>
        </p>
    
        <p class="forgot-password"><a href="" onClick="getPassword()">Forgot your password?</a></p>
    </form>
  </div>
  <div id="tabs-2">
  			<h1 style="width:250px; color:#ffffff; margin:50px auto">Sign Up Here</h1>
    <form method="post" class="login" action="register.php" >
        <p>
          <label for="uname">Email:</label>
          <input type="text" name="uname" id="uname" Placeholder="name">
      </p>
    
        <p>
          <label for="pass">Password:</label>
          <input type="password" name="pass" id="pass" placeholder="Password">
        </p>
    
        <p class="login-submit">
          <button type="submit" class="login-button" name="register" id="register" value="register" onClick="abcd()">Login</button>
        </p>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>
