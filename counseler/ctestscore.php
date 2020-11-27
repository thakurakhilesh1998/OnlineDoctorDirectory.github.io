<?php
    session_start();
    if(!isset($_SESSION['counseler']))
    {
        header("Location:clogin.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Test Score</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">User Test Score</h3>
    </div>
    <table>
        <tr>
            <th>Test Id</th>
            <th>Roll No</th>
            <th>Correct Answer</th>
            <th>Total Question</th>
        </tr> 
    <?php 
        require_once '../database.php';
        $testscore=mysqli_query($db,"SELECT * FROM `testresult`");
        while($row=$testscore->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['testid']?></td>
                <td><?php echo $row['userid']?></td>
                <td><?php echo $row['Correct Answer']?></td>
                <td><?php echo $row['Total Question']?></td>
            </tr>
        <?php endwhile;?>
    </table>
    <div class="backto" style="padding: 1rem;">
        <a href="cdashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>