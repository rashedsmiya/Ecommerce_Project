<?php 
     
     try {
        $conn = mysqli_connect("localhost", "root", "", "cmbd257");
    
         echo "Connected susccessfully";
         
    } catch (mysqli_sql_exception $e) {
        
        echo "Connection Failed: " . $e->getMessage();
    }