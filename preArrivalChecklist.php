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
            <li><a>Pre Arrival Checklist</a>&nbsp;&nbsp;</li>
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
<h1 style="font-size:30px;text-align:center;color:#FF0000">Pre Arrival Checklist</h1>
<p>1. Collect the I20 from the university</p>
<p>2. Fill DS-160 form.<a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/forms/ds-160-online-nonimmigrant-visa-application.html">visit here for more information</a>
<p>3. Fill the details and pay the SEVIS fee of USD 350 to apply for visa.<a href="https://atlas.my.salesforce-sites.com/LoginLandingPage">visit here for more information</a>
<p>4. Gather all required documents for Visa Interview and appear for Interview
<p>5. Book the flight tickets. Below are the few websites to book the flight tickets
        <ol>
        <li><a href="https://www.studentuniverse.com"> Student Universe </a></li>
        <li> <a href="https://www.expedia.com/"> Expedia </a></li>
        <li><a href="https://www.cheapoair.com/"> cheapoair</a></li>
        <li><a href="https://flydealfare.com/"> flydealfare </a></li>
        <li> <a href="https://www.airindia.in/"> Air India </a></li>
        <li><a href="https://www.emirates.com/"> Emirates</a></li>
        </ol>
<p>6. Look for Accomdation</p>
<p>7. Report to the university regarding your arrival date</p>
<p>8. Take the necessary vaccines for international travel</p>
</html>