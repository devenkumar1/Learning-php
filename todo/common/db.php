<?php
$host="localhost";
$username="root";
$password=null;
$database="todoApp";

$conn= new mysqli($host,$username,$password,$database);

if ($conn->connect_error) {
    die("not connected with DB ". $conn->connect_error);
}
echo "connection succesful";

?>
