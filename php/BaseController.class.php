<?php 
	require_once "./FactoryModel.class.php";
	abstract class BaseController{ 
		protected function jump($message,$url='?',$time=3){
			echo "<h2>{$message}</h2>";
			header("Refresh:{$time};url={$url}");
			die();
		}

	}


 ?>