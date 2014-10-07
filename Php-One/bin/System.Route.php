<?php
class Route
{
	public function __construct($controller, $action)
	{
		$className = ucfirst($controller) . "Controller";
		require_once("controllers/$className.php");
		$controller = new $className();
		
		if (!isset($action) || $action == null)
			$action = "Index";
		
		$controller->$action();
	}
}
?>