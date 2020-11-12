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
	
	public function getdata(){
		
	}
	
}
?>