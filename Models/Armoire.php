<?php
require 'vendor/autoload.php';
class Armoire{
	private $db;
	public function __construct(){
		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username','root');
		ORM::configure('password','root');

		$this->db= ORM::for_table('mes_chaussettes');

	}
	public function getInstance(){

		return $this->db;
	}
	public static function all($limit=0,$offset=NULL){
		$armoire = new self();
		return $armoire->getInstance()->limit($limit)->offset($offset)->find_many();
	}
	public static function get($id){
		$armoire = new self();
		return $armoire->getInstance()->where('id', $id)->find_many();

	}

}

?>