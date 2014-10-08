<?php
require_once('bin/System.php');

class MovieViewModel
{
	public $Id = 0;
	public $Title = "";
	public $Rating = '';
	public $ReleaseDate = '';
    
    public function __construct($id, $title, $rating, $releaseDate)
    {
        $this->Id = $id;
        $this->Title = $title;
        $this->Rating = $rating;
        $this->ReleaseDate = $releaseDate;
    }
}
?>