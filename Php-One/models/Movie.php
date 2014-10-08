<?php
require_once('bin/System.php');

class Movie
{
	public $Id = 0;
	public $Title = "";
	public $IsRRated = false;
	public $ReleaseDate;
    
    function __construct($id, $title, $isRRated, $releaseDate) 
    { 
        $this->Id = $id;
        $this->Title = $title;
        $this->IsRRated = $isRRated;
		$this->ReleaseDate = $releaseDate ?: new DateTime();
	}
}
?>