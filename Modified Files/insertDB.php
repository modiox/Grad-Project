<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $tag = $_POST['TagID'];
		
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO Items (TagID) values(?)";
		echo "$sql";
		$q = $pdo->prepare($sql);
		$q->execute(array($TagID));
		Database::disconnect();
		header("Location: index.php");
    }
?>