<?php
$koneksi = mysqli_connect("localhost","root","","lulus3");
class Database {
		protected $host='localhost';
		protected $dbname='lulus3';
		protected $user='root';  // untuk windows  $user = 'root;	
		protected $pass=''	  ;	//  untuk windows  $pass = '';
		public $mysqli;
		
		function __construct(){
				$this->koneksi();
		}
		
		function koneksi(){
			$this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->dbname);			
			
			if($this->mysqli->connect_errno!=0){
				$err =null;
				$err .='Kode Error : '.$this->mysqli->connect_errno.'<br>';
				$err .='Deskripsi : '.$this->mysqli->connect_error;
				echo $err; 
			} else {
				return $this->mysqli;
			}
			
		}	

		function close(){
			$this->mysqli->close();
		}
		
		function error(){
			$this->mysqli->error;
		}
		

}
?>
