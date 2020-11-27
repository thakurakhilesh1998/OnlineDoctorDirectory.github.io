<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        header("Location:userdashboard.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registraion</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">User Register</h3>
    </div>
    <?php if(isset($_GET['fail'])):?>
        <div class="error">RollNo or Username or Email  is already Registered!!!</div>
    <?php endif;?>
        <div class="form-container">
            <form class="form" method="POST" action="register.php">
                <input type="text" name="name" required placeholder="Name"><br>
                <input type="text" name="rollno" required placeholder="Roll No"><br>
                <input type="email" name="email" required placeholder="Email"><br>
                <input type="text" name="username" required placeholder="username"><br>
                <input type="password" name="pass" required placeholder="Password"><br>
                <input type="text" name="course" required placeholder="Course Name"><br>
                <input type="text" name="sem" required placeholder="Semester"><br>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
                <input type="submit" value="User Register">
            </form>
        </div>
        <a href="../index.php" class="backto">Back to Home</a>
    </div>
</body>
</html>