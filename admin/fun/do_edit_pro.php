<?php
// echo "<pre>";
// // // print_r($_POST);
// print_r($_FILES);

include("connect.php");

$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$descr = $_POST['descr'];
// $image = $_POST['image'];
$category = $_POST['category'];
$brand = $_POST['brand'];

$id = $_GET['id'];


if($_FILES['image']['error'] === 0){

    
$img_name = $_FILES['image']['name'];
$img_tmp = $_FILES['image']['tmp_name'];
$img_size = $_FILES['image']['size'];

$img_exp = explode("." , $img_name);
$img_ext = end($img_exp);

$allow_ext = ['jpg' , 'jpeg' , 'bmb' , 'gif' , 'png'];
if(!in_array($img_ext , $allow_ext)){
    echo "image type error";
    exit();
}


if($img_size > 30000000){
    echo "file is too large";
    exit();
}

$new_img_name = time() . rand(1 , 100000) . $img_name ;

move_uploaded_file($img_tmp , "../image/$new_img_name");

$update = "UPDATE products SET name='$name',price='$price',image='$new_img_name',cat='$category',brand='$brand',count='$count',descr='$descr' WHERE id = '$id'";

}else{
    $update = "UPDATE products SET name='$name',price='$price',cat='$category',brand='$brand',count='$count',descr='$descr' WHERE id = '$id'";
}






$conn -> query($update);

header("location:../products.php");
