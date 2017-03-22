<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Discussion extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
		$this->load->library('session');
	}

	public function index()
	{
          
        
               
        //$id=$this->kishan->getid();
    
        $data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngoss']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['posts']=$this->kishan->getPosts();
		//$data8['replies']=$this->kishan->getReplies($id);
		$data9['page']='discussion';
	 	$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data9));
	}
	public function postdiscussion()
	{
		$u_id=$this->session->userdata('user_id'); 
		$data=array(
		'title'=>$this->input->post('title'),
		'date'=>$this->input->post('date'),
		'content'=>$this->input->post('postcontent'),
		'user_id'=>$u_id
		);
		$result=$this->kishan->insertDiscussion($data);
		if($result>0)
		{
			$this->session->set_flashdata('discussionsuccess','<div class="alert alert-success">
					 <strong>Success! </strong>You have posted discussion.
				 </div>');
			redirect('admin/discussion');
		}
		else
		{
			$this->session->set_flashdata('discussionfail','<div class="alert alert-danger">
					 <strong>Failed! </strong>You could not post discussion.
				 </div>');
			redirect('admin/discussion');
		}
	}
	public function postComment($id)
	{
		$u_id=$this->session->userdata('user_id'); 
		$date=date('Y-m-d h:i:s');
		$data=array(
		'date'=>$date,
		'answer'=>$this->input->post('comment'),
		'discussion_id'=>$id,
		'user_id'=>$u_id
		);
		$result=$this->kishan->insertComment($data);
		if($result>0)
		{
			$this->session->set_flashdata('commentsuccess','<div class="alert alert-success">
					 You commented.
				 </div>');
			redirect('admin/discussion');
		}
		else
		{
			$this->session->set_flashdata('commentfail','<div class="alert alert-danger">
					 You could not comment.
				 </div>');
			redirect('admin/discussion');
		}
	}

}
?>