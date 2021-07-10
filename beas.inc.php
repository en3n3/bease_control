<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="basecontrol";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if (isset($_POST['right'])){
    $sql = "INSERT INTO dbbasecontrol1 (right)
    VALUES (r)";
}
if ($conn->query($sql)){
    echo "Item Added"
} else {
    die();
}

// Check connection
if ($conn->connect_error) {
	die("Connection failed " . $conn->connect_error);
}

if ($conn->query($sql)) {
echo "New record created successfully";
} else {
echo "Error:" . $sql . "<br>" . $conn->error;
}


$conn->close();
        
?>