<?php
/**
 * Saran Framework
 *
 * An open source application development framework, that has common components needed to build a static/dynamic website.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under The MIT License (MIT)
 *
 * This source file is subject to The MIT License (MIT) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/MIT
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * saravanan@way2cbe.com so we can send you a copy immediately.
 *
 * @package		Saran Framework
 * @author		Saravanan Jayabalan
 * @copyright	Copyright (c) 2013, Saravanan Jayabalan. (http://saravanan.way2cbe.com/)
 * @license		http://opensource.org/licenses/MIT The MIT License (MIT)
 * @link		https://github.com/saravananj/saran-framework
 * @since		Version 1.0
 */
//Database configurations
class Dbcofig
{
	public $db_hostname;
	public $db_username;
	public $db_password;
	public $db_database;
	public function  __construct()
	{
		$this->db_hostname="";
		$this->db_username="";
		$this->db_password="";
		$this->db_database="";
	}
}