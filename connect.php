<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=grave_investments', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}