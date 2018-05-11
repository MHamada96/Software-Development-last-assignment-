<?php
    try 
    {
        include ('database.php');

        $db->exec("CREATE DATABASE IF NOT EXISTS  trainDataBase 
            DEFAULT CHARACTER SET utf8
            DEFAULT COLLATE utf8_general_ci;
            ") or die(print_r($db->errorInfo(), true));

        //$dbh->exec("");     

        $db->exec("use trainDataBase;");
        
        $ql2="CREATE TABLE trains(
            id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            station varchar(225) NOT NULL,
            tim time default NULL,
            type varchar(225) NOT NULL,
            speed int(50) NOT NULL
            );";
            
        $db->exec($ql2);
    } 
    catch (PDOException $e) 
    {
        die("DB ERROR: ". $e->getMessage());
    }
?>

