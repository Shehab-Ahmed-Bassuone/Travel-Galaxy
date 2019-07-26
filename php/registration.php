    <?php
	
$firstname=$_POST['firstname_area'];
$lastname = $_POST['lastname_area'];
$password = $_POST['password_area'];
$email = $_POST['email_area'];
$visanum = $_POST['visa_number_area'];
$phone = $_POST['mobile_number_area'];
if (!empty($firstname)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "customer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register ( password, email,firstname,lastname,mobilenumber,visanumber) values( ?, ?,?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $password,$email,$firstname,$lastname,$phone,$visanum);
      $stmt->execute();
      
      echo "<script> alert('Successful login you can now sign in');
      location.replace('../registration.html');
      
      </script>";
    } else {
        echo "<script> alert('This email is used by another customer please enter another email'); 
        location.replace('../registration.html');
        
        </script>";



      //echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
    
 echo "All field are required";
 die();
}

?>