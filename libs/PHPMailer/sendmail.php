<?php

function send_mail($sendto,$name,$subject,$message){
	require 'PHPMailerAutoload.php';
				//$sendto='sajilochat@gmail.com';
	//$name='Homestay Nepal';
	$replyto='noreply@homestaynepal.com';
				//$subject ='sunil sapkota test mail';
	$body ='<div style="border:2px solid red; height:25px;"><center><b>Welcome to The Homestay nepal </b></center></div><br/><br/>';
	$msg = '<p>'.$message.'</p>';


	$mail = new PHPMailer;
			// $mail->SMTPDebug = 4;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
			// $mail->SMTPDebug = 3;   // to check if there is any error.
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'sajilochats@gmail.com';                 // SMTP username
			$mail->Password = '4S@jiloChats';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			$mail->setFrom($replyto, $name);
			$mail->addAddress($sendto);     // Add a recipient
			$mail->addReplyTo($replyto);
			// print_r($_FILES['file']); exit;

			// used if file need to be sent.


			// for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
			// 	$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			// }
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $body .$msg;
			// $mail->AltBody = $message;
			if(!$mail->send()) {
				echo "<script>alert('Message could not be sent.<br/>Mailer Error: ".  $mail->ErrorInfo."');</script>";
			} else {
				echo "<script>alert('Message has been sent');</script>";
			}
		}
	// }


		?>
		<?php 
		// send_mail('sunilsapkota9@gmail.com','to test mail sending','body of email sent form localhost thank you.');
		?>

