<html>
<head>
	<?php
    include "loader.php";
    ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php 
$errormsg = '<center><b>Resta linker | I NOT LIKE FLOODERS AND HACKERS (*_*)</b>';
$errormsg1 = '<center><b>Resta linker | Поля пустые,или запрос не дошел</b>';
$errormsg2 = '<center><b>Resta linker | Данная ссылка уже существует -__-</b>';
if (!empty($_POST["Sulka"])) 
	{
	if (!empty($_POST["url"])) 
		{
		$url = $_POST['url'];
		$dir = "links/$url.txt";
		if(!file_exists($dir))
			{
			file_put_contents($dir, $_POST['Sulka']);
			?>
			<html>
			<head>
				<title>Created!</title>
				<center><b>Готовый результат : link?goto=<?php echo htmlspecialchars($_POST['Sulka']); ?></b>
			</head>
			</html>
			<?php
				/*<b><?php echo htmlspecialchars($_POST['Sulka']); ?></b>
				<b><?php echo htmlspecialchars($_POST['url']); ?></b>*/
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
				echo($errormsg2);
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
		echo($errormsg1);
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