<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Example 
 * 
 * @package    OAuth2-Example
 * @category   Library
 * @author     Managed I.T.
 * @copyright  (c) 2011 Managed I.T.
 */
class OAuth2_Provider_GrantType_Password extends Kohana_OAuth2_Provider_GrantType_Password {

	/**
	 * Validates a username or password.
	 *
	 * This method must be implemented per application!
	 *
	 * @param  string $username Username
	 * @param  string $password Password
	 *
	 * @return string User ID
	 */
	protected function _validate_user($username, $password)
	{
		$user = ORM::factory('user')->where('username','=', $username)->find();

		if ( ! $user->loaded())
			return FALSE;

		if ($user->password != Auth::instance()->hash($password))
			return FALSE;

		return $user->id;
	}

	/**
	 * Get the user_id for the current request
	 *
	 * @return string
	 */
	public function get_user_id()
	{
		$user = ORM::factory('user')->where('username','=', $this->_get_request_param('username'))->find();

		return $user->id;
	}

}