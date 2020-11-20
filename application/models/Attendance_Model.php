<?php
	 
	

class Attendance_Model extends CI_Model {

	public function create(){
			$Fname=$_REQUEST['fname'];
			$Lname = $_REQUEST['lname'];
			$email= $_REQUEST['email'];
			$pass = $_REQUEST['password'];
			$mob = $_REQUEST['mobile'];
			$adr = $_REQUEST['addr'];

			$query = $this -> db -> query("INSERT INTO 
			empolyees_reg ( First_Name, Last_Name, Email, Password, Mobile, Address ) 
			VALUES('$Fname','$Lname','$email','$pass','$mob','$adr')");
		}
		public function Udata(){
			$query = $this-> db -> query('SELECT * FROM empolyees_reg');
			return $query->result();
			// return array("data" => $returns);
		}


	public function loginCheck(){
		$email=$this->input->post('email');
		$pass=$this->input->post('password');

		$query = $this->db->query("select Email from empolyees_ where email='".$email."' and password='$pass'");
		
		foreach ($query->result() as $row)  
			{
				if($row->Email == $email){
					echo 'Hurryee !!! you are login as ' , $row->First_Name ;
				}else{
					echo 'You are selected wrong designation !!!!! try again';
				}
			}
		
	}
	
	
}
?>