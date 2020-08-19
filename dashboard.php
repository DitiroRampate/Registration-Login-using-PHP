<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="author" content="Ditiro">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<div class="demo-content">
    <div>
        Welcome <?php echo $_SESSION["name"]; ?>! Click to <a href="logout.php">Logout</a>.
    </div>

    <div></div>
</div>
</body>
</html>
