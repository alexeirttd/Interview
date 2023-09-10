<?php

function DB_Connect(){
    $pdo = new PDO('mysql:host=localhost;dbname=task3;charset=utf8;', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
    return $pdo;
}

?>