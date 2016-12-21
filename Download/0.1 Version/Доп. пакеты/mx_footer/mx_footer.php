<?php
/////////////////////////////////////
///MX_FOOTER///////ADDON FOR RLINKER/
/////////////////////////////////////

include "mx_config.php";
include "mx_styles.php";

if (!empty($_GET["aboutmx"])) 
{
	include "mx_footer_about.php";
	exit;
}

if($mx_footer_enable == 1)
{
?>

	<center><footerfont>Resta linker</footerfont></center><br><br><br>
	<center><a href="index.php" class="button1">Main Page</a>
	<a href="packs/mx_footer/mx_footer.php?aboutmx=1" class="button1">About to mx_footer</a>
	<a href="packs/mx_footer/INSTALL.txt" class="button1">to install</a></center><br><br><br><br>
</head>
</html>

<?php
}

/////////////////////////////////////
/////MX_FOOTER POWERED TO YOU ///////
/////////////////////////////////////
?>