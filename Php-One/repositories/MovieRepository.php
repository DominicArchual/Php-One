<?php
require_once('/models/DbContext.php');

class MovieRepository
{
    public $DbContext;
    
    function __construct()
    {
        // uncomment next line for database access
        //$this->DbContext = new DbContext();
    }
    
    public function GetMovies()
    {
        // add some static movies...
        $movies[] = new Movie(
            1,
            'Hercules',
            false,
            new DateTime('July 25, 2014')
        );
        $movies[] = new Movie(
            2,
            'As Above, So Below',
            true,
            new DateTime('August 29, 2014')
        );
        $movies[] = new Movie(
            3,
            'Lucy',
            true,
            new DateTime('July 25, 2014')
        );
        
	    //                  - or - 
        // uncomment next line for database access
        //$movies = $this->DbContext->Movies->GetAll();
        
        return $movies;
    }
}
