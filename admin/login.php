<?php
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    // databases connection
    $conn=mysqli_connect('localhost','root','','project');
    if($conn->connect_errno!=0){
        die("connection failed");
    }
        $sql= "SELECT * FROM admin WHERE email= '".$email."' AND password= '".$password."'";
        $result= $conn->query($sql);
        if($result->num_rows>0)
        {
        session_start();
        $_SESSION['user'] = $email;
        header('Location:index.php');
    }
    else{
      echo "<script> alert('user not found');

      </script>";
      
    }}
      ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="CS/style.css">
</head>
<body>
<div class="container mt-5 ">
    <div class="d-flex justify-content-center mb-3">
    <form method="post" action="login.php" class="form">
      <h1 class="news ">Newsportal Login</h1>
     
  <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" autocomplete class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
  </div>

  <button type="submit" class="btns btn-primary">Login</button><br><br>
  
</form>
</div>  
</div>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>