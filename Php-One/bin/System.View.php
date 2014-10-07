<?php
class View
{
	public static function Render($view, $layout = null, $Model = null)
	{
		if (!isset($layout) || $layout == null && $layout != false)
		{
			$layout = 'views/_Layout.php';
			require_once($layout);
		}
		else if ($layout == false)
		{
			require_once($view);
		}
		else
		{
			require_once($layout);
		}
	}
}
?>