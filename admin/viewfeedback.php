<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("Location:adminlogin.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Counseler Feedback</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Counseler Feedback</h3>
    </div>
    <table>
        <tr>
            <th>Counseler Name</th>
            <th>Feedback Title</th>
            <th>Feedback Message</th>
        </tr>
    <?php
        require_once '../database.php';
        $getFeedBack=mysqli_query($db,"SELECT * FROM `feedback`");
        while($rows=$getFeedBack->fetch_assoc()):
    ?>
        <tr>
            <td><?php echo $rows['counseler']?></td>
            <td><?php echo $rows['title']?></td>
            <td><?php echo $rows['msg']?></td>
        </tr>
    <?php endwhile; ?>
    </table>
    <div class="backto" style="margin-top: 1rem;">
        <a href="admindashboard.php">Back to Admin Dashboard</a>
    </div>
</body>
</html>