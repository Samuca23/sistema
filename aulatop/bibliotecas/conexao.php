<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=marcondes',
    DB_USER, DB_SENHA);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
