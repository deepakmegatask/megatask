<?php
	// Ajax page =================================
	date_default_timezone_set("Asia/kolkata");
	
	if(empty($_POST))
    {
    	header("Location:../index.php");
    }
	$formData = $_POST ;
	$dateis = date("Y-m-d H:i:s");
	$dateisStamp = strtotime(date("Y-m-d H:i:s"));


	// contactUsForm
	//=======================================================================================
	if(isset($formData['ajaxtype']) && $formData['ajaxtype']=='contactUsForm'){
       
	
		$mail_to =  "info@megataskweb.com";  //"bkvishwakarma113311@gmail.com";
        $subject = "Contact US Enquiry | megataskweb.com";
        $htmlContent = '
        <html>
        <head>
            <title>Customer Enquiry megataskweb.com </title>
        </head>
        <body>
            <h1>Hi Admin !</h1>
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
            	<tbody>	
                <tr>
                    <th>User Name: </th><td> '.$_POST["name"].'</td>
                </tr>
                <tr style="background-color: #e0e0e0;">
                    <th>Email:</th><td> '.$_POST["email"].'</td>
                </tr>
                <tr style="background-color: #e0e0e0;">
                    <th>Phone:</th><td> '.$_POST["phone"].'</td>
                </tr>
                <tr>
                    <th>Message: </th><td> '.$_POST["message"].'</td>
                </tr>
                <tr>
                    <th>Date : </th><td> '.date("d/m/Y g:i A").'</td>
                </tr>
                <tbody>
                
            </table>
        </body>
        </html>';

        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // // Additional headers
        $headers .= 'From: Megataskweb <admin@megataskweb.com>'. "\r\n";
        // $headers .= 'Cc: welcome@example.com' . "\r\n";
        // $headers .= 'Bcc: welcome2@example.com' . "\r\n";

        // Send email
        if(mail($mail_to, $subject, $htmlContent, $headers)){
         $emailstatus = 1;
         //echo "mail sent";
        }else{
            $emailstatus = 0;
            echo "something went wrong!";
        }


        // mail($mail_to,$subject,$msg);
        echo 1;
		exit;
	}
	

?>