<?php

require_once 'config.php';


try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}
?>
