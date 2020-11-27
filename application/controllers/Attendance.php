<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	function __construct()
	{
	parent::__construct();
    $this->load->library('session');
    $this->load->model('Attendance_Model');
	}
	public function index()
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
		$this->load->view('Emp_Attend_page');
	}
	
	public function unset_session_data()
    { 
       $this->load->view('Attendance_Site'); 
    }
}
