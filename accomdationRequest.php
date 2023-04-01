<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Accommodation</title>
    <link rel="stylesheet" href="style.css"/> 
    <link rel="stylesheet" href="main.css"/>
<header>
<div class="container">
    <nav>
        <ul>
            <li><a href="user_home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a>Pre Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a href="upcomingEvents.php">Upcoming Events</a>&nbsp;&nbsp;</li>
            <li><a>Post Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a>Temp Accomdation</a>&nbsp;&nbsp;</li>
            <li><a>Become Volunteer</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<?php
require('db.php');
if(isset($_POST['accomdation'])){
 $name = stripslashes($_REQUEST['name']);
 $name = mysqli_real_escape_string($db_con, $name);
 $mobileno = stripslashes($_REQUEST['mobileno']);
 $mobileno = mysqli_real_escape_string($db_con, $mobileno);
 $startDate = stripslashes($_REQUEST['startDate']);
 $startDate = mysqli_real_escape_string($db_con, $startDate);
 $type = stripslashes($_REQUEST['type']);
 $type = mysqli_real_escape_string($db_con, $type);
 $additionalInfo = stripslashes($_REQUEST['additionalInfo']);
 $additionalInfo = mysqli_real_escape_string($db_con, $additionalInfo);
 $query = "INSERT into `accomdation`(name, mobileno, startDate, type, additionalInfo)
            VALUES ('$name','$mobileno','$startDate','$type', '$additionalInfo')";
 $result =mysqli_query($db_con, $query);
 if ($result){
    echo "<div class='form'>
          <h3>Accommodation info added successfully</h3><br/>
          <p class='link'><a href='user_home.php'>Home</a></p>
          </div>";
 }
 else{
    echo "<div class='form'>
          <h3>Accommodation info not yet added</h3></br>
          <p class='link'><a href='accomdationRequest.php'>Pick Up</a></p>
          </div>";
 }
}
else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
    <form class="form" method="post" name="accomdation">
        <h1 class="login-title">Accomdation</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" require/>
        <input type="text" class="login-input" name="mobileno" placeholder="Mobile No" require/>
        <input type="date" class="login-input" name="startDate" placeholder="Date" require/>
        <input type="radio" id="type" name="type" value="Available"><label for="Available">Available</label>
        <input type="radio" id="type" name="type" value="Looking"><label for="Looking">Looking</label>
        <textarea name="additionalInfo" rows="3" cols="65" placeholder="Any additinal information"></textarea>  
        <input type="submit" value="Accommodation" name="accomdation" class="login-button"/>
        <p class='link'><a href='accomdation.php'>Accommodation</a></p>
  </form>
  <?php
}
?>
</body>
</html>
