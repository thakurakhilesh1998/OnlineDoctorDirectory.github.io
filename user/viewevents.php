<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">View Events</h3>
    </div>

    <table>
        <tr>
            <th>Notification Date</th>
            <th>Event Name</th>
            <th>Event Details</th>
        </tr>
    <?php 
        require_once '../database.php';
        $events=mysqli_query($db,"SELECT * FROM `events`");
        while($row=$events->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['edate']?></td>
                <td><?php echo $row['ename']?></td>
                <td><?php echo $row['edetails']?></td>
            </tr>
        <?php endwhile; ?>

    </table>
    <div class="backto" style="padding: 1rem;">
        <a href="userdashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>