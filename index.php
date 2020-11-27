<?php 
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Counseling System</title>
    <link href="style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Personal Counseling System</h3>
    </div>
    <div class="group-btn">
        <?php 
            session_start();
            if(isset($_SESSION['user'])): ?>
                <a href="user/userdashboard.php" class="homebtn"><img src="images/graduated.png"><div>User Dashboard</div></a>
                <a href="admin/adminlogin.php" class="homebtn"><img src="images/admin.png"><div>Admin Section</div></a>
                <a href="counseler/clogin.php" class="homebtn"><img src="images/counsellor.png"><div>Counsler Section</div></a>       
            <?php else: ?>
                <a href="user/login.php" class="homebtn"><img src="images/graduated.png"><div>User Login</div></a>
                <a href="admin/adminlogin.php" class="homebtn"><img src="images/admin.png"><div>Admin Section</div></a>
                <a href="counseler/clogin.php" class="homebtn"><img src="images/counsellor.png"><div>Counsler Section</div></a>
                <a href="user/user registration.php" class="homebtn"><img src="images/login.png"><div>User Registration</div></a>
            <?php endif; ?>
    </div>
</body>
</html>