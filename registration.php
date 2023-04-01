<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');
if(isset($_POST['registration'])){
 $name = stripslashes($_REQUEST['name']);
 $name = mysqli_real_escape_string($db_con, $name);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($db_con, $email);
 $mobileno = stripslashes($_REQUEST['mobileno']);
 $mobileno = mysqli_real_escape_string($db_con, $mobileno);
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($db_con, $username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($db_con, $password);
 $query = "INSERT into `users`(name, email, mobileno,username,password)
            VALUES ('$name','$email','$mobileno','$username','$password')";
 $result =mysqli_query($db_con, $query);
 if ($result){
    echo "<div class='form'>
          <h3> Registered successfully</h3><br/>
          <p class='link'><a href='index.php'>Login</a></p>
          </div>";
 }
 else{
    echo "<div class='form'>
          <h3>Registration not completed</h3></br>
          <p class='link'><a href='registration.php'>Registration</a></p>
          </div>";
 }
}
else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
    <form class="form" method="post" name="registration">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" require/>
        <input type="text" class="login-input" name="email" placeholder="Email" require/>
        <input type="text" class="login-input" name="mobileno" placeholder="Mobile No" require/>
        <input type="text" class="login-input" name="username" placeholder="Username" require/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>  
        <input type="submit" value="Registration" name="registration" class="login-button"/>
        <p class="link"><a href="index.php">Click here to login</a></p>
  </form>
  <?php
}
?>
</body>
</html>
