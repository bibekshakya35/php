<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Front extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
	}

	public function index()
	{
		$this->load->view('home_page');
	}
}
?>