<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	function __construct()
	{
	parent::__construct();
    $this->load->library('session');
    $this->load->model('Attendance_Model');
	}
	public function index11()
	{
		$this->load->view('Attendance_Site');
	}
	public function create()
	{
		$this->Attendance_Model->create();
	}
	public function Udata()
	{
		$result['data'] = $this->Attendance_Model->Udata();
		$this->load->view('Emp_Detail',$result);
		
	}
	public function photo_capture()
    {
    $this->Attendance_Model->photo_capture_model();
    }
	public function loginCheck()
	{   
		$email=$this->input->post('email');
        $this->session->set_userdata('email',$email);
        $this->Attendance_Model->loginCheck();
    }
	public function emp_reg()
	{ 
		$this->load->view('Emp_Reg');
	}
	public function emp_det()
	{ 
		$this->load->view('Emp_Detail');
	}
	public function webcam()
	{ 
		$this->load->view('webcam');
	}
	public function webcami()
	{ 
		$this->load->view('img');
	}
	public function Profile()
	{ 
		$result['data']= $this->Attendance_Model->ProfileData();
		$this->load->view('profilepage',$result);
	}
	public function home()
	{ 
		$result['data']= $this->Attendance_Model->empImage();
		$this->load->view('Emp_Attend_page',$result);
	}
	
	public function unset_session_data()
    { 
       $this->load->view('Attendance_Site'); 
	}
	public function emp_rec()
	{
		$result['data']= $this->Attendance_Model->emp_rec_empImage();
		$this->load->view('Emp_req',$result);
	}
	//===================================================================================
	
	function index()
{

    if ($this->input->post('upload')) {

    $in=array();
    $in['a_name']    = $this->input->post('a_name');
    $in['a_details'] = $this->input->post('a_info');
    $in['a_photo']=$_FILES['userfile']['name'];

    if($this->Attendance_Model->do_upload()) {

    echo $this->upload->display_errors();

    }else {

    $this->Attendance_Model->Save_gallery($in);

    header('location:index');
    }

    $data['images']=$this->Attendance_Model->get_images();
    $this->load->view('image_view',$data);  
}
	

} 








}
