<?php 
	class User {
		private $conn;
		private $table = 'userstbl';

		public $fname;
		public $lname;
		public $email;
		public $password;
		public $username;

		public function __construct($db) {
			$this->conn = $db;
		}

		public function signup() {
			$query = 'INSERT INTO ' 
					. $this->table . '
					SET 
					fname = :fname,
					lname = :lname,
					email = :email,
					password = :password,
					username = :username';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':fname' ,  $this->fname);
			$stmt->bindParam(':lname' , $this->lname);
			$stmt->bindParam(':email' , $this->email);
			$stmt->bindParam(':password' , $this->password);
			$stmt->bindParam(':username' , $this->username);

			if ($stmt->execute()) {
				return true;
			}

			printf("Error: %s.\n" , $stmt->error);

			return false;
		}

		public function login() {
			$query = 'SELECT 
						email,
						password
						FROM ' . $this->table . '
						WHERE email = :email
						AND password = :password
						LIMIT 0,1';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':email' , $this->email);
			$stmt->bindParam(':password' , $this->password);
			if ($stmt->execute()) {
				return true;	
			}

			printf("Error: %s. \n" , $stmt->error);
			return false;
		}
	}


 ?>