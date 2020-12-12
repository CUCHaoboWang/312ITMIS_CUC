<?php
class Conf {

	var $smtphost;
	var $dbhost;
	var $dbport;
	var $dbname;
	var $dbuser;
	var $version;

	function __construct() {

		$this->dbhost	= '127.0.0.1';
		$this->dbport 	= '3310';
		if(defined('ENVIRNOMENT') && ENVIRNOMENT == 'test'){
		$this->dbname    = 'test_bitnami_orangehrm';		
		}else {
		$this->dbname    = 'bitnami_orangehrm';
		}
		$this->dbuser    = 'bn_orangehrm';
		$this->dbpass	= '0f74d80972';
		$this->version = '4.6';

		$this->emailConfiguration = dirname(__FILE__).'/mailConf.php';
		$this->errorLog =  realpath(dirname(__FILE__).'/../logs/').'/';
	}
}
?>