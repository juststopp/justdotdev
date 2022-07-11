<?php

    include('config.php');

    $mysqli = new mysqli($host, $username, $password, $database);
    $stmt = $mysqli->prepare("INSERT INTO `avis` VALUES(?,?,?)");
    $stmt->bind_param('ssi', $_GET['name'], $_GET['avis'], $_GET['note']);
    $stmt->execute();

?>