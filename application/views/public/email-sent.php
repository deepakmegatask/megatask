<?php
	if(isset($_POST['mailSend'])){
		$to = $_POST['emailTo'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$mail_to = trim($to);
        
        $htmlContent = '
        <html>
        <head>
            <title>'.$subject.'</title>
        </head>
        <body>
            '.$message.'
        </body>
        </html>';

        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // // Additional headers
        $headers .= 'From: Website Only ₹999 <info@megataskweb.com>'. "\r\n";
        // $headers .= "Reply-To: info@megataskweb.com\r\n";
        // $headers .='X-Mailer: PHP/' . phpversion();
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= 'Cc: welcome@example.com' . "\r\n";
        // $headers .= 'Bcc: welcome2@example.com' . "\r\n";

        // Send email
        if(mail($mail_to, $subject, $htmlContent, $headers)){
         $emailSent =  "mail sent";
        }else{
            echo "something went wrong!";
            exit;
        }

	}
?>