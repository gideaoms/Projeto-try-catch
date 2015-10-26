<?php

header('Content-Type: text/html;charset=utf-8');

require 'database.php';
require 'Exceptions/DataBaseException.php';
require 'Exceptions/SelectDataException.php';

use Exceptions\DataBaseException;
use Exceptions\SelectDataException;

class Index
{
	
	private $db;

	public function __construct() {
		try {
			$this->db = new Database('param');
			$this->db->select();
		} catch (DataBaseException $e) {
			echo 'Error: ' . $e->getMessage() . ' - Code: ' . $e->getCode();
		} catch (SelectDataException $e) {
			echo 'Error: ' . $e->getMessage() . ' - Code: ' . $e->getCode();
		}
	}

}

$index = new Index();

?>