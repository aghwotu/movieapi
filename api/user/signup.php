<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content_Type, Access-Control-Allow-Methods,Authorization, X-Selected-With');
	include_once '../../config/Database.php';
	include_once '../../models/User.php';

	$database = new Database();
	$db = $database->connect();

	$user = new User($db);

	$data = json_decode(file_get_contents("php://input"));

	foreach ($data as $dt => $value) {
		if (isset($dt) && !empty($value)) {
			$user->fname = $data->fname;
			$user->lname = $data->lname;
			$user->email = $data->email;
			$user->password = $data->password;
			$user->username = $data->username;
		}else {
			echo json_encode(array('message' => 'Please fill all your details'));
			die();
		}
	}

	if ($user->signup()) {
		echo json_encode(array('message' => 'Signup successful.'));
	}else {
		echo json_encode(array('message' => 'Signup failed. Please try again.'));
	}

 ?>