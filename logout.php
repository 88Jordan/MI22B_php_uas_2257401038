<?php
/**
 * Nama : Sigit Sunanda 
 * Nim  : 2257401038
 * Kelas : MI22B 
 */
?>

<?php 
    session_start();

    session_destroy();
    session_unset();

    header('location: login.php');
?>