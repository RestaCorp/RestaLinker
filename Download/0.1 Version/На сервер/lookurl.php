<html>
<head>
    <?php
    include "loader.php";
    ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php 
$errormsg = '<center><b>Resta linker | No search url!</b>';
if (!empty($_GET["view"])) 
{
	$dir1 = $_GET["view"];
	$dir = "links/$dir1.txt";
	if(file_exists($dir))
	{
		echo("<center><b>Resta linker | 1 Sec and view to url!!!</b>");
		$tolink = file_get_contents($dir);
		?>
		<html>
			<body>
				<title>Resta linker</title>
				<br><br><b1><?php echo $tolink; ?></b1>
			</body>
		</html>
		<?php
		include "header.php";
	}	
	else
	{
		?>
		<html>
		<head>
			<title>Error! 0_o</title>
		</head>
		</html>
		<?php
		echo($errormsg);
		include "header.php";
	}
} 
else
{
?>
<html>
<head>
	<title>Error! 0_o</title>
</head>
</html>
<?php
echo($errormsg);
include "header.php";
}
?>
</head>
</html>