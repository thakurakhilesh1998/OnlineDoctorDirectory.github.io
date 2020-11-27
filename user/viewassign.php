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
    <title>View Assignments</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">View Assignments</h3>
    </div>

    <table>
        <tr>
            <th>Subject Name</th>
            <th>Semester</th>
            <th>Assignment Name</th>
        </tr>
    <?php 
        require_once '../database.php';
        $sem=$_SESSION['user']['sem'];
        $cname=$_SESSION['user']['Course'];
        $assigns=mysqli_query($db,"SELECT * FROM `assign` WHERE `sem`='$sem' AND `cname`='$cname'");
        while($rows=$assigns->fetch_assoc()):?>
            <tr>
                <td><?php  echo $rows['sub']?></td>
                <td><?php  echo $rows['sem']?></td>
                <td><?php  echo $rows['assign']?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <div class="backto" style="padding: 1rem;">
        <a href="userdashboard.php">Back to User Dashboard</a>
    </div>
</body>
</html>