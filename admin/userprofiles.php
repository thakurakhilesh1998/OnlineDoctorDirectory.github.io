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
    <title>Users Data</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">User Profiles</h3>
    </div>
    <?php 
        require_once '../database.php';
        $getAllData=mysqli_query($db,"SELECT * FROM `user`");
        ?>
        <table>
            <tr>
                <th>RollNo</th>
                <th>Name</th>
                <th>Course</th>
                <th>Sem</th>
                <th>Gender</th>
            </tr>
        <?php while($row=$getAllData->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['rollno']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['Course']?></td>
                    <td><?php echo $row['sem']?></td>
                    <td><?php echo $row['gender']?></td>
                </tr>
        <?php endwhile; ?>
        </table>
        <div class="backto" style="padding: 1rem;">
            <a href="admindashboard.php">Back to Admin Dashboard</a>
        </div>
</body>
</html>