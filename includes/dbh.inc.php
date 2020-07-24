<?php

$servername = "localhost";
$dBUsername = "user";
$dBPassword = "ThePoopGroup1";
$dBName = "zakenart";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: " .mysqli_connect_error());
}
