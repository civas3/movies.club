<?php 
ob_start();
if(isset($_POST['submit'])){
    $to = "_YOUREMAIL_GOESHERE_"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $country = $_POST['country'];
	$subject = $_POST['subject'];
	$message = "Subject: ". $subject . "\n\n" .  "Country: ". $country ."\n\n"."Name: ". $name ."\n\n". "Wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header("Location: ../thank-you-for-contacting.php");
    }
    ob_end_flush();
?>
