<?php 
namespace Nav;

/**
* Navigator
*/
class Controller_Nav extends \Controller
{
	
	public static function menu()
	{
		return \View::forge('nav/menu');
	}
}
?>