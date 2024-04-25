<?php
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","prototype");
    if ($con -> connect_error){
        die("Failed to connect:".$con->connect_error);
    }
    else{
        $stmt= $con-> prepare ("select * from login where id_email = ?");
        $stmt->bind_param("s", $username);
        $stmt-> execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password){
                header('location:home.php'); 
                exit;
            } 
        }
            else {
                header('Location: index.php?error=invalid_credentials');
                exit;
            }
       

        }
       
       

?>