<html>
<head>

</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon";

$service=$_POST["service"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date1=$_POST["date1"];
$time1=$_POST["time1"];
$comment=$_POST["comment"];

sampath
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO appointment VALUES ('$service','$fname','$lname','$email','$phone','$date1','$time1','$comment' )";
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</body>

</html>