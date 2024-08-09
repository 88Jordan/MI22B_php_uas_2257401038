<?php
/**
 * Nama : Sigit Sunanda 
 * Nim  : 2257401038
 * Kelas : MI22B 
 */
?>
<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['error'] = "Login dahulu";
        header('location: login.php');
    }
?>