<?php
class dbObj{
	var $servername="";
	var $username="";
	var $password="";
	var $dbname="";
	var $conn;
	function getConnstring()
	{
		$conn=mysql_connect(
			$this->servername,
			$this->username,
			$this->password,
			$this->dbname
		) or 
			die("Connection failed: ". mysqli_connect_error());
			//check koneksi
		if (mysqli_connect_errno()){
			printf("Connect failed: %s\n"),mysqli_connect_error());
			exit();
		} else{
			$this->conn = $con;
		}
		return $this->conn;
	}
}
?>