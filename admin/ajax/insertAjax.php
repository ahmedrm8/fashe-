<?php
    include ('premision.php');

    extract($_POST);

    if(isset($_POST['nameSend']) && 
    isset($_POST['emailSend']) && 
    isset($_POST['phoneSend']) && 
    isset($_POST['courseSend'])) {

        $sql= "INSERT INTO courses (name,email,phone,course)
        VALUES ('$nameSend','$emailSend','$phoneSend','$courseSend')";

        $result = mysqli_query($conn,$sql);
        }





?>