<?php
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "customer";
 //create connection
 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
 $INSERT;
 
 if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 }
    else{
        
if ( isset( $_POST['button1'] ) ) { 
    $destination=$_POST['destination1'];
    $duration=$_POST['duration1'];
    $cost=$_POST['cost1'];

    $INSERT = "UPDATE places SET destination= ?,duration= ?,cost= ?  WHERE id = 1 ;";
    $stmt = $conn->prepare($INSERT);
    
   
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();



}else if(isset( $_POST['button2'] )){
    $destination=$_POST['destination2'];
    $duration=$_POST['duration2'];
    $cost=$_POST['cost2'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 2";
    $stmt = $conn->prepare($INSERT);
    
   
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();


}
else if(isset( $_POST['button3'] )){
    $destination=$_POST['destination3'];
    $duration=$_POST['duration3'];
    $cost=$_POST['cost3'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 3";
    $stmt = $conn->prepare($INSERT);
    
   
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}
else if(isset( $_POST['button4'] )){
    $destination=$_POST['destination4'];
    $duration=$_POST['duration4'];
    $cost=$_POST['cost4'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 4";
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();



}
else if(isset( $_POST['button5'] )){
    $destination=$_POST['destination5'];
    $duration=$_POST['duration5'];
    $cost=$_POST['cost5'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 5";
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}
else if(isset( $_POST['button6'] )){
    $destination=$_POST['destination6'];
    $duration=$_POST['duration6'];
    $cost=$_POST['cost6'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 6";
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}
else if(isset( $_POST['button7'] )){
    $destination=$_POST['destination7'];
    $duration=$_POST['duration7'];
    $cost=$_POST['cost7'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 7";
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}
else if(isset( $_POST['button8'] )){
    $destination=$_POST['destination8'];
    $duration=$_POST['duration8'];
    $cost=$_POST['cost8'];
    $INSERT = "INSERT Into places destination=?,duration=?,cost=? values( ?, ?,?) WHERE id = 8";
    $stmt->bind_param("sii", $destination, $duration, $cost);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}



}
?>