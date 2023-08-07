<?php
	
// To Get the Current Filename.
$currentPage= $_SERVER['SCRIPT_NAME'];

// To Get the directory name in
// which file is stored.
$currentPage = substr($currentPage, 1);

// To Show the Current Filename on Page.
echo $currentPage;

?>
