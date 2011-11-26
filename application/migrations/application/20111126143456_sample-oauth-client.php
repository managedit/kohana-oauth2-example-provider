<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Sample OAuth2 Client
 */
class Migration_Application_20111126143456 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "INSERT INTO `oauth2_clients` (`id`, `user_id`, `client_id`, `client_secret`, `redirect_uri`) VALUES (NULL, NULL, '113ee767-e7f8-4294-a972-80a97a7f9926', '36e79816-8ee1-4e4a-9f2a-8cf670861f05', 'http://netbeans.kiall.local/kohana-oauth2-example-consumer/index.php/oauth2/inbound');");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, "DELETE FROM `oauth2_clients` WHERE 'client_id' = '113ee767-e7f8-4294-a972-80a97a7f9926';");
	}
}
