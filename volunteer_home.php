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
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
<div class="form">
<h1 class="login-title">Pickup Requests</h1> 
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    $result = mysqli_query($db_con,"SELECT * FROM pickup");
   
    echo "<table border='1'> 
    <tr>
    <th>Name</th>
    <th>Mobile No</th>
    <th>Flight No</th>
    <th>Travel Date</th>
    <th>Pickup</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['mobileno'] . "</td>";
    echo "<td>" . $row['flightno'] . "</td>";
    echo "<td>" . $row['pickupDate']. "</td>";
    echo "<td> Pickup</td>";
    
    
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>