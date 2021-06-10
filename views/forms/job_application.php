<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Application</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

   

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900"
      rel="stylesheet"
    />
  </head>


  <body>

  
    
    <?php


session_start();
    if(isset($_SESSION["logged_in"]) and $_SESSION["logged_in"]==true){

      $title = $_GET["jobtitle"];
      $jobid=$_GET["jobid"];
      



     }
    else {

    echo file_get_contents('../templates/please_login_first.html');

      die();
    }

      
    ?>
    <div class=" container shadow p-5 mt-3">

    <form action="../../api/job/apply.php" method="POST" enctype="multipart/form-data">

    <label hidden="true"  for="title">Jobindex</label>
    <input type="text" hidden="true" class="form-control" name="jobid" value="<?php echo $jobid;?>" readonly/>

    <label for="title">Fullname</label>
    <input type="text" class="form-control" name="name" value="<?php echo $_SESSION["name"];?>" readonly/>



    <br/>
    <label for="title">Refferer Email address</label>
    <input type="text" class="form-control" name="refferer_name" placeholder="jhondoe@gmail.com" value=""> 
    </label>

    <br/>
    <label for="title">Email address</label>
    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>" readonly/>

    <br/>
    <label for="title">Title</label>
    <input type="text" class="form-control"  name="job_title" value="<?php echo $title;?>" readonly/>
    


    <br/>

    <label>Upload Document </label>
    <input type="file" class="form-control" name="file" required/>

    <br/>

    <label for="message">Message</label>
    <textarea name="message" class="form-control" rows="10" required></textarea>

    <center><input type="submit" class="btn btn-success mt-4" value="Apply"></center>
    </form>

    </div>
      
  </body>

  </html>