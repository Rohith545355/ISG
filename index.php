<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['login'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($db_con, $username);
        $_SESSION['username'] =$username;
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db_con, $password);
        $usertype = stripslashes($_REQUEST['usertype']);
        $usertype = mysqli_real_escape_string($db_con, $usertype);
        $query1    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password' and volunteer='yes'";
        $result1 = mysqli_query($db_con, $query1);
        $rows1= mysqli_num_rows($result1);   
        $query2    = "SELECT * FROM `users` WHERE username='$username'
        AND password='$password'";
        $result2 = mysqli_query($db_con, $query2);
        $rows2= mysqli_num_rows($result2);
        if ($username=='Admin' and $password=='Admin' and $usertype=='Admin'){
            $_SESSION['username'] = $username;
            header("Location: admin_home.php");
        }
        else if( $rows1==1 and $usertype=='Volunteer'){
            $_SESSION['username'] = $username;
            header("Location: volunteer_home.php");
        }
        else if ($rows2 == 1 and $usertype="User") {
            $_SESSION['username'] = $username;
            header("Location: user_home.php");}
        else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="radio" id="usertype" name="usertype" value="User"><label for="User">User</label>
        <input type="radio" id="usertype" name="usertype" value="Volunteer"><label for="Volunteer">Volunteer</label>
        <input type="radio" id="usertype" name="usertype" value="Admin"><label for="Admin">Admin</label>
        <input type="submit" value="Login" name="login" class="login-button"/>
        <p class="link"><a href="registration.php">Create an account</a></p>
     
    </form>
<?php
    }
?>
</body>
</html>