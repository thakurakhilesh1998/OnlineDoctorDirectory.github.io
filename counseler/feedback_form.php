<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">FeedBack Form</h3>
    </div>

    <div style="text-align: center;margin-top:1rem;font-size:1.6rem">You can give feedback to the admin of the system about the working of the system.</div>
        <?php if(isset($_GET['pass'])):?>
            <div class="pass">Feedback Sent Successfully to Admin!</div>
        <?php endif; ?>
        <?php if(isset($_GET['fail'])):?>
            <div class="error">Feedback Sent Failed!!</div>
        <?php endif; ?>
        <div class="form-container">
            <form class="form" method="GET" action="feedbackfxn.php">
                <input type="text" name="title" required placeholder="Title of Feedback"><br>
                <textarea type="password" name="msg" required placeholder="Message for admin" rows="3"></textarea><br>
                <input type="submit" value="Counseler Login" style="width: 140px;">
            </form>
        </div>
        <div class="backto">
            <a href="cdashboard.php">Back to Counseler Page</a>
        </div>
</body>
</html>