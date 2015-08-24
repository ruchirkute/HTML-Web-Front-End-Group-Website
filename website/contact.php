<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>CS557 Project</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<style>
		.input{
			width: 430px;
			height: 28px;
			font-size: 16px;
			font-family: 'monospace';
		}
		.btn{
			height: 32px;
			width: 110px;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div id="header">
			<div id="logo">
				<a href="index.html"><img src="images/logo.jpg" alt="" /></a>			
			</div>		
			<ul>
				<li><a href="index.html"><span>home</span></a></li>
				<li><a href="about.html"><span>about us</span></a></li>
				<li><a href="game.html"><span>Play Game</span></a></li>
				<li><a href="chat.html"><span>Chat</span></a></li>
				<li  class="selected"><a href="contact.php"><span>contact us</span></a></li>			
			</ul>
	</div>
       
	<div id="body">
		<div class="contact">
			<h1>contact us</h1>	
                              <div style="padding:50px 0 0 0;">
				<h3>NORTHWESTERN POLYTECHNIC UNIVERSITY</h3>
				<ul>
					<li>47671 Westinghouse Drive Fremont, CA 94539, USA</li>
					<BR>
					<li><b>Vidit Mody:</b>&nbsp;&nbsp;<a href="mailto:vickym.vidit@gmail.com">vickym.vidit@gmail.com</a></li>
                    <li><b>Shruti Patel:</b>&nbsp;&nbsp;<a href="mailto:sjpatel_91@yahoo.co.in">sjpatel_91@yahoo.co.in</a></li>
                    <li><b>Ruchir Kute:</b>&nbsp;&nbsp;<a href="mailto:ruchirkute2003@gmail.com">ruchirkute2003@gmail.com</a></li>
                    <li><b>Brijesh Patel:</b>&nbsp;&nbsp;<a href="mailto:brijeshpatel685@gmail.com">brijeshpatel685@gmail.com</a></li>
                    <li><b>Janak Patel:</b>&nbsp;&nbsp;<a href="mailto:patel.janak24@gmail.com">patel.janak24@gmail.com</a></li>
                    <li><b>Hardik:</b>&nbsp;&nbsp;<a href="mailto:hardik.rupareliya@gmail.com">hardik.rupareliya@gmail.com</a></li>
          		</ul>
			</div><br/><br/><br/>
		<?php
				if(isset($_REQUEST['succ'])){
					if($_REQUEST['succ']=="succ")
					{
						echo "<h3>Message submitted successfully. </h3>";
					}
				}
				if(isset($_REQUEST['error'])){
					if($_REQUEST['error']=="fail")
					{
						echo "<h3>We are sorry, Please try again later. </h3>";
					}
				}
			?>
            <div style="padding:50px 0 0 0;">
		<form method="post" action="http://cloud9-spa.com/test/website/mail.php" style="margin: -34px 0 0 0">
                    Name:<br />
                    <input class="input" type="text" name="name" id="name" placeholder="Please enter your name" /><br />
                    <br>
                    Address:<br />
                    <input disabled="disabled" class="input" type="text" name="addr" id="addr" />&nbsp;&nbsp;&nbsp; <input class="btn" type="button" onclick="getLocation()" value="Get Address"><br />
                    <br>
                    Email:<br />
                    <input class="input" type="email" name="mail" id="mail" placeholder="Please enter your email" /><br />
                    <br>
                    Phone:<br />
                    <input class="input" type="text" name="phone" id="phone" placeholder="Please enter your phone number" /><br />
                    <br>
                    Your Message:<br />
                    <textarea  class="input" name="message" id="message" placeholder="Please type your message" style="height:100px"></textarea><br /><br />
                    <input class="btn" type="submit" name="save" id="save" value="Send"/>
                </form>
			</div>

		
		</div>
	</div>
		<div id="footer">
			<div>	
				<div>
				<h3>follow us:</h3>
				<a href="http://facebook.com/" target="_blank"><img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/512/Facebook-icon.png" width="50"></a>		
				<a href="http://twitter.com/" target="_blank"><img src="http://www.cabarrus.k12.nc.us/cms/lib09/nc01910456/centricity/domain/1513/twitter_logo%20copy.gif" width="50"></a>
			</div>		
			</div>
			<div>
				<p>&copy Copyright 2015. All rights reserved to Vidit Mody and Team</p>
			</div>
		</div>
	</body>
    <script>
		var lat,lng;
			function getLocation() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else { 
				}
			}
			
			function showPosition(position) {
				lat=position.coords.latitude;
				lng=position.coords.longitude;
				getaddr(lat,lng);
			}
		function getaddr(lat1,lng1)
		{
			
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					var resp= xmlhttp.responseText;
					document.getElementById('addr').value=resp;
				}
			}
			xmlhttp.open("GET","getAddress.php?lat="+lat1+"&lng="+lng1+"",true);
			xmlhttp.send();
		}
	</script>
</html>