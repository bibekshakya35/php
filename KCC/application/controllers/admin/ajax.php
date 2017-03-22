<?php 
if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Ajax extends CI_Controller{

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

	public function showZoneById()
	{
		$id = $this->input->post('dr_id');
		$data = $this->kishan->getZone($id);
		echo json_encode($data);
		die;
	}
	public function showDistrictById()
	{
		$id = $this->input->post('zone_id');
		$data = $this->kishan->getDistrict($id);
		echo json_encode($data);
		die;
	}
	public function showVdcById()
	{
		$id = $this->input->post('district_id');
		$data = $this->kishan->getVdc($id);
		echo json_encode($data);
		die;
	}
}
?>