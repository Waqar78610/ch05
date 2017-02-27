<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=wk6;
    $username = 'wk6';
    $password = 'dryden49';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>