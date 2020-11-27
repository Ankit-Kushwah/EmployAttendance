<?php
	 
	

class Attendance_Model extends CI_Model {

	public function create(){
			$Fname=$_REQUEST['fname'];
			$Lname = $_REQUEST['lname'];
			$email= $_REQUEST['email'];
			$pass = $_REQUEST['password'];
			$mob = $_REQUEST['mobile'];
			$adr = $_REQUEST['addr'];
			$designation= $_REQUEST['designation']; 

			$query = $this -> db -> query("INSERT INTO 
			empolyees_reg ( First_Name, Last_Name, Email, Password, Mobile, Address, Field ) 
			VALUES('$Fname','$Lname','$email','$pass','$mob','$adr','$designation')");

            $this->load->view('Admin');
		}
		public function Udata(){
			$query = $this-> db -> query('SELECT * FROM empolyees_reg where Field = "User"');
			return $query->result();
		}


	public function loginCheck(){
		
		$email=$this->input->post('email');
		$pass=$this->input->post('password');
		

		$query = $this->db->query("select * from empolyees_reg where Email='$email' and Password='$pass'");
		if ($query->num_rows() > 0)
    	{
			foreach ($query->result() as $row)  
			{ 
				if($row->Field == "Admin")
				{
					$this->load->view('Admin');
				}
				else
				{
					$query=$this->db->query("select * from empolyees_reg where email='$email'");
                    $result['data']= $query->result();  
					$this->load->view('Emp_Attend_page',$result);
				}		
			}	
		}
		else
		{
			echo 'Please Enter valied Email and Password'  ;
		}
	
	}
	public function ProfileData(){
		$email = $this->session->userdata('email');
		$query=$this->db->query("select * from empolyees_reg where email='$email'");
        return $query->result();  
		
	}
	
	public  function photo_capture_model()
	{
					
				$img = $_POST['image'];
				$folderPath ="./assets/.";

				$image_parts = explode(";base64,", $img);
				$image_type_aux = explode("data:image/", $image_parts[0]);
				$image_type = $image_type_aux[1];

				$image_base64 = base64_decode($image_parts[1]);
				$fileName = uniqid() . '.png';

				$file = $folderPath . $fileName;
				file_put_contents($file, $image_base64);

				// print_r($fileName);

				$this->Attendance_Model->photo_capture_db_model($file);


				}
					public  function photo_capture_db_model($file)
					{


				$id;
				$email = $this->session->userdata('email');
				$query=$this->db->query("select id from empolyees_reg where Email = '$email' ");

				foreach($query->result() as $row){
					$id = $row->id;
				}


				if( $query=$this->db->query("Insert into emp_attend (image,id,Email) values ('$file','$id','$email')") == 1)
				{
				$this->load->view('Emp_Attend_page');
							}
				else
				{
					echo "Check Please .....";
				}
     }

		



}