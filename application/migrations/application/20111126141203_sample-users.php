<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Sample Users
 */
class Migration_Application_20111126141203 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database Database connection
	 */
	public function up(Kohana_Database $db)
	{

		$role_login = ORM::factory('role', array('name' => 'login'));
		$role_admin = ORM::factory('role', array('name' => 'admin'));

		$admin = ORM::factory('user');
		$admin->email = "admin@example.com";
		$admin->username = "admin";
		$admin->password = "admin";
		$admin->save();

		$admin->add('roles', $role_login);
		$admin->add('roles', $role_admin);
		$admin->save();

		$user = ORM::factory('user');
		$user->email = "user@example.com";
		$user->username = "user";
		$user->password = "user";
		$user->save();

		$user->add('roles', $role_login);
		$user->save();
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database Database connection
	 */
	public function down(Kohana_Database $db)
	{
		ORM::factory('user', array('username' => 'admin'))->delete();
		ORM::factory('user', array('username' => 'user'))->delete();
	}
}
