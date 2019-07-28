<?php
	
    $email = $_POST['loginEmail'];
    $password=$_POST['loginPassword'];
    if($email=="admin@admin"&&$password=="admin"){
      echo "<script> alert('Welcome admin'); 
      location.replace('../adminpackages.php');
      
      </script>";

    }
    else{
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
            echo "<script> alert('invalid password or email please enter another one'); 
            location.replace('../login.html');
            
            </script>";
            $stmt->close();
         } else {
            $stmt->close();

            $SELECT2 = "SELECT firstname From register Where email = ? ";
            $stmt2=$conn->prepare($SELECT2);
            $stmt2->bind_param("s", $email);
            $stmt2->execute();
         $stmt2->bind_result($email);
         
         $result= $stmt2->get_result();
         $row = mysqli_fetch_row($result); 
            $name = $row[0]; 
           
           echo "<script> alert(\" Welcome $name\"); 
            location.replace('../login.html');
            
            </script>";
           
            $stmt2->close();
         }
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
   }
    
    ?>