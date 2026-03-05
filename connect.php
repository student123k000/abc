<?php 
mysqli_report(MYSQLI_REPORT_OFF); 
$conn = new mysqli("localhost", "root", "", "sqli_demo"); 
if ($conn->connect_error) { 
die("Connection failed"); 
} 
?> 
