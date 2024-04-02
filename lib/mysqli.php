<?php
$conn = new mysqli("localhost","root","","bansach");

// Check connection
if ($conn->connect_errno) {
  echo "Kết nối tới MySQL không thành công." . $conn->connect_error;
  exit();
}
?>