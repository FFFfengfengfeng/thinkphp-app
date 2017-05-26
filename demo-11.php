<?php
//php超级全局变量
//全局变量列表

//$GLOBALS
$x = 75;
$y = 25;

function add() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;
echo "<br/>";
//$_SERVER 
echo $_SERVER['PHP_SELF'];
echo $_SERVER['HTTP_HOST'];


?>
<!DOCTYPE html>
<html>
	<head>
		<title>php 全局对象</title>
	</head>
	<body>
	    <form action="demo-11.php" method="post">
    		<input type="text" name="person" value="" />
	    	<input type="submit" value="提交"/>
	    </form>
	    <?php
	    //_REQUEST用于收集表单提交的数据
        if ($_REQUEST['person']) {
            $person = $_REQUEST['person'];
            echo "Hello" . $person . "<br/>";    
        }
	    ?>
	</body>
</html>