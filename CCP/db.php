<?php
$conn = new mysqli("localhost", "root", "", "crud_op");

if ($conn->connect_error) {
    die("Connection failed");
}
?>
