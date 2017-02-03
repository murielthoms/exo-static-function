<?php 
require 'Models/Armoire.php';

class ArmoireController extends Armoire{
	public function home(){
		$home= Armoire::all(50,0);
		require'Views/home.php';
	}
	public function detail(){
		$detail= Armoire::get($_GET['id']);
		require'Views/detail.php';
	}

 }

?>