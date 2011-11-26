<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Example
 *
 * @package    OAuth2 Example Provider
 * @category   Controller
 * @author     Managed I.T.
 * @copyright  (c) 2011 Managed I.T.
 */
class OAuth2_Controller extends Kohana_OAuth2_Controller
{
	public function before()
	{
		try
		{
			parent::before();
		}
		catch (OAuth2_Exception_InvalidRequest $e)
		{
			throw new HTTP_Exception_401('Invalid Request');
		}
	}

	/**
	 * This makes use of a proposed Kohana 3.3 feature to wrap the
	 * action method execution in an "execute()" method for easy
	 * DRY try/catch.
	 */
	public function execute($action)
	{
		// try
		// {
			parent::execute($action);
		// }
		// catch (OAuth2_Exception_InvalidRequest $e)
		// {
		// 	throw new HTTP_Exception_401('Invalid Request');
		// }
	}

}