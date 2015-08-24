<?php 
if(isset($_REQUEST['save'])){
	if($_REQUEST['save']=="save")
	{
		    $to = "vickym.vidit@gmail.com"; // this is your Email address
			$from = $_REQUEST['mail']; // this is the sender's Email address
			$name = $_REQUEST['name'];
			$address=$_REQUEST['addr'];
			$phone=$_REQUEST['phone'];
			$msg=$_REQUEST['message'];
			
			$subject = "Form submission";
			$subject2 = "Copy of your contact request";
			
			$message = $name." is facing some technical issue: ".$msg."<br/><br/>His phone number is: ".$phone."<br/><br/>Address is: ".$address;
			$message2 ="Here is the copy of your message\n\n<br/><br/>".$name." is facing some technical issue:" . "\n\n<br/><br/>His phone number is: ".$phone."\n\n<br/><br/>Address is: ".$address;
		
			$headers = "From:".$from;
			$headers2 = "From:".$to;
			
			$cnf=mail($to,$subject,$message,$headers);
			$cnf1=mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
			echo "Mail Sent. Thank you ".$name.", we will contact you shortly.";
			echo "<br/><br/>".$message;
			// You can also use header('Location: thank_you.php'); to redirect to another page.
			echo $cnf."-----".$cnf1;
			if($cnf&&$cnf1){
				//echo "cnf: ".$cnf;
				echo "<script>window.location.href = \"contact.php\";</script>";
			}
			else{
				//echo "cnf1: ".$cnf1;
				echo "<script>window.location.href = \"contact.php?error=fail\";</script>";
			}

	}
}
?>