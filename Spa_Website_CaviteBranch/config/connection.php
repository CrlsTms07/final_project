<?php 
$server = 'localhost';
$user = 'root';
$pass = '';
$name = 'spa_cavite';
$name2 = 'spa_baguio_branch';
$admin = 'spa_admin';

try {
    $conn = mysqli_connect($server, $user, $pass, $name);
    if (!$conn) {
        throw new Exception("Connection to DB1 failed.");
    }

    $conn2 = mysqli_connect($server, $user, $pass, $name2);
    if (!$conn2) {
        throw new Exception("Connection to DB2 failed.");
    }

    $conn_admin = mysqli_connect($server, $user, $pass, $admin);
        if (!$conn2) {
        throw new Exception("Connection to DB2 failed.");
    }
} catch(Exception $e) {
    die("DB Error: " . $e->getMessage());
}
?>