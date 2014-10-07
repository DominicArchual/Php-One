<?php
require_once('models/Movies.php');

class DbContext
{
	public $mysqli;
	private $hostname = "YOUR_HOST"; 
	private $database = "YOUR_DATABASE";
	private $username = "YOUR_USER";
	private $password = "YOUR_PASS";
	
	public $Movies;

	public function __construct()
	{
		$this->mysqli = new mysqli('p:'.$this->hostname, $this->username, $this->password, $this->database); // p for persistant connection http://www.php.net/manual/en/mysqli.persistconns.php
		if ($this->mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
		}
		
		$this->Movies = new Movies($this->mysqli);
	}
	
	public function query($sql)
	{
		$this->mysqli->query($sql);
	}
}
?>