<?php 
	require_once "./Db.class.php";
	abstract class BaseModel{
		protected $db = null;

		function __construct(){
			$arr = array(
				'db_host'=>'localhost:3306',
				'db_user'=>'root',
				'db_pass'=>'',
				'db_name'=>'htbokephp',
				'charset'=>'utf8',
			);

				$this->db = Db::getInstance($arr);

			}




		}
 ?>
