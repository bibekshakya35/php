<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Jquery extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
		$this->load->library('session');
	}
public function getSelectedCrops()
	{
		$name = $this->input->post('maincrops');
		$data = $this->kishan->getCropsByName($name);
		echo json_encode($data);
		die;

	}
	public function getregionFilter()
	{

		$id = $this->input->post('dr_id');
		$data = $this->kishan->getregionById($id);
		echo json_encode($data);
		die;
	}

	public function getdistrictFilter()
	{

		$zone_id = $this->input->post('zone_id');
		$data = $this->kishan->getdistrictByID($zone_id);
		echo json_encode($data);
		die;
	}

	public function getvarietyFilter()
	{
		$crop_id = $this->input->post('crop_id');
		$data = $this->kishan->getvarietyById($crop_id);
		echo json_encode($data);
		die;
	}

	public function getpdfFilter()
	{
		$crop_id = $this->input->post('crop_id');
		$data = $this->kishan->getpdfById($crop_id);
		echo json_encode($data);
		die;
	}

	public function getproblemFilter(){

		$crop_id = $this->input->post('crop_id');
		$data = $this->kishan->getproblemById($crop_id);
		echo json_encode($data);
		die;
	}

	public function getsolutionFilter(){

		$problem_id = $this->input->post('problem_id');
		$data = $this->kishan->getsolutionById($problem_id);
		echo json_encode($data);
		die;
	}

	

	public function insert_crops()
	{
		$this->load->view('crops');
	}
	public function insert_variety()
	{	
		$data['crop']= $this->kishan->viewCrops();
		$this->load->view('variety',$data);
	}

	public function insert_problem()
	{	
		$data['crop']= $this->kishan->viewCrops();
		$this->load->view('add_problems',$data);
	}

	public function insert_solution()
	{	
		$data['problem']= $this->kishan->view_problem();
		$this->load->view('add_solution',$data);
	}
	public function view_solution()
	{
		$data['solution']= $this->kishan->view_solution();
		$this->load->view('view_solution',$data);
	}


	public function view_variety()
	{
		$data['variety']= $this->kishan->view_variety();
		$this->load->view('view_variety',$data);
	}

	public function viewProblem()
	{
		$data['problem']= $this->kishan->view_problem();
		$this->load->view('view_Problem',$data);
	}

	

}
?>