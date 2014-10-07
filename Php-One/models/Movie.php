<?php
require_once('bin/System.php');

class Movie
{
	public $Id = 0;
	public $Title = "";
	public $IsRRated = false;
	public $ReleaseDate;
	
	public function __construct()
	{
		$this->ReleaseDate = new DateTime();
	}
}
?>