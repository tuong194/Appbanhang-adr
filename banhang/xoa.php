<?php
include "connect.php";
$id = $_POST['id'];

$query = 'DELETE FROM `sanphammoi` WHERE `id`='.$id;
$data = mysqli_query($conn, $query);
if ($data == true) {
	$arr = [
		'success' => true,
		'message' => "thanh cong"	
	];
}else{
	$arr = [
		'success' => false,
		'message' => "Xoa khong thanh cong"
	];
}

print_r(json_encode($arr));
?>