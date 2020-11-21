<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	public function index()
	{
		$this->load->view('Attendence_Site');
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
	// public function login()
	// {
	// 	$this->load->view('login');
	// }
	public function loginCheck()
	{   
        $this->Attendance_Model->loginCheck();
    }
	public function emp_reg()
	{ 
		$this->load->view('Emp_Reg');
	}
	public function webcam()
	{ 
		$this->load->view('webcam.html');
	}
}
