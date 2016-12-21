<html>
<head>
    <?php
    include "loader.php";
    ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php 
$errormsg = '<center><b>Resta linker | Error no search link!</b>';
if (!empty($_GET["goto"])) 
{
	$dir1 = $_GET["goto"];
	$dir = "links/$dir1.txt";
	if(file_exists($dir))
	{
		echo("<center><b>Resta linker | 1 Sec and goto to url!!!</b>");
		$tolink = file_get_contents($dir);
		?>
		<html>
			<body>
				<title>One sec :)</title>
				<meta http-equiv="Refresh" content="1; URL=<?php echo $tolink;?>">
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
</html>