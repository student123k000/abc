<?php 
error_reporting(0); 
include "connect.php"; 
$username = $_POST['username']; 
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
$result = $conn->query($sql); 
if ($result && $result->num_rows > 0) { 
echo "<h2>Login Successful!</h2>"; 
} else { 
echo "<h2>Invalid Credentials</h2>"; 
} 
?> 
