<?php 

/**
* Authorixation Controller to login and logout
*/
class Controller_Authorization extends Controller_Template
{
	/**
	 * action to display login form
	 */
	public $template = 'layouts/login_template';

	public function action_index()
	{
	}

	public function action_login()
	{
		if ($user_id = Auth::login(Input::post('login'),Input::post('password')))
		{
			if (Input::post('remember'))
			{
				Auth::remember_me($user_id);
			}

			Response::redirect('/welcome');
		}
	}

	public function action_logout()
	{
		Auth::logout();
	}
}
?>