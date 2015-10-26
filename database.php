<?php

use Exceptions\DataBaseException;
use Exceptions\SelectDataException;

class Database
{

	public function __construct($param) {
		//throw new DataBaseException("não foi possível conectar com o banco de dados", 1);
	}

	public function select() {
		throw new SelectDataException("não foi possível selecionar os dados", 2);
	}

}

?>