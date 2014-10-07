<?php
class System
{
    public function __construct()
	{
        date_default_timezone_set('UTC');
        
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
}
?>