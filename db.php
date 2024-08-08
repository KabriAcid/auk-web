<?php

$conn = new mysqli('localhost', 'root', '');

if($conn->connect_error){
    die("connection Failed");
}

if($conn->select_db('auk_db')){
    echo "Database selected successfully\n";
} else {
    echo "Error selecting database: " . $conn->error;
}