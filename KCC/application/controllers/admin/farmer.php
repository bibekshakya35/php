<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Farmer extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
		$this->load->library('session');
	}

	public function addfarmer()
	{
		$data['crop']= $this->kishan->viewCrops();
		$data['region']= $this->kishan->viewregion();
		$data['page']='addfarmer';
		$this->load->view('admin/home',$data);
	}
	public function insert_farmer()
		{ 

			$data=array(
						'fname' => $this->input->post('fname'),
						'age'=>$this->input->post('age'),
						'phone'=>$this->input->post('phone'),
						'gender'=>$this->input->post('gender'),
						'dr_id'=>$this->input->post('region'),
						'zone_id'=>$this->input->post('zone'),
						'district_id'=>$this->input->post('district'),
						'vdc'=>$this->input->post('vdc'),
						'wardno'=>$this->input->post('ward'),
						'tole'=>$this->input->post('tole'),
						'crop_id'=>$this->input->post('crop'),
						'variety_id'=>$this->input->post('variety'),
						'problem_id'=>$this->input->post('problem'),
						'productinuse'=>$this->input->post('productinuse'),
						'recommended_id'=>$this->input->post('solution'),
						);	
					$query=$this->kishan->insert_farmer($data);
					if ($query) 
					{
						
						$this->session->set_flashdata('msg','<div class="alert alert-success">Farmer added Successfully</div>');
						redirect('admin/farmer/addfarmer');	
					}
					else
					{
						echo "sorry!!";
					}
		}

	public function viewfarmer()
	{
		
		$data['page']='viewfarmer';
		$data['farmers']=$this->kishan->view_farmer();
		$this->load->view('admin/home',$data);
	}
	public function farmerprofile($farmer_id)
	{
		$data['page']='farmerProfile';
		$data['farmers']=$this->kishan->view_farmerbyId($farmer_id);
		$this->load->view('admin/home',$data);
	}

	public function search()
	{
		$value=$this->input->post('searchfarmer');
		$data1['searchresults']=$this->kishan->searchFarmer($value);
		$data2['page']='searchfarmer';
		$this->load->view('admin/home',array_merge($data1,$data2));
	}
	public function notify()
	{

	}

	public function followupNotify()
	{

	}

}
?>