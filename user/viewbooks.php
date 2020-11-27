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
    <title>View Books</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">View Books</h3>
    </div>
    <table>
        <tr>
            <th>Subject Name</th>
            <th>Semester</th>
            <th>Book Name</th>          
        </tr>
    <?php 
        require_once '../database.php';
        $sem=$_SESSION['user']['sem'];
        $cname=$_SESSION['user']['Course'];
        $assigns=mysqli_query($db,"SELECT * FROM `books` WHERE `bsem`='$sem' AND `bcourse`='$cname'");
        while($rows=$assigns->fetch_assoc()):?>
            <tr>
                <td><?php  echo $rows['bsun']?></td>
                <td><?php  echo $rows['bsem']?></td>
                <td><?php  echo $rows['bname']?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <div class="backto" style="padding: 1rem;">
        <a href="userdashboard.php">Back to User Dashboard</a>
    </div>
</body>
</html>