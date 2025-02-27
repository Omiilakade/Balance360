<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
    $stmt = $conn->prepare("insert into registration(id, firstName ,lastName, email, password, number)
        values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssi",$id, $firstName, $lastName, $email, $password, $number);
    $stmt->execute();
    echo "<script> alert('Register Successfully');
    document.location.href = 'loginform.html';
    </script>";
    $stmt->close();
    $conn->close();
    }
?>