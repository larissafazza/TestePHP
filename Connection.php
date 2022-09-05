<?php

    try{
        $banco = new PDO('mysql:host=127.0.0.1;dbname=testephpmknet','root', '');
    }catch(PDOException $e){
        die('Could not connect to the database!');
    }

    
$users = $banco->prepare('select * from usuarios');
$users->execute();
$users = $users->fetchAll(PDO::FETCH_OBJ);
$amount = count($users);

?>