<?php
$dsn = 'mysql:host=mysql;dbname=tangbohu;charset=utf8mb4';
$user = 'root';
$pass = '123456';
$options = array(
    PDO::ATTR_CASE              =>  PDO::CASE_LOWER,
    PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_ORACLE_NULLS      =>  PDO::NULL_NATURAL,
    PDO::ATTR_STRINGIFY_FETCHES =>  false
);
$pdo = new PDO($dsn, $user, $pass, $options);
$id = 1;
$executor = $pdo->prepare('select * from member where id = ?');
$executor->bindParam(1, $id);
$executor->execute();
$result = $executor->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
