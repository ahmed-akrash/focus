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

$sqli = 'INSERT INTO `users` (`id`,`name`,`email`,`comment`) VALUES (null,"'.$name.'","'.$email.'", "'.$comment.'");';
if (!$conn->query($sqli)===true) 
{
    die("insert failed: " . $conn->error);
}
else
{
echo "<h1>thanks $name </h1>" ;
}

$conn->close();
?>
