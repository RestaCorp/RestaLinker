<?php

$zip = new ZipArchive;
if ($zip->open('PageIndexFix/database.zip') === TRUE) 
{
    $zip->extractTo('./');
    $zip->close();
    echo "Succes! (1 Step)";
    if(!file_exists("index.php"))
    {
    	echo "Error | Not found index.php";
    	exit;
    }
    else
    {
    	rename("index.php", "homepage.php");
    	echo "Succes! (2 Step)";
    	rename("homepage_fix.php", "index.php");
    }
} else {
    echo "Error";
}

?>