
<?php

 $userid=$_GET["userid"];
// $jobid=$_GET["jobid"];

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "macs_technology");

    $connn= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (!$connn) 
    {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
  }




  else{
    $sql="select * from macs_technology.user WHERE id=$userid";
    $result1=$connn->query($sql);
   
   
   if($result1)
   {
    while($row=$result1->fetch_assoc())
                            { 
                    $username=$row["name"];
                    $email=$row["email"];
                            }
                }
                
                  $connn->close();
                  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feedback</title>
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
    ?>
    <div class=" container shadow p-5 mt-3">

    <!-- <form action="/mac/api/job/refconform.php" method="POST" enctype="multipart/form-data"> -->

    <form action="#" method="POST" enctype="multipart/form-data">

    <label for="title">Name</label>
    <input type="text" class="form-control" name="applicant" value="<?php echo $username; ?>" readonly/>
  <br/>






    <label for="title">Email address</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $email;?>" required />


  


      <br/>
     <label for="title">On a scale of 1 to 10, compared to other people you’ve hired, how would you rate this candidate ?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>




    <label for="message">Message</label>
    <textarea name="message" class="form-control" rows="5" required></textarea>

    <center>
      <input type="submit" class="btn btn-success mt-4" value="Conform">
    </center>
    </form>

    </div>
      
  </body>

  </html>