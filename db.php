<?php
	class database{
		public $hostname;
		public $username;
		public $password;
		public $db_name;
		public $db_con;
		
		public function __construct($host,$user,$pass,$db){
			$this->hostname = $host;
			$this->username = $user;
			$this->password = $pass;
			$this->db_name = $db;
			
			$this->db_con=mysqli_connect($this->hostname,$this->username,$this->password,$this->db_name);
				
			if(!$this->db_con){
				echo "You are not connected to database";}
		}
		
		public function select($tname){
			$query = "SELECT * FROM $tname";
			$sendQuery = mysqli_query($this->db_con,$query);
			
			return $sendQuery;
		}
		
		public function insert($tname,$tcol,$tvalue){
			$query = "INSERT INTO $tname ($tcol) VALUES ($tvalue)";
			$sendQuery = mysqli_query($this->db_con,$query);
			
			return $sendQuery;
		}
		
		public function delete($tname,$condition){
			$query = "DELETE FROM $tname WHERE $condition";
			$sendQuery = mysqli_query($this->db_con,$query);
			
			return $sendQuery;
		}
		
		public function update($tname,$new,$condition){
			$query = "UPDATE $tname SET $new WHERE $condition";
			$sendQuery = mysqli_query($this->db_con,$query);
			
			return $sendQuery;
		}
		
		public function search($tname,$col,$keyword){
			$query="SELECT * FROM $tname WHERE $col LIKE '%$keyword%' ";
			$sendQuery = mysqli_query($this->db_con,$query);
			
			return $sendQuery;
		}
	}
	$connection = new database("localhost","root","","gallery");
?>