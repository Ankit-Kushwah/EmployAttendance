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
					$query=$this->db->query("select * from emp_attend where email='$email'");
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

	public function empImage(){
		$email = $this->session->userdata('email');
		$query=$this->db->query("select * from emp_attend where email='$email'");
         return $query->result();  
					
	}
	public function emp_rec_empImage(){
		$email = $this->session->userdata('email');
		$query=$this->db->query("select * from emp_attend ");
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

				$this->Attendance_Model->photo_capture_db_model($fileName);


				}
					public  function photo_capture_db_model($file)
					{


				$id;
				$email = $this->session->userdata('email');
				$query=$this->db->query("select id from empolyees_reg where Email = '$email' ");

				foreach($query->result() as $row){
					$id = $row->id;
				}
				$time =  time('H:i:s');
				$date =  date('Y-m-d');


				if( $query=$this->db->query("Insert into emp_attend (image,id,Email,date,time) values ('$file','$id','$email','$date','$time')") == 1)
				{
				$this->load->view('webcam');
							}
				else
				{
					echo "Check Please .....";
				}
    }

		

	function do_upload() {

		$config = array(
				'allowed_types' => 'jpg|png|bmp', 
				'upload_path'=>'./image/.', //make sure you have this folder
				'max_size'=>2000
			);
	
			$this->load->library('upload',$config);
	
			if ($this->upload->do_upload()) {
				echo "Upload success!";
			} else {
				echo "Upload failed!";
			}
		$image_data = $this->upload->data();
	
		}  
	
	function get_images()
		{
			$query = $this->db->get('image');
			return $query;
		}
	
	function Save_gallery($in)
	{
	$save=$this->db->insert('animalstore',$in);
	return $save;
	}









	}