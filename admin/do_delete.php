<?php
$id = $_GET['id'];

    include("fun/connect.php");

    $delete = "DELETE FROM users WHERE id = '$id'";

    $conn -> query($delete);