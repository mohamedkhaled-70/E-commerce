<?php
include("connect.php");
$name = $_POST["name"];
$email = $_POST["email"];
$mass = $_POST["mass"];
$sql = "INSERT INTO message(name, email, message, stutus) VALUES ('$name','$email','$mass',0)";
$result= $conn->query($sql);
if ($result) {
    '<br><div class="alert alert-success" role="alert" style="border:double">
    <h4 class="alert-heading">message sent</h4>
    <p>thank you for contact our </p></div><br>';
    
} else {
    '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">فشل ارسال الرساله</h4>
    <p>حدثت مشكله في ارسال الرساله يرجي المحاوله</p></div>';
}
?>
