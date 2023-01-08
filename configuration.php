<?php
$servername = "localhost";
$username = "mcvAdministrator";
$password = "9Y7@8!Kr55[*LBZs";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>