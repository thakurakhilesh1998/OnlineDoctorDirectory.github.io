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
    <title>View Profile</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">User Profile</h3>
    </div>
    <?php 
        require_once '../database.php';
        $rollno=$_SESSION['user']['rollno'];
        $userprofile=mysqli_query($db,"SELECT * FROM `user` WHERE `rollno`=$rollno");
        while($data=$userprofile->fetch_assoc()): ?>
            <table>
                <tr>
                    <td>RollNo</td>
                    <td><?php echo $data['rollno']?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $data['name']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $data['email']?></td>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td><?php echo $data['Course']?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><?php echo $data['sem']?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $data['gender']?></td>
                </tr>
            </table>
        <?php endwhile;?>
        <div class="backto" style="padding: 1rem;">
            <a href="userdashboard.php">Back to Dashboard</a>
        </div>
</body>
</html>