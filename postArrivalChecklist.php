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
            <li><a>Become Volunteer</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<?php
require('db.php');
include('user_session.php');
?>
<body style="background-color:#D3D3D3">
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
<h1 style="font-size:30px;text-align:center;color:#FF0000">Post Arrival Checklist</h1>
<p>1. Report to the University and submit all required details or documents</p>
<p>2. Take the ID card</p>
<p>3. Pay the fee and enroll for classes</p>
</html>