<?php

// Yes... these are hard-coded for this sample. Check out the
// guides focused on configuring containerized applications to
// learn other ways to manage these values.
$mysqli = new mysqli("db", "root", "password", "sample");

$result = $mysqli->query("SELECT message FROM messages ORDER BY RAND() LIMIT 1");
$row = $result->fetch_assoc();

Header("Content-Type: application/json");
echo json_encode($row);