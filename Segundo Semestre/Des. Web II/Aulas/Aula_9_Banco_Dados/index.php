<?php

require_once("Connection.php");

$conn = Connection::getConnection();

print_r($conn);