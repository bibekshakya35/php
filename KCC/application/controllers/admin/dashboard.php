<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kishan');
		$this->load->library('session');
	}

	public function index()
	{
		$data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngoss']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['page']='home';
	 	$this->load->view('admin/home', array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7));
	}

	public function discussion()
	{
		$data['page']='discussion';
	 	$this->load->view('admin/home',$data);
	}

	public function viewcrops()
	{
		$data['crops']= $this->kishan->viewcrops();
		$data['page']='viewcrops';
	 	$this->load->view('admin/home',$data);
	}

    public function do_pdfupload(){
       $config['upload_path'] = './assets/upload/pdf';

       if(!is_dir($config['upload_path'])) //create the folder if it's not already exists
       {
                 mkdir($config['upload_path'],0755,TRUE);
       } 
       $config['allowed_types'] = 'pdf|docs';
       $config['max_size'] = '10000';
       $config['max_width']  = '2000';
       $config['max_height']  = '2000';

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('pdf'))
            {
            $error = array('error' => $this->upload->display_errors());
            }
       else
            {
            $data_img =$this->upload->data(); 

  /* creating thumb of the image situated in the users upload */
  $this->load->library('image_lib');
      $config['source_image']  = './assets/upload/'.$data_img['file_name'];/* select the users source image */
      $config['new_image']  = './assets/upload/thumbs/'.$data_img['file_name']; /* create a thumb of the users immage into thumb folder */
      $config['create_thumb'] = TRUE;
      $config['maintain_ratio'] = FALSE;
      $config['width']   = 150; /* width of the thumb image */
      $config['height'] = 130;  /* height of the thumb image */
      
      $this->image_lib->initialize($config);  /* initialize the config made above */
      $this->image_lib->resize();

            return $data_img;
       }

  }
	public function add_crops()
	{
		// $images = $this->do_imgupload();
		$pdf = $this->do_pdfupload();

		$data=array(
					'maincrops' => $this->input->post('mcrop'),
					// 'image'=>$images['file_name'],
					'description'=>$pdf['file_name'],

					);	
				$query=$this->kishan->insert_crop($data);  //

				if ($query) 
				{
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Congratulation!!!!successfully added</div>');
					redirect('admin/dashboard/viewcrops');	
				}
				else
				{
					echo "sorry!!";
				}
	}

	public function deleteCrops($crop_id)
		{

			$delete=$this->db->delete('tbl_crops', array('crop_id' => $crop_id));
			if($delete)
			{		
				$this->session->set_flashdata('msg','<div class="alert alert-success">Crop record has been deleted successfully</div>');
				redirect('admin/dashboard/viewcrops');
			}
			else
			{
				echo "sorry!!problem occured";
			}
		}


	public function viewvariety()
	{		
		$data['crop']= $this->kishan->viewcrops();
		$data['page']='viewvariety';
		$data['variety']= $this->kishan->view_variety();
		$this->load->view('admin/home',$data);
	}

	public function deletevariety($variety_id)
		{

			$delete=$this->db->delete('tbl_variety', array('variety_id' => $variety_id));
			if($delete)
			{		
				$this->session->set_flashdata('msg','<div class="alert alert-success">Variety record has been deleted successfully</div>');
				redirect('admin/dashboard/viewvariety');
			}
			else
			{
				echo "sorry!!problem occured";
			}
		}


	public function addvariety()
	{
		$data=array(
					'crop_id' => $this->input->post('maincrop'),
					'variety_name' => $this->input->post('variety'),
					);	
				$query=$this->kishan->insert_variety($data);  //

				if ($query) 
				{
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Congratulation!!!!variety has been added successfully</div>');
					redirect('admin/dashboard/viewvariety');	
				}
				else
				{
					echo "sorry!!";
				}
	}

	public function viewproblem()
	{
		$data['crop']= $this->kishan->viewcrops();
		$data['page']='viewproblem';
		$data['problem']= $this->kishan->view_problem();
		$this->load->view('admin/home',$data);
	}

	public function deleteproblem($problem_id)
		{

			$delete=$this->db->delete('tbl_problems', array('problem_id' => $problem_id));
			if($delete)
			{		
				$this->session->set_flashdata('msg','<div class="alert alert-success">Problem record has been deleted successfully</div>');
				redirect('admin/dashboard/viewproblem');
			}
			else
			{
				echo "sorry!!problem occured";
			}
		}

	public function addproblem()
	{		
		$data=array(
					'crop_id' => $this->input->post('maincrop'),
					'problem_name' => $this->input->post('problem_name'),
					// 'file'=>$pdf['file_name'],

					);	
				$query=$this->kishan->insert_problem($data);  //

				if ($query) 
				{
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Congratulation!!!!problem added successfully</div>');
					redirect('admin/dashboard/viewproblem');	
				}
				else
				{
					echo "sorry!!";
				}
	}

	public function viewsolution()
	{
		$data['problem']= $this->kishan->view_problem();
		$data['page']='viewsolution';
		$data['solution']= $this->kishan->view_solution();
		$this->load->view('admin/home',$data);
	}

	public function deletesolution($solution_id)
		{

			$delete=$this->db->delete('tbl_recommended', array('id' => $solution_id));
			if($delete)
			{		
				$this->session->set_flashdata('msg','<div class="alert alert-success">Solution record has been deleted successfully</div>');
				redirect('admin/dashboard/viewsolution');
			}
			else
			{
				echo "sorry!!problem occured";
			}
		}
	
	public function addsolution()
	{

		$data=array(
					'problem_id' => $this->input->post('problem'),
					'recommended_solution' => $this->input->post('solution'),
					// 'file'=>$pdf['file_name'],

					);	
				$query=$this->kishan->insert_solution($data);  //

				if ($query) 
				{
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Congratulation!!!!successfully added</div>');
					redirect('admin/dashboard/viewsolution');	
				}
				else
				{
					echo "sorry!!";
				}
	}

}
?>