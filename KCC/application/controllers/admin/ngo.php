<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Ngo extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function addNgo()
	{
		$data['page']='addngosahakari';

		$this->load->view('admin/home',$data);
	}
	public function addNewNgo()
	{
		$time=date('Y-m-d');
		$data=array(
		'ngo_sahakari_name'=>$this->input->post('name'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'address'=>$this->input->post('address'),
		'status'=>$this->input->post('status'),
		'created_on'=>$time
		);
		$result=$this->kishan->insertNgo($data);
		if($result>0)
		{
			redirect('admin/ngo/viewngo');
		}else
		{
			echo"failed";
		}
	}
	
	public function viewngo()
	{
		$data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngoss']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['ngos']=$this->kishan->getAllNgos();
		$data8['page']='viewngosahakari';
		$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8));
	}

	public function deleteNgo($id)
	{
		$result=$this->kishan->removeNgo($id);
		if($result)
		{
			redirect('admin/ngo/viewngo');
		}
		else
		{
			redirect('admin/ngo/viewngo');
		}
	}

	public function edit($id)
	{
		$data1['nss']=$this->kishan->getEditNgo($id);
		$data2['page']='editngoshakari';
		$this->load->view('admin/home',array_merge($data1,$data2));
	}
	public function editApprove($id)
	{

	}
	public function editNgo()
	{	
		$user_id=$this->session->userdata('user_id');
		$id=$this->input->post('id');
		$ngo_name=$this->input->post('name');
		$email=$this->input->post('email');
		$time=$this->input->post('date');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');
		$status=$this->input->post('status');
		$updated_id=4; 
		$insert=$this->kishan->updateNgoNotic($time,$updated_id,$id,$user_id);
		$reuslt=$this->kishan->updateNgo($id,$ngo_name,$email,$phone,$address,$time,$status);
		if($reuslt)
		{
			$this->session->set_flashdata('useredit','<div class="alert alert-success">
					 <strong>Success! </strong>You have edited Ngo and need Admin Approval.
				 </div>');
			redirect('admin/ngo/viewngo');
		}
		else
		{
			$this->session->set_flashdata('usereditfail','<div class="alert alert-fail">
					 <strong>Failed! </strong>You have failed to edit Ngo / Sahakari .
				 </div>');
			redirect('admin/ngo/viewngo');

		}
	}
	public function notify()
	{
		$data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngoss']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['orgs']=$this->kishan->getNotificNgos1();
		$data8['edits']=$this->kishan->getNotificNgos2();
		$data9['page']='ngoNotific';
		$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9));
	}
}
?>
