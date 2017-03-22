<?php 
if(! defined('BASEPATH')) exit('No direct script access allowed');
Class Agrovet extends CI_Controller{

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

	public function addagrovet()
	{
		$data1['regions']=$this->kishan->getAllRegions();
		$data2['page']='addagrovet';
		$this->load->view('admin/home',array_merge($data1,$data2));
	}
	public function addRetailer()
	{
		$data1['distributors']=$this->kishan->getWholesalers();
		$data2['page']='addretaileragrovet';
		$this->load->view('admin/home',array_merge($data1,$data2));
	}

	public function do_imgupload(){
       $config['upload_path'] = './images/agrovets/';

       if(!is_dir($config['upload_path'])) //create the folder if it's not already exists
       {
                 mkdir($config['upload_path'],0755,TRUE);
       } 
       $config['allowed_types'] = 'gif|jpg|png|jpeg';
       $config['max_size'] = '10000';
       $config['max_width']  = '2000';
       $config['max_height']  = '2000';

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('userfile'))
            {
            $error = array('error' => $this->upload->display_errors());
            }
       else
            {
            $data_img =$this->upload->data(); 

  /* creating thumb of the image situated in the users upload */
  $this->load->library('image_lib');
      $config['source_image']  = './image/agrovets/'.$data_img['file_name'];/* select the users source image */
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
	public function addNewAgrovet()
	{
		$image=$this->do_imgupload();
		$time=date('Y-m-d');
		$data=array(
		'agrovet_name'=>$this->input->post('name'),
		'agrovet_owner'=>$this->input->post('owner'),
		'pan_no'=>$this->input->post('pan'),
		'address'=>$this->input->post('address'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'dr_id'=>$this->input->post('region'),
		'zone_id'=>$this->input->post('zone'),
		'district_id'=>$this->input->post('district'),
		'vdc_id'=>$this->input->post('vdc'),
		'ward'=>$this->input->post('ward'),
		'website'=>$this->input->post('website'),
		'facebook_link'=>$this->input->post('facebook'),
		'twitter_link'=>$this->input->post('twitter'),
		'status'=>$this->input->post('status'),
		'created_on'=>$time,
		'image'=>$image['file_name']
		);
	
		$result=$this->kishan->insertAgrovet($data);
		if($result>0)
		{
			echo"success";
		}else
		{
			echo"failed";
		}
	}
	public function addNewRetailer()
	{
		$time=date('Y-m-d');
		$data=array(
		'agrovet_name'=>$this->input->post('name'),
		'address'=>$this->input->post('address'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'status'=>$this->input->post('status'),
		'created_on'=>$time,
		'distributor_id'=>$this->input->post('distributor')

		);
		$result=$this->kishan->insertRetailer($data);
		if($result>0)
		{
			echo"success";
		}else
		{
			echo"failed";
		}
	}

	public function addProfileRetailer()
	{
		$time=date('Y-m-d');
		$data=array(
		'agrovet_name'=>$this->input->post('name'),
		'address'=>$this->input->post('address'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'status'=>$this->input->post('status'),
		'created_on'=>$time,
		'distributor_id'=>$this->input->post('id')

		);
		$result=$this->kishan->insertRetailer($data);
		if($result>0)
		{
			echo"success";
		}else
		{
			echo"failed";
		}
	}

	public function viewAgrovet()
	{
		$data1['easts']=$this->kishan->showAllAgrovatesEast();
		$data2['centrals']=$this->kishan->showAllAgrovatesCentral();
		$data3['wests']=$this->kishan->showAllAgrovatesWest();
		$data4['midwests']=$this->kishan->showAllAgrovatesMidwest();
		$data5['farwests']=$this->kishan->showAllAgrovatesFarwest();
		$data6['page']='viewagrovet';
		$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6));
		//unlink(echo base_url();images/$product->image;);
	}
	public function viewAgrovetProfile($id)
	{
		$data1['agros']=$this->kishan->getNoticAgros();
		$data2['farms']=$this->kishan->getNoticFarmers();
		$data3['members']=$this->kishan->getNoticMembers();
		$data4['ngoss']=$this->kishan->getNoticNgos();
		$data5['followups']=$this->kishan->getNoticFollowUp();
		$data6['all']=$this->kishan->getNoticAll();
		$data7['infos']=$this->kishan->getAgrovetProfile($id);
		$data8['agross']=$this->kishan->getRetailerAgros($id);
		$data9['farms']=$this->kishan->getProfileFarmers($id);
		$data10['page']='agrovetprofile';
		$this->load->view('admin/home',array_merge($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10));
	}
	public function deleteAgrovet($id)
	{
		$result=$this->kishan->removeAgrovet($id);
		if($result)
		{
			echo "success";//redirect after operation is percformed
		}
		else
		{
			echo "failed";
		}
	}

	public function edit($id)
	{
		$data1['agros']=$this->kishan->getEditAgrovet($id);
		$data2['page']='editagrovet';
		$this->load->view('admin/home',array_merge($data1,$data2));
	}

	public function notify()
	{

	}
}
?>