<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "contact";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: " .mysqli_connect_error());
}