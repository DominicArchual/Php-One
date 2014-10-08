<?php
require_once('/repositories/MovieRepository.php');
require_once('/models/MovieViewModel.php');

class HomeController
{
	public $MovieRepo;
	
	public function __construct()
	{
		$this->MovieRepo = new MovieRepository();
	}
	
	public function Index()
	{
		$GLOBALS['ActivePage'] = "Home";
        
        $model = []; // create a variable to store our movies (don't actually need this, but it's nice)
        
        $movies = $this->MovieRepo->GetMovies(); // get data from our repo

        // do some transformations and populate our view model
        foreach ($movies as $movie)
        {
            $model[] = new MovieViewModel(
                $movie->Id,
                $movie->Title,
                $movie->IsRRated ? 'R' : 'PG',
                $movie->ReleaseDate->format('F jS, Y')
            );
        }

		View::Render('views/home/index.php', null, $model); // call our view and send the model
	}
    
    public function About()
	{
		$GLOBALS['ActivePage'] = "About";
        
		View::Render('views/home/about.php');
	}
    
    public function Contact()
	{
		$GLOBALS['ActivePage'] = "Contact";
        
		View::Render('views/home/contact.php');
	}
}
?>