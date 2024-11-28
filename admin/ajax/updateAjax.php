<?php
    include ('premision.php');

    if(isset($_POST['updateid'])) {
        $id = $_POST['updateid'];

        $sql = "SELECT * FROM courses WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        $response = array();

        while($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }

        echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or data not found";
}

// update query============//

if(isset($_POST['hiddendata'])) {
    $unqiueid = $_POST['hiddendata'];
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $phone = $_POST['updatephone'];
    $course = $_POST['updatecourse'];

    $sql = "UPDATE courses SET name='$name',
    email='$email', phone='$phone',  
    course='$course' WHERE id = $unqiueid";
    
    $result = mysqli_query($conn, $sql);

}





?>