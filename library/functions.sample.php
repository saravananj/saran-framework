<?php
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