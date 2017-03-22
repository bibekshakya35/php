<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kishan');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('captcha');
	}
	

	public function index()
	{
	  $this->load->view('admin/login');

	}

	public function home()
	{
		$data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngos']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['page']='home';
	  	$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7));
	}

 public function userlogin()
	{
				$user_name = $this->input->post('username');
				$password=$this->input->post('password');
				$query=$this->kishan->login($user_name,$password); 
				$data['user']=$this->kishan->login($user_name,$password);
				foreach ($data['user'] as $users){
					$image=$users->image;
					$user_id=$users->user_id; 
				}
				if ($query) 
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Successfully logged in...</div>');
					$sessiondata = array (
						'username' => $user_name,
						'image' =>$image,
						'user_id' => $user_id,
						'logged_in' => true
						);
				$this->session->set_userdata($sessiondata); 
				redirect('admin/login/home');
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">incorrect username or password</div>');
					redirect('admin/login/index');
				}
			}

	public function logout()
	{
		$this->session->set_userdata(array(
			'username'=>' ',
			'logged_in'=>FALSE)); 
			$this->session->sess_destroy();
			redirect('admin/login');
	}	
}
?>