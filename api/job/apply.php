<?php

    $send_to = $_POST["email"];
    $full_name = $_POST["name"];
    $job_title = $_POST["job_title"];
    $message = $_POST["message"];
    $refreemail=$_POST["refferer_name"];
    $jobid=$_POST["jobid"];
    $send_to_ref=$_POST["refferer_name"];
    $full_name_ref="Prof doc Jhon doe";

   // $token = openssl_random_pseudo_bytes(16);
//Convert the binary data into hexadecimal representation.
    // $token = bin2hex($token);

    $token = "abca";

   
        session_start();
    if($_SESSION["logged_in"]==true)
    {
                  $userid=$_SESSION["id"];
    
                   }
                       else

    {

        header("location: /views/forms/login.php");
    }

    // if(isset($send_to) and isset($full_name) and isset($_FILES["file"]))
    // {


if(isset($send_to_ref) && isset($full_name_ref))
{
 include '../../send_mail_ref.php';
}else{
        echo  "couldnot perform query";
    }



     if(isset($send_to) and isset($full_name))
    {
       include '../../send_mail.php';
    

        $date = date("Y-m-d h:i:s");
        // $target_dir =__DIR__."/uploads".DIRECTORY_SEPARATOR ;
// $target_file_name = $date.basename($_FILES["file"]["name"]);

        $target_file_name="abjnjsn";

// $target_file = $target_dir.$target_file_name;

// move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        $con = include '../../config/database.php';
        $result = $con->query("INSERT INTO job_request(userid,email,name,job_title,job_id,message,document_name,applied_at,referermail,token) values('$userid','$send_to','$full_name','$job_title','$jobid','$message','$target_file_name','$date','$refreemail','$token')");

        if($result)echo "Application Submitted";
        else {
            echo $con->error;            
            echo "Couldnot submit Application";

        }


    }

    else{
        echo $send_to."\n ".$full_name."<br/> $job_title <br/> $message couldnot perform query";
    }





?>