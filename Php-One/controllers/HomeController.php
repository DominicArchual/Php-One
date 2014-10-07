<?php
require_once('/models/DbContext.php');

class HomeController
{
	public $DbContext;
	public $Auth;
	
	public function __construct()
	{
		//$this->DbContext = new DbContext();
	}
	
	public function Index()
	{
		$GLOBALS['ActivePage'] = "Home";
	
		View::Render('views/home/index.php');
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