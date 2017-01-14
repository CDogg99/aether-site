<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "aether";

    $conn = new mysqli($server,$username,$password) or die("Failed to connect to the server.");
    $sql = "CREATE DATABASE IF NOT EXISTS aether CHARACTER SET utf8; ";
    $conn->query($sql);

    mysqli_select_db($conn,$database) or die("Failed to connect to the database.");

    $sql = "";
    $sql .="CREATE TABLE IF NOT EXISTS tweets(
                id varchar(64) CHARACTER SET utf8 NOT NULL,
                body varchar(140) CHARACTER SET utf8 NOT NULL,
                PRIMARY KEY (id)
            ) CHARACTER SET utf8; ";

    $result = mysqli_multi_query($conn,$sql);
    if (!$result){
        die ("The SQL command was not processed correctly.");
    } else{
        echo "MySQL tables setup successfully.";
    }

    mysqli_close($conn);
?>
