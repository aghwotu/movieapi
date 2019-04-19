<?php 
	class Signup {
		private $conn;
		private $table = 'userstbl';

		public $fname;
		public $lname;
		public $email;
		protected $password;
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
	}


 ?>