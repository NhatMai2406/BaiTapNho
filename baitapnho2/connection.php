<?php
$localhost='localhost';
$database = 'dbsach';
$username = 'root';
$password = '';
$data = "mysql:host=$localhost;dbname=$database;charset=UTF8";
try 
{
    $conn = new PDO($data, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} 
catch (PDOException $e) 
{
     echo $e->getMessage();
}
