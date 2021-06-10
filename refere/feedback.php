
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


    <style>
@import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

/* body {
    background-color: #D32F2F;
    font-family: 'Calibri', sans-serif !important
} */

fieldset,
label {
    margin: 0;
    padding: 0
}

body {
    margin: 20px
}

h1 {
    font-size: 1.5em;
    margin: 10px
}

.rating {
    border: none;
    margin-right: 49px
}

.myratings {
    font-size: 85px;
    color: green
}

.rating>[id^="star"] {
    display: none
}

.rating>label:before {
    margin: 5px;
    font-size: 2.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005"
}

.rating>.half:before {
    content: "\f089";
    position: absolute
}

.rating>label {
    color: #ddd;
    float: right
}

.rating>[id^="star"]:checked~label,
.rating:not(:checked)>label:hover,
.rating:not(:checked)>label:hover~label {
    color: #FFD700
}

.rating>[id^="star"]:checked+label:hover,
.rating>[id^="star"]:checked~label:hover,
.rating>label:hover~[id^="star"]:checked~label,
.rating>[id^="star"]:checked~label:hover~label {
    color: #FFED85
}

.reset-option {
    display: none
}

.reset-button {
    margin: 6px 12px;
    background-color: rgb(255, 255, 255);
    text-transform: uppercase
}

.mt-100 {
    margin-top: 100px
}

.card {
    position: relative;
    display: flex;
    width: 350px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.card .card-body {
    padding: 1rem 1rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

p {
    font-size: 14px
}

h4 {
    margin-top: 18px
}

.btn:focus {
    outline: none
}

.btn {
    border-radius: 22px;
    text-transform: capitalize;
    font-size: 13px;
    padding: 8px 19px;
    cursor: pointer;
    color: #fff;
    background-color: #D50000
}

.btn:hover {
    background-color: #D32F2F !important
}
    </style>
  </head>


  <body>

  
    
    <?php
    ?>
    <div class=" container shadow p-5 mt-3">

    <!-- <form action="/mac/api/job/refconform.php" method="POST" enctype="multipart/form-data"> -->

    <form action="message.php" method="POST" enctype="multipart/form-data">

    <label for="title">Name</label>
    <input type="text" class="form-control" name="applicant" value="<?php echo $username; ?>" readonly/>
  <br/>



    <label for="title">Email address</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $email;?>" required />

</br>

    <label for="message">Message</label>
    <textarea name="message" class="form-control" rows="5" required></textarea>


    <div class="container d-flex justify-content-center mt-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center"> <span class="myratings">4.5</span>
                    <h4 class="mt-1">Rate us</h4>
                    <fieldset class="rating"> <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label> <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label> <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> <input type="radio" class="reset-option" name="rating" value="reset" /> </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>


    <center>
      <input type="submit" class="btn btn-success mt-4" value="Conform">
    </center>
    </form>

    </div>
      
  </body>



  <script>
$(document).ready(function(){

$("input[type='radio']").click(function(){
var sim = $("input[type='radio']:checked").val();
//alert(sim);
if (sim<3) { $('.myratings').css('color','red'); $(".myratings").text(sim); }else{ $('.myratings').css('color','green'); $(".myratings").text(sim); } }); });
</script>

  </html>