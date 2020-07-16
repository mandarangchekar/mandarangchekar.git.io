<html>
    <body>
<?php 
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['description'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "delete from `product` where name='$name'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
