<?php
	include "Database.php";
	class Categories{
		
		private $tablename;
		public $db;
		
		public function __construct(){
			$this->tablename= "categories";
			$this->db = Database::getInstance()->getConnection();
		}
		public function lisKategori(){			 					
			$result = $this->db->query("SELECT * FROM ".$this->tablename);			
			return $result;
		}	
	}
	
	$kategori = new Categories();	
	$result=$kategori->lisKategori();
	$data='<h3>Data Categories</h3>';	
	$data.='<ol>';
	while($row = $result->fetch_object()){		
		$data .= '<li>'.$row->CategoryName.'</li>'; 
	}
	$data .= '</ol>';
	echo $data;
?>