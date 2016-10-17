<?php
	include "Database.php";
	class Products{
		
		private $tablename;
		public $db;
		
		public function __construct(){
			$this->tablename= "products";
			$this->db = Database::getInstance()->getConnection();
		}
		public function lisProduk(){			 					
			$result = $this->db->query("SELECT * FROM ".$this->tablename);			
			return $result;
		}	
	}
	
	$produk = new Products();	
	$result=$produk->lisProduk();
	$data='<h3>Data Produk</h3>';	
	$data.='<ol>';
	while($row = $result->fetch_object()){		
		$data .= '<li>'.$row->ProductName.'</li>'; 
	}
	$data .= '</ol>';
	echo $data;
?>