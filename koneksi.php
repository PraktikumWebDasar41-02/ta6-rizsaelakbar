<?php
$conn = new mysqli('localhost','root','','tafb');
if ($conn->connect_error) {
  die('Erornya :'.$conn->connect_error);
}
?>
