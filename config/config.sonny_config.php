<?php
class sonny_config extends default_config{
	public function sonny_config(){
		parent::__construct();
		//Site
		$this->http_address = 'http://comparatuescuela/';
		$this->mxnphp_dir = "c:/wamp/www/mxnphp/";
		
		//Database
		$this->db_host = 'localhost';
		$this->db_name = 'compara';
		$this->db_user = 'root';
		$this->db_pass = '';
		
		//MXNPHP
		$this->dev_mode = true;
		
	}
}
?>