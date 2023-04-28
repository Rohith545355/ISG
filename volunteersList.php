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
            <li><a href="admin_home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">International Student Guide</h1>
<div class="form">
<h1 class="login-title">Volunteers List</h1> 
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    $result = mysqli_query($db_con,"SELECT * FROM users where volunteer='yes'");
   
    echo "<table border='1'> 
    <tr>
    <th>username</th>
    <th>Delete</th
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    ?>
    <td><a href="deleteVolunteer.php?username=<?php echo $row['username']; ?>">Delete</a></td>
    <?php
    echo "</tr>";
    }
    echo "</table>";
?>
</div>
</body>
</html>