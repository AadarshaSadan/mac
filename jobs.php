<?php
include ('config/dbconn.php');

// $token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
// $token = bin2hex($token);

// echo $token;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobs | Macs Technology</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
      
:root {
  --primary-color: #c40000;
  --primary-color-lighter: rgb(255, 36, 36);
  --primary-color-darker: darkred;

  --back-ground-color: #ffffff;
  --secondar-back-ground-color: #f5f5f5;

  --dark-color: #000000;
  --grey-color: #ccc;
  --light-color: #ffffff;
}

@import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap");

* {
  box-sizing: border-box;
}

.boxcontainer_ {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  margin: 0;
  background-color: var(--secondar-back-ground-color);
}

.container {
  text-align: center;
}





#step .progress-bar-container {
  position: relative;
}

#step .progress-bar-container::before {
  content: "";
  position: absolute;
  background-color: var(--light-color);
  height: 10px;
  width: 100%;
  top: 50%;
  left: 0px;
  transform: translateY(-50%);
}

#step #progress-bar {
  position: absolute;
  background-color: var(--primary-color);
  height: 10px;
  width: 0%;
  top: 50%;
  left: 0px;
  transform: translateY(-50%);
  transition: 0.3s ease;
}

#step .circles-container {
  display: flex;
  justify-content: space-between;
  max-width: 100%;
  width: 400px;
}

#step .circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  background-color: var(--light-color);
  transition: 0.4s ease;
}

#step .circle h3 {
  position: absolute;
  left: 37%;
  top: -30%;
  font-size: 20px;
  color: var(--grey-color);
}

#step .circle.active {
  background-color: var(--primary-color);
}

#step .circle.active h3 {
  color: var(--light-color);
}

#step .form-group {
  display: flex;
  justify-content: center;
  margin: 20px;
}

#step .btn {
  margin: 3px;
  height: 30px;
  width: 80px;
  background-color: var(--primary-color);
  color: var(--light-color);
  border-radius: 10%;
  border-color: var(--light-color);
}

#step .btn:hover {
  cursor: pointer;
  background-color: var(--primary-color-lighter);
}

#step .btn:disabled {
  cursor: not-allowed;
  background-color: var(--primary-color-darker);
  color: var(--grey-color);
  border-color: var(--grey-color);
}

#step .btn:active {
  transform: scale(0.95);
}

#step .btn:focus {
  outline: 0;
}




    </style>

  </head>


  <body>
   

      <div class="container">

        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate"
            <span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Jobs</span> Available</h2>



          </div>

        </div>

<?php
   // $x=$_GET['id'];
     $sql="select * from macs_technology.add_job Order by job_id DESC ";
     // $result=$conn->query($sql);
  //  $row=$result->fetch_assoc();
      //$retval = mysql_query( $sql,$conn);

    $result=$conn->query($sql);
    //$rowcount=mysqli_num_rows($result);

    $conn->close();

   while($row=$result->fetch_assoc())
                            {
                              $jobid=$row['job_id'];
                              $jobtitle=$row['job_title'];
                              $jobcompany=$row['job_company'];
                              $jobaddress=$row['job_address'];
                              $jobtype=  strtolower($row['job_cat']);

            
   echo '<div class="col-md-12 ftco-animate">
            <div
              class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">'.$jobtitle.'</h2>
                  <div class="badge-wrap">';

      switch ($jobtype)
       {
        case 'parttime':
          # code...
        echo  '<span class="bg-primary text-white badge py-2 px-3">'.$jobtype.'</span>';
          break;
          case 'temporary':
          # code...
       echo '<span class="bg-danger text-white badge py-2 px-3">'.$jobtype.'</span>';
          break;
        
        default:
          # code...
          break;
      }
?>

                 
                  
                  




                  <?php 






  


                
                 echo'</div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3">
                    <span class="icon-layers"></span>
                    <a href="#">'.$jobcompany.'</a>
                  </div>
                  <div>
                    <span class="icon-my_location"></span>
                    <span>'.$jobaddress.'</span>
                  </div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="views/forms/job_application.php?jobtitle='.$jobtitle.'&jobid='.$jobid.'"class="btn btn-primary py-2 mr-1"
                  >Apply Job</a
                >
                
              </div>
            </div> 
          

            </div>';

          }

          ?>

        



          </div>







          </div>
          <!-- end -->

          
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

  <script type="text/javascript">
    
const circles = document.querySelectorAll(".circle");
const btnNext = document.getElementById("next");
const btnPrev = document.getElementById("prev");
const progressBar = document.getElementById("progress-bar");

let circleActive = document.querySelector(".active");

btnNext.addEventListener("click", function () {
  circleActive = circleActive.nextElementSibling;
  circleActive.classList.add("active");
  updateProgressBarWidth();
});

btnPrev.addEventListener("click", function () {
  circleActive.classList.remove("active");
  circleActive = circleActive.previousElementSibling;
  updateProgressBarWidth();
});

function updateProgressBarWidth() {
  const actives = document.querySelectorAll(".active");
  const currentWidth = ((actives.length - 1) / (circles.length - 1)) * 100;

  progressBar.style.width = currentWidth + "%";

  if (currentWidth === 0) {
    btnPrev.setAttribute("disabled", true);
  } else if (currentWidth === 100) {
    btnNext.setAttribute("disabled", true);
  } else {
    btnPrev.removeAttribute("disabled");
    btnNext.removeAttribute("disabled");
  }
}




  </script>

  </body>
</html>
