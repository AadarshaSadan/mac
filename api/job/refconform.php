<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// echo "Conform construction";

$applicantname=$_POST["applicant"];
$conformstatus=strtolower($_POST["Conform"]);
$job_request_id=$_POST["requestid"];
$applicantemail=$_POST["applicantemail"];
$userid=$_POST["userid"];

    echo $job_request_id;
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "macs_technology");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    
    if (!$conn) 
    {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
    }else{

        $result = $conn->query("INSERT INTO referral_confirm(confirm_flag ,job_requestid) values('$conformstatus','$job_request_id')");
       
          if($result)
                 {  
        	echo "Application Submitted";
                // Instantiation and passing `true` enables exceptions  
                $mail = new PHPMailer(true);

                    try {                  // Enable verbose debug output
                        $mail->isSMTP();                                            // Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = 'macstechnology000@gmail.com';                     // SMTP username
                        $mail->Password   = 'nepal@12345';                               // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                      //Recipients
                        $mail->setFrom('macstechnology000@gmail.com', 'Macs Technology');
                        $mail->addAddress($applicantemail, "Shakti");     // Add a recipient
                    // Optional name

                     // Content
                        $mail->isHTML(true);          
                        $date = date("Y-m-d h:i:s");                        // Set email format to HTML
                       
                       
                        if($conformstatus=='yes')
                        {

                        $mail->Subject = ' Call for interview';
                        $mail->Body    =  "<p>Hi Shakti,</p><br/>
                        <p>Thank you for applying to the <strong>&nbsp;front end developer</strong> position at <strong>Ayata inc</strong> .After reviewing your application, we would like to invite you to interview.We want you to be able to plan accordingly, so we&rsquo;ve provided a list of date and time options over the nextweek. Please take a look and let us know which date is best for you.</p>
                        <p><strong>[20, June &nbsp;&ndash; 2021, 2PM]</strong></p>
                        <p><strong>[22, June &nbsp;&ndash; 2021, 1AM]</strong></p>
                        <p><strong>[21, June &nbsp;&ndash; 2021, 2PM]</strong></p>
                        <p><strong>[23, June &nbsp;&ndash; 2021, 2PM]</strong></p>
                        <p>
                        <br></p>
                        if you have any feedback and message please follow the link</br> http://192.168.64.2/mac/refere/feedback.php?userid=".$userid.",<br/><br/>Regards,<br/>Macs Technology";
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        }else
                        
                        {
                        $mail->Subject = ' Application Rejected';
                        $mail->Body    =  "Dear Shakti,
                        We appreciate your interest in Ayata inc and the time you've invested in applying for the front end developer. We ended up moving forward with another candidate, but we'd like to thank you for talking to our team and giving us the opportunity to learn about your skills and accomplishments
                       <br/> if you have any feedback and message please follow the link</br> http://localhost/mac/refere/feedback.php?userid=".$userid.",<br/>
                        <br/>Regards,<br/>Macs Technology";
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        $mail->send();
                        }



                      
                             // echo 'Message has been sent';
                        } catch (Exception $e) 
                            {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }

              }

            }
?>