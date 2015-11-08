<pre>
	<?php 
	$name = $_POST["name"];
	$adress = $_POST["adress"];
	$phone = $_POST["phone"];
	$size = $_POST["size"];
	$email_body = "Yo, Bitch!";
	$email_body ="Name: " . $name . "\n" . "adress: " . $adress . "\n" . "phone: " . $phone ."\n". "size: " . $size;
	echo $email_body;
	send mail
	    $emailTo ="studmuffin.info@gmail.com";
	   	$subject = "I hope this works!";
	   	
	    $headers="From: rob@robpercival.co.uk";
	    if(mail($emailTo, $subject, $email_body, $headers)) {
	    	echo "Yo!";
	   	}

 ?>
</pre>