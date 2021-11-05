<meta charset="utf-8">
<?php 

	require_once "./BaseModel.class.php";

	class StudentModel extends BaseModel{

		

		public function fetchOne($id){
			$sql="select * from backstage where id={$id}";
			return $this->db->fetchOne($sql);


		}

		public function delete($id){
			
			$sql="delete from backstage where id={$id}";


			if($this->db->exec($sql)){
				return true;

			}else{
				return false;
			}
		}

		public function fetchAll(){


			$sql = "select * from backstage";
			return $this->db -> fetchAll($sql);
		}

		

		public function insert($values){
			$ziduan='';
			$zhi='';
			foreach($values as $key => $value) {
				$ziduan .="$key,";
				$zhi .="'$value',";
			}
			

			$ziduan = rtrim($ziduan,',');
			$zhi = rtrim($zhi,',');

			$sql = "insert into backstage($ziduan) values($zhi)";
			return $this->db->exec($sql);
		}


		
	}
 ?>