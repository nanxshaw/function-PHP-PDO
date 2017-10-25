<?php 
class config extends koneksi
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function welcome(){
		echo "Welcome to PDO function";
	}

//CRUD 
	public function insert(){
		parent::beginTransaction();
		parent::query("INSERT INTO table () VALUES () ");
		parent::execute();
		parent::endTransaction();
		
	}

	public function update(){	
		parent::beginTransaction();
		parent::query("UPDATE SET table FROM data WHERE id = ? ");
		parent::execute();
		parent::endTransaction();
	
	}

	public function delete(){	
		parent::beginTransaction();
		parent::query("DELETE FROM table WHERE id ");
		parent::execute();
		parent::endTransaction();
	
	}

	public function read(){	
		parent::beginTransaction();
		parent::query("SELECT * FROM table ");
		parent::execute();
		parent::endTransaction();
		$list = parent::fetchAll();
		foreach ($list as $key) {
			//list data
			echo $key->object_name;
		}
	
	}


}

?>