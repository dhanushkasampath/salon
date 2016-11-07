<html>
<head>

</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID:".$row{'id'}." Service Type:".$row{'service_type'}."First Name: ". //display the results
   $row{'first_name'}."Last Name:".$row{'last_name'}."Email:".$row{'email'}." Phone:".
   $row{'phone'}."Date:".$row{'date'}."Time:".$row{'time'}."Notesxam:".$row{'note'}."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>

</html>