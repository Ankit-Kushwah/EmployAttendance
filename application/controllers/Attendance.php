<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	public function create()
	{
		$this->Attendance_Model->create();
	}
	public function getdata()
	{
		$this->Attendance_Model->getdata();
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function emp_reg()
	{ 
		$this->load->view('Emp_Reg');
	}
}
