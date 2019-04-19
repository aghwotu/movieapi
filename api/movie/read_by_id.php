<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');

	include_once '../../config/Database.php';
	include_once '../../models/Movie.php';

	$database = new Database();
	$db = $database->connect();

	$movie = new Movie($db);

	// we get id from URL 
	$movie->id = isset($_GET['id']) ? $_GET['id'] : die();

	$movie->read_by_id();

	$movie_arr = array(
		'id' => $movie->id,
		'movie_name' => $movie->movie_name,
		'duration' => $movie->duration,
		'status' => $movie->status,
		'release_yr' => $movie->release_yr,
		'imdb_rating' => $movie->imdb_rating
 	);

	print_r(json_encode($movie_arr));

 ?>