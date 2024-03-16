<?php
date_default_timezone_set('Asia/Kolkata');
$current_date= date('d-m-Y H:i');
session_start();

include "../includes/config.php";
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password= $_POST['password'];

$a =str_split($username,2);
if($a[0] ==='sl' AND is_numeric($a[1])){
    $sql = "SELECT * FROM `user` WHERE `username` ='$username'";
    $result = $conn->query($sql);
 if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    if ($row["password"] ===$password){

$query ="INSERT INTO `logger`( `username`, `login_date`, `location`, `ip`) VALUES ('$username','$current_date','[value-4]','[value-5]')";
if ($conn->query($query) === TRUE) {
$_SESSION["data"] =$row;
  echo json_encode(array("message"=>"New record created successfully" ,"status"=>"successfully"));
  die();
} else {
 echo json_encode(array("message"=>"Some Where went Wrong Please Try Letter" ,"status"=>"fail"));
 die();
}
    
    }else{
        echo json_encode(array("message"=>"bed username or password" ,"status"=>"fail"));
    die();
    };
  }
}else{
    echo json_encode(array("message"=>"bed username or password" ,"status"=>"fail"));
    die();
}
 


}else{
echo json_encode(array("message"=>"bed username or password" ,"status"=>"fail"));
die();
}




}
?>