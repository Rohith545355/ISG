<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="main.css"/>
    <header>
  <div class="container">
    <nav>
        <ul>
        <li><a href="preArrivalChecklist.php">Pre Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a href="upcomingEvents.php">Upcoming Events</a>&nbsp;&nbsp;</li>
            <li><a href="postArrivalChecklist.php">Post Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a href="addPickUpRequest.php">Airport Pickup</a>&nbsp;&nbsp;</li>
            <li><a href="availableAccomdation.php">Accomdation</a>&nbsp;&nbsp;</li>
            <li><a href="becomeVolunteer.php">Become Volunteer</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<?php
require('db.php');
include('user_session.php');
date_default_timezone_set('America/Chicago');
if(isset($_POST['Post'])){
    $post = stripslashes($_REQUEST['post']);
    $post = mysqli_real_escape_string($db_con, $post);
    $date = date('Y-M-d H:i');
    $username = $_SESSION['username'];
    $query = "INSERT into `posts`(username, post, posted_date)
            VALUES ('$username','$post', '$date')";
    $result =mysqli_query($db_con, $query);
    if ($result){
        echo "<h3> Posted successfully</h3><br/>
          <p><a href='user_home.php'>Home Page</a></p>";
    }
    else{
      echo "<h3>Not posted</h3></br>
           <p><a href='user_home.php'>Home Page</a></p>";
 }
}
else {
?>
<body style="background-color:#D3D3D3">
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
<h1 class="login-title">Home Page</h1> 
    <form method="post" name="Post"> 
	<textarea name="post" rows="5" cols="150" placeholder="Post your question" required></textarea>
	<br>
	<input type="submit" name="Post" value="Post">
	<br>
</form>
</body>
<?php
    $query = "SELECT * from `posts`";
    $result = mysqli_query($db_con, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo "<p>".$row['username']."----".$row['post']."----".$row['posted_date']."</p>";
    }
}
?>
</html>