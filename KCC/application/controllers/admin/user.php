<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
Class User extends CI_Controller{

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

	public function addUser()
	{
		$data['region']= $this->kishan->viewregion();
		$data['page']='adduser';
		$this->load->view('admin/home',$data);
	}

	public function manageuser()
	{
		$data['user']= $this->kishan->viewusers();
		$data['page']='manageuser';
		$this->load->view('admin/home',$data);
	}

	public function userprofile($user_id)
	{
		$data['page']='userProfile';
		$data['user']= $this->kishan->showuser($user_id);
		$this->load->view('admin/home',$data);
	}


	public function managemember()
	{
		$data['user']= $this->kishan->viewmembers();
		$data['page']='managemember';
		$this->load->view('admin/home',$data);
	}

	public function do_imgupload(){
               $config['upload_path'] = './images/users/';

               if(!is_dir($config['upload_path'])) //create the folder if it's not already exists
               {
                         mkdir($config['upload_path'],0755,TRUE);
               } 
               $config['allowed_types'] = 'gif|jpg|png';
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

	public function register_user()
	{
		$images = $this->do_imgupload();
		$data=array(
					'user_group' => $this->input->post('usergroup'),
					'fullname' => $this->input->post('fullname'),
					'username'=>$this->input->post('username'),
					'email'=>$this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'image'=>$images['file_name'],
					'inserted'=>date('y-m-d h:i:s'),

					);	
				$query=$this->kishan->register_user($data);  //

				if ($query) 
				{
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Congratulation!!!!New user has been added successfully</div>');
					redirect('admin/user/manageuser');	
				}
				else
				{
					echo "sorry!!";
				}
	}

	public function deleteuser($user_id)
	{

		$delete=$this->db->delete('user', array('user_id' => $user_id));
		if($delete)
		{		
			$this->session->set_flashdata('msg','<div class="alert alert-success">User record has been deleted successfully</div>');
			redirect('admin/user/manageuser');		}
		else
		{
			echo "sorry!!problem occured";
		}
	}

	public function edituser($user_id)
	 	{
			// $data['page']='manageuser';
			$data['page']='edituser';
	 		$data['users']=$this->kishan->showuser($user_id);
	 		$this->load->view('admin/home',$data);
	 	}

	 	public function processedituser()
	 	{
	 			$id=$this->input->post('id');
	 		 	$name=$this->input->post('fullname');
	 			$username=$this->input->post('username');
	 			$email=$this->input->post('email');
	 			$user_type=$this->input->post('usergroup');
	 			$status=$this->input->post('status');
	 		    $query=$this->kishan->process_edit_user($id,$name,$username,$email,$user_type,$status);
	 		if($query)
	 		{
	 			if($user_type=='1')
	 			{
		 			$this->session->set_flashdata('msg','<div class="alert alert-success">user record has been updated successfully</div>');
		 			redirect('admin/user/manageuser');
	 			}
	 			else 
	 			{
		 			$this->session->set_flashdata('msg','<div class="alert alert-success">member record has been updated successfully</div>');
		 			redirect('admin/user/managemember');
	 			}

	 		}
	 		else
	 		{
	 			echo "sorry!!";
	 		}
	 	}



	 	public function getuserFilter()
	{

		$user_id = $this->input->post('user_id');
		$data = $this->kishan->getuserById($user_id);
		echo json_encode($data);
		die;
	}

	public function notify()
	{

	}

}
?>