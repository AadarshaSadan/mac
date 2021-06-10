<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body style="margin-top: 9.99%">
    <form
      method="POST"
      action="../api/user/insert_user.php"
      class="container shadow justify-content-center p-5"
      style="width: 33.33%">
      <h2 class="text-center">Register New Account</h2>

      <label for="fullname" class="mt-3"> Fullname </label>
      <input type="text" name="fullname" class="form-control" id="fullname_" required />
      <label class="mt-3" for="email">Email</label>
      <input type="text" name="email" id="email_" class="form-control" required />

      <label class="mt-3" for="password">Password</label>
      <input type="password" name="password" id="password_" class="form-control" required />

      <center>
        <button type="submit"  name="Register" class="mt-3 btn btn-danger">Register</button>
      </center>
      <hr />
      <!-- <a href="views/forms/login.php">Already have account ? Login</a> -->
    </form>

    <center>
      <p class="mt-2 text-danger">
        <?php session_start(); if(isset($_SESSION['status']) and $_SESSION['status']!="")echo $_SESSION['status']; ?>


<!-- <?php
//if(isset($_POST['Register']))
{
  // $name=$_POST['fullname'];
  // $email=$_POST['Email'];
  // $password=$_POST['Password'];
  // $mobno=$_POST['RollNo'];
  // $rollno=$_POST['RollNo'];
  // $category=$_POST['Category'];
  // $type='Student';

//   $sql="insert into LMS.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

//   if ($conn->query($sql) === TRUE) {
// echo "<script type='text/javascript'>alert('Registration Successful')</script>";
// } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
// echo "<script type='text/javascript'>alert($name)</script>";
//}
}

?> -->

      </p>
    </center>
  </body>
</html>
