<?php
include("fun/connect.php");
$add_name = $_POST["user"];
$add_email = $_POST["mail"];
$add_pass = $_POST["pass"];
$gender = 1; 
$pr = 1;
$sql = "INSERT INTO users(username, password, email, gender, pr) VALUES ('$add_name','$add_pass','$add_email','$gender','$pr')";
$conn ->query($sql);
$last_id = $conn->insert_id;
$sql = "SELECT * FROM users WHERE id = '$last_id'";
$result = $conn -> query($sql);
while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["username"]?></td>
        <td><?=$row["password"]?></td>
        <td><?=$row["email"]?></td>
        <td><?=$row["pr"]?></td>

    </tr>



    <?php
}
?>