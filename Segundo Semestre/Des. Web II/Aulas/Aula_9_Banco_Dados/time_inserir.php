<?php

include_once("Connection.php");

$conn = Connection::getConnection();

$sql = "INSERT INTO times (nome, cidade) VALUES (?, ?)";
$stm = $conn->prepare($sql);

$stm->execute(["ABC", "Natal"]);