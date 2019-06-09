<?php
/*
	* File Name    : connection.php
	* Author       : Amber Bantatua, Micki Jury
	* Date Created : 28 June 2013
	* Version      : 1.0
	* Last Modified:
	* Description  : Database connection file for Nine Crows.
*/


// attempt to connect to the MySQL server
try {
	// create an object from the PHP data object class (pdo) to establish connection to the server
	$pdo = new PDO('mysql:host=localhost;dbname=nineCrows','root','');
	
	// set the pdo object's attribute that controls the error mode to throw the exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// set character coding of te database connection to utf-8
	$pdo->exec('SET NAMES "utf8"');
}

// what to do if connection fails
catch(PDOException $e) {
	// create and display error message with exception details
	echo 'Unable to connect to the database server: ' .$e->getMessage();
	
	// stop the script
	exit();
}

?>