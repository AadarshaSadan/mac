
<?php




$userid=$_GET["userid"];
$jobid=$_GET["jobid"];

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
    $sql="select * from macs_technology.job_request WHERE job_id=".$jobid." AND userid=".$userid."";
    $result1=$connn->query($sql);
   
   
   if($result1)
   {
    while($row=$result1->fetch_assoc())
                            { 
                    $jobtitle_=$row["job_title"];
                    $refereremail_=$row["referermail"];
                    $job_request_id=$row["id"];
                    $useremail=$row["email"];
                            }
                }
                 $sql1="select * from macs_technology.user WHERE id=".$userid."";
                 $result2=$connn->query($sql1);
            if($result2)
                  {
                  while($row1=$result2->fetch_assoc())
                    { 
                    $applicantname=$row1["name"];
                    }
}
                  $connn->close();
                  }

?>






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
    ?>
    <div class=" container shadow p-5 mt-3">

    <form action="/mac/api/job/refconform.php" method="POST" enctype="multipart/form-data">

    <label for="title"  hidden="true"   >Userid</label>
    <input type="text"  hidden="true" class="form-control" name="userid" value="<?php echo $userid; ?>" readonly/>
  <br/>

    <label for="title">Applicantname</label>
    <input type="text" class="form-control" name="applicant" value="<?php echo $applicantname; ?>" readonly/>
  <br/>



     <label for="title" hidden="true">jobrequestid</label>
    <input type="text"  hidden="true"  class="form-control" name="requestid" value="<?php echo $job_request_id; ?>" readonly/>
  <br/>




     <label for="title">Applicantemail</label>
    <input type="text" class="form-control" name="applicantemail" value="<?php echo $useremail; ?>" readonly/>
  <br/>




    <label for="title">Does this person eligible for this job?</label>
  </select>
    <select  class="form-control" name="Conform" id="conformation">
   <option value="yes">Yes</option>
    <option value="no">No</option>

    </select>
  <br/>



    <label for="title">Applicant Job Title</label>
    <input type="text" class="form-control" name="applicant"  value="<?php echo $jobtitle_; ?>" readonly/>


  <br/>

    <label for="title">Your FullName</label>
    <input type="text" class="form-control" name="name" value="" required />


   <br/>
    <label for="contactnumber">Contact Number</label>
    <input type="text" class="form-control" name="name" value="" required />


<br/>

    <label for="title">Email</label>
    <input type="Email" class="form-control" name="name" value="<?php echo $refereremail_; ?>" readonly />

<br/>
    <label for="title">How was the past work experence of this person?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>

<br/>
    <label for="title">What was the character of the person?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>



    <br/>
     <label for="title">Why did this candidate leave your company?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>


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