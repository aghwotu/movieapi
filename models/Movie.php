<?php 
	class Movie {
		private $conn;
		private $table;
		
		public $id;
		public $movie_name;
		public $duration;
		public $status;
		public $release_yr;
		public $imdb_rating;
		

		public function __construct($db){
			$this->conn = $db;
		}

		public function read_all(){
			$this->table = 'moviestbl';
			$query = 'SELECT
						id, 
						movie_name, 
						duration,
						status,
						release_yr, 
						imdb_rating
					FROM ' . $this->table . ' ORDER BY movie_name ASC';
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		}

		public function read_by_id(){
			$this->table = 'moviestbl';
			$query = 'SELECT 
						id,
						movie_name,
						duration,
						release_yr,
						imdb_rating,
						status
						FROM ' .$this->table. ' 
						WHERE id = ? 
						LIMIT 0,1';

			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(1, $this->id);
			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			$this->id = $row['id'];
			$this->movie_name = $row['movie_name'];
			$this->duration = $row['duration'];
			$this->release_yr = $row['release_yr'];
			$this->imdb_rating = $row['imdb_rating'];
			$this->status = $row['status'];

			return $stmt;
		}

		protected function check_if_available() {
			$query = 'SELECT status
						FROM ' . $this->table .'
						WHERE  id = :id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':id' , $this->id);
			$status = $stmt
			if ($stmt->execute()) {
				$resu
				return true;
			}
			printf("Error: %s. \n" , $stmt->error);
			return false;
		}

		protected function update_movie() {
			$query = 'UPDATE '. $this->table .'';
		}

		protected function insert_rental() {

		}

		public function rent_by_id() {
			try {
				
			} catch (Exception $e) {
				
			}

			$query = "UPDATE " . $this->table ."
						SET status = 'r' 
						WHERE id = :id ";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':id' , $this->id);
			if ($stmt->execute()) {
				return true;
			}
			return false;
		}

		public function return_rental() {
			if ($this->update_movie_available()) {
				return true;	
			}
		}

		public function read_available(){
			$this->table = 'moviestbl';
			$query = "SELECT 
					id,
					movie_name,
					duration,
					status,
					release_yr,
					imdb_rating 
					FROM ". $this->table ."
					WHERE status = 'a'
					ORDER BY movie_name ASC ";

			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		}

		public function read_history() {
			$this->table = 'rentalstbl';
			$query = "";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		}
	}


 ?>