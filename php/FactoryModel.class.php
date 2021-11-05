<?php 

require_once "./StudentModel.class.php";

final class FactoryModel{
	static function getInstance($modelName){
		return new $modelName();
		}
}

 ?>
