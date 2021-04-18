<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = "s00211783@mail.itsligo.ie";
		$headers = "From: ".$mailFrom;
		$txt = "You Have Received An Email from ".$name.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);
		header("Location: contactus.php?mailsend");
	}
 ?>