<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');

	include_once '../../config/Database.php';
	include_once '../../models/Movie.php';

	$database = new Database();
	$db = $database->connect();


	$movie = new Movie($db);

	$movie->id = isset($_GET['id']) ? $_GET['id'] : die();

	$result = $movie->check_if_available();

	print_r(json_encode($result));	

 ?>