<?php 
	session_start();
	ob_start();
  
   require_once("fonksiyon.php");
    try{
		
        $db = new PDO('mysql:host=localhost;dbname=aysedavd_data','aysedavd_root', 'F(E2Ebu0YaYD');
        
    }catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

?>