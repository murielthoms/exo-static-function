<?php
require 'Controllers/ArmoireController.php'; 
if (!isset($_GET['id'])) {

	(new ArmoireController())->home();
}else{
	(new ArmoireController())->detail();

}

 ?>