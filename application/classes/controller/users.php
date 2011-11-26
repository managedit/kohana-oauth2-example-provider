<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Example Resource
 *
 * @package    OAuth2 Example Provider
 * @category   Controller
 * @author     Managed I.T.
 * @copyright  (c) 2011 Managed I.T.
 */
class Controller_Users extends OAuth2_Controller {

	public function action_me()
	{
		$user = ORM::factory('user', array('id' => $this->_oauth_user_id));

		$this->response->body(json_encode($user->as_array()));
	}

}