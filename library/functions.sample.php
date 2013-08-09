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
require_once("config/db_config.php");
class Sample
{
    private $db;

	public function  __construct()
	{
		$db_config=new Dbcofig();
		$db_hostname=$db_config->db_hostname;
		$db_username=$db_config->db_username;
		$db_password=$db_config->db_password;
		$db_database=$db_config->db_database;
		$this->db = new mysqli($db_hostname,$db_username,$db_password,$db_database);
	    if (!$this->db)
	    {
	    	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
    }
      
	public function __destruct()
	{
		mysqli_close($this->db);
	}
	public function getlist()
	{
		$db_result=$this->db->query("SELECT * FROM table_name");
		while($row=$db_result->fetch_array())
		{
			$result[]=$row;
		}
		return $result;
	}
	
	
	public function addtolist($arg1)
	{
		$this->db->query("INSERT INTO table_name(col1) VALUES('$arg1')");
		$ins_id=$this->db->insert_id;
		return $ins_id;
	}
	
}
?>