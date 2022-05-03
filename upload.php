<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// $data = json_encode(file_get_contents("php://input"));


// $data = file_get_contents("php://input");
// print_r($_POST);

$remark = $_POST['remark'];
$attachment = $_POST['attachment'];
$email = $_POST['email'];
$name = $_POST['name'];
$agent = $_POST['agent'];

include "config.php";

$sql = "INSERT INTO greenana(name, email, attachment, remark, agent) VALUES ('$name', '$email', '$attachment', '$remark', '$agent')";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Record Inserted.', 'status' => true));
}
else{
 echo json_encode(array('message' => 'Record Not Inserted.', 'status' => false));
}

?>
