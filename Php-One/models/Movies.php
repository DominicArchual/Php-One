<?php
require_once('interfaces/IDbSet.php');
require_once('models/Movie.php');

class AmzUsers implements IDbSet
{
	public $mysqli;
	
	public function __construct($mysqli)
	{
		$this->mysqli = $mysqli;
	}
	
	public function GetAll()
	{
		return $this->mysqli->query('select * from `Movies`')->fetch_assoc();
	}
}

?>