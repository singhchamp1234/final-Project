<?php

include_once 'connection.php';

$comment = $_POST['family'];


$sql = "INSERT INTO comments (comment) VALUES ('$comment');";

mysqli_query($conn, $sql);

header("Location: ../admin_login/exhibit-page.php");