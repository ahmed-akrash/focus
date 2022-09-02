<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
  
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$rate=$_POST['rate'];

$sqli = 'INSERT INTO `users` (`id`,`name`,`email`,`comment`, `rate`) VALUES (null,"'.$name.'","'.$email.'", "'.$comment.'","'.$rate'");';
if (!$conn->query($sqli)===true) 
{
    die("insert failed: " . $conn->error);
}
else
{
echo "all data about".$name."is created";
}

$conn->close();
?>
