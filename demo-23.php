<?php
//PHP Session
session_start();

$_SESSION['views'] = 1;

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP session</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">
		    <h1>PHP session</h1>
		    <?php
		    if (isset($_SESSION['views'])) {
		        $_SESSION['views'] = $_SESSION['views'] + 1;
		    } else {
		        $_SESSION['views'] = 1;
		    }
            echo "浏览量: " . $_SESSION['views'];
		    ?>
		</div>
	</body>
</html>