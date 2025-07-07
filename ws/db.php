<?php
function getDB() {
    $host = 'localhost';
    $dbname = 'tp_flight';
    $username = 'root';
    $password = '%20';
    $port = 3306;


    try {
        return new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
        die(json_encode(['error' => $e->getMessage()]));
    }
}
