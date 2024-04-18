<?php

include("connect.php");
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["message"];
$sql = "INSERT INTO message(name, email, message, stutus) VALUES ('name','email','message',0)";
$conn -> query($sql);