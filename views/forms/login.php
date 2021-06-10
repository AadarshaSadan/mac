<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
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
  </head>
  <body style="margin-top: 13.33%">
    <form
      method="POST"
      action="../../api/security/user/check_user.php"
      class="container shadow justify-content-center p-5"
      style="width: 33.33%"
    >
      <h2 class="text-center">Macs Technology</h2>
      <label class="mt-3" for="email">Email</label>
      <input type="text" name="email" class="form-control" required />

      <label class="mt-3" for="password">Password</label>
      <input type="password" name="password" class="form-control" required />

      <center><button type="submit" class="mt-3 btn btn-success">Login</button></center>
      <hr />
      <a href="register.php">Register new account </a>
    </form>

   <center> <p class="mt-2 "><?php session_start(); 
   if(isset($_SESSION['status']))
   {
     echo $_SESSION['status']; 
     $_SESSION['status']=""; 
   }
    ?></p></center>
  </body>
</html>
