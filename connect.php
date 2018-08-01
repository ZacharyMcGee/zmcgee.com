<?php

require_once 'config.php';


try {
    $connect = new mysqli("localhost", "root", "", "testdb");
} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}
?>
