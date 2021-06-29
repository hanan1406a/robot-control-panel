<?php
$con = new mysqli("localhost", "root", "", "robot");
if ($con->connect_error) {
    die("Connection wrong: " . $con->connect_error);
}
