<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="main.css"/>
<header>
<div class="container">
    <nav>
        <ul>
            <li><a href="user_home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="preArrivalChecklist.php">Pre Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a href="upcomingEvents.php">Upcoming Events</a>&nbsp;&nbsp;</li>
            <li><a href="postArrivalChecklist.php">Post Arrival Checklist</a>&nbsp;&nbsp;</li>
            <li><a href="availableAccomdation.php">Temp Accomdation</a>&nbsp;&nbsp;</li>
            <li><a href="becomeVolunteer.php">Become Volunteer</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<?php
    require('db.php');
    include('user_session.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        $username = $_SESSION['username'];
        $student = stripslashes($_REQUEST['student']);
        $student = mysqli_real_escape_string($db_con, $student);
        $Idnum = stripslashes($_REQUEST['Idnum']);
        $Idnum = mysqli_real_escape_string($db_con, $Idnum);
        if ($student == 'yes' and $Idnum!=null){
            $query = "UPDATE `users` set volunteer='yes' where username='$username'";
            $result =mysqli_query($db_con, $query);
        
if ($result){
    echo "<div class='form'>
          <h3> Enrolled as Volunteer successfully</h3><br/>
          <p class='link'><a href='user_home.php'>Home</a></p>
          </div>";
 }
 else{
    echo "<div class='form'>
          <h3>Enrollment not completed</h3></br>
          <p class='link'><a href='becomeVolunteer.php'>Become Volunteer</a></p>
          </div>";
 }
}
    }
else {
?>
<h1 style="font-size:30px;text-align:center;color:#000000">International Student Guid</h1>
    <form class="form" action="" method="post">
        Are you active student?
        <br>
        <input type="radio"  name="student" value="yes">Yes
        <input type="radio" name="student"  value="no">No
        <br>
        <br>
        <input type="text" class="login-input" name="Idnum" placeholder="ID number" require/>
        <input type="Submit" name="submit" value="submit" class="login-button">

    </form>
<?php
    }
?>

</body>

</html>