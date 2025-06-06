<?php
    $server = "ballast.proxy.rlwy.net";
    $user = "root";
    $pass = "nicxCGpyZKHghbOFeFdOhbKnAvvcTBGN";
    $db = "proyecto";

    try {	    
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);        
        // Establece el modo de error del PDO a excepcion
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {        
    	echo "Fallo de conexion: " . $e->getMessage();
        
        }









?>
