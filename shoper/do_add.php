<?php
session_start();
include("connect.php");

$id = $_GET["id"];

$id_user = $_SESSION["page"];
$sql = "SELECT * FROM cart WHERE id_user = $id_user and product_id = $id";
$result = $conn ->query($sql);
$num = $result -> num_rows;
$row = $result -> fetch_assoc();
if ($num < 1 ) {
    $sql_insert = "INSERT INTO cart (id_user, product_id, quantity) VALUES ('$id_user','$id',1)";
    $conn -> query($sql_insert);

}else {
    $quantity = $row["quantity"] + 1;
    $sql_update = "UPDATE cart SET quantity = $quantity WHERE id_user = $id_user and product_id = $id";
    $conn -> query($sql_update);
    
}
header("location:cart.php");