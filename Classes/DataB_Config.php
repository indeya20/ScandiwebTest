<?php
class DataB_Config 
{	
	public $_host = 'localhost';
	public $_username = 'root';
	public $_password = '';
	public $_database = 'scandb';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Failed to connect Database';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}
?>
