<?php
	
    $email = $_POST['loginEmail'];
    $password=$_POST['loginPassword'];
    if (!empty($email)) {
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "customer";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT email From register Where email = ? AND password = ? ";
         

         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("si", $email,$password);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          echo "not found";
         } else {
          echo "email is found";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    
    ?>