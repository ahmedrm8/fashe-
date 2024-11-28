<?php
    include ('premision.php');

    if(isset($_POST['deleteSend'])) {
    $id=$_POST['deleteSend'];

    $sql="DELETE FROM courses WHERE id=$id";

    $result = mysqli_query($conn,$sql);
    }
?>