<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Add Event</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="main.css"/>
    <header>
    <div class="container">
    <nav>
        <ul>
            <li><a href="volunteersList.php">Volunteers</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<?php
require('db.php');
    if (isset($_POST['create'])) {
        $event_name = stripslashes($_REQUEST['event_name']);
        $event_name = mysqli_real_escape_string($db_con, $event_name);
        $event_location = stripslashes($_REQUEST['event_location']);
        $event_location = mysqli_real_escape_string($db_con, $event_location);
        $event_date    = stripslashes($_REQUEST['event_date']);
        $event_date    = mysqli_real_escape_string($db_con, $event_date);
        $event_description = stripslashes($_REQUEST['event_description']);
        $event_description= mysqli_real_escape_string($db_con, $event_description);

        $query    = "INSERT into `events` (event_name, event_location, event_date, event_description)
                     VALUES ('$event_name', '$event_location', '$event_date', '$event_description')";
        $result   = mysqli_query($db_con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Successfully created an event
                  </h3><br>
                  <p class='link'>Click here to <a href='home_admin.php'>create another event</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='home_admin.php'>create an event</a></p>
                  </div>";
        }
    } else {
?>
<link rel="stylesheet" href="style1.css" />
<header>
<div class="container">
</div>
</header>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Students Guide</h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Create an Event</h1>
        <input type="text" class="login-input" name="event_name" placeholder="Event Name" required />
        <input type="text" class="login-input" name="event_location" placeholder="Event Location" required />
        <input type="date" class="login-input" name="event_date" placeholder="Start Date" required>
        <input type="textarea" rows="4" class="login-input" name="event_description" placeholder="Description" required />
        <input type="submit" name="create" value="create" class="login-button">

    </form>
    </div>
    </body>
<?php
    }
?>
</html>
