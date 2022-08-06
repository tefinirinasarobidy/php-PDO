<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=db_insert_pdo', 'root', '' );
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>