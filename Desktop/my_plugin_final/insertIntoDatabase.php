<?php

$id = $_POST['postId'];

$client_id = $_POST['postClientId'];

$client_secret = $_POST['postClientSecret'];

// $db =  mysqli_connect("localhost", "root", "", "effyis_pay_id");

// $sql = "INSERT INTO plugin (id, clientid, clientsecret) VALUES ('$id', '$client_id', '$client_secret')";

// $result = mysqli_query($db, $sql);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plugin";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql_create_table = "CREATE TABLE wp_user_effyispay_info (
    id VARCHAR(100),
    client_id VARCHAR(100),
    client_secret VARCHAR(100),
    )";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table MyGuests created successfully";
    $db =  mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO wp_user_effyispay_info (id, client_id, client_secret) VALUES ('$id', '$client_id', '$client_secret')";
    $result = mysqli_query($db, $sql);
} else {
    echo "Error creating table: " . $conn->error;
}
