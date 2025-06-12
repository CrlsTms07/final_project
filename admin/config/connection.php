<?php 
$server = 'localhost';
$user = 'root';
$pass = '';
$cavite = 'spa_cavite';
$baguio = 'spa_baguio_branch';
$admin = 'spa_admin';

try {
    $conn_central = mysqli_connect($server, $user, $pass, $cavite);
    if (!$conn_central) {
        throw new Exception("Connection to central failed.");
    }

    $conn_baguio = mysqli_connect($server, $user, $pass, $baguio);
    if (!$conn_baguio) {
        throw new Exception("Connection to baguio branch failed.");
    }

    $conn_admin = mysqli_connect($server, $user, $pass, $admin);
    if (!$conn_admin) {
        throw new Exception("Connection to admin failed.");
    }
    
} catch(Exception $e) {
    die("DB Error: " . $e->getMessage());
}
?>
