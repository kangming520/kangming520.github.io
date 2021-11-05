<meta charset="utf-8">
<?php 
	
	require_once "./BaseController.class.php";
	$modelObj = FactoryModel::getInstance('StudentModel');
	


	final class StudentController extends BaseController{
		public function add(){
			include "../contact.html";

		}

		public function insert(){
			$values['name']=$_POST['name'];
			$values['email']=$_POST['email'];
			$values['phonenum']=$_POST['phonenum'];
			$values['message']=$_POST['message'];


			$modelObj = FactoryModel::getInstance('StudentModel');


			if($modelObj->insert($values)){
				$this->jump("<h2>记录添加成功！</h2>");

			}else{
				$this->jump("<h2>记录添加失败！</h2>");
			}


		}
	public function delete(){
		$modelObj = FactoryModel::getInstance('StudentModel');

		$id = isset($_GET['id'])?$_GET['id']:'';

			if($modelObj->delete($id)){
				$this->jump("<h2>id={$id}删除成功！</h2>");

			}else{
				$this->jump("<h2>id={$id}删除失败！</h2>");


	}
}

	




	function index(){
		$modelObj = FactoryModel::getInstance('StudentModel');

		$arrs = $modelObj ->fetchAll();
		$num1 = $modelObj ->totalnum();
		

		include "./StudentIndexView.html";
	}

	}

	$StuConObj =  FactoryModel::getInstance('StudentController'); 
	$ac = isset($_GET['ac'])?$_GET['ac']:'index';
	$StuConObj->$ac();
 ?>