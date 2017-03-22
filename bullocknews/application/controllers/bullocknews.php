<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bullocknews
 *
 * @author Bibek Shakya
 */
class bullocknews extends My_Controller {
    

    public function index(){
    
        $this->load->helper("url");
        $this->load->model("home_model");
        $data["row"]=$this->home_model->getPic();
        $data["fourImageData"]=$this->home_model->getSmallPic();
        $data["getLatestNews"]=$this->home_model->getRecentNews();
        $data["getNationalNews"]=$this->home_model->getNewsType("Nation",3);
        $data["getSmallNationalNews"]=$this->home_model->getNewsType("Nation",1);
        $data["getSmallNationalNewsone"]=$this->home_model->getNewsType("Nation",0);
        
        $data["getInternationalNews"]=$this->home_model->getNewsType("International",3);
        $data["getSmallInternationalNews"]=$this->home_model->getNewsType("International",1);
        $data["getSmallInternationalNewsone"]=$this->home_model->getNewsType("International",0);
        
        $data["getBusinessNews"]=$this->home_model->getNewsType("Business",3);
        $data["getSmallBusinessNews"]=$this->home_model->getNewsType("Business",1);
        $data["getSmallBusinessNewsone"]=$this->home_model->getNewsType("Business",0);
        
        $data["getLifestyleNews"]=$this->home_model->getNewsType("Lifestyle",3);
        $data["getSmallLifestyleNews"]=$this->home_model->getNewsType("Lifestyle",1);
        $data["getSmallLifestyleNewsone"]=$this->home_model->getNewsType("Lifestyle",0);
        
        $data["getEntertainmentNews"]=$this->home_model->getNewsType("Entertainment",3);
        $data["getSmallEntertainmentNews"]=$this->home_model->getNewsType("Entertainment",1);
        $data["getSmallEntertainmentNewsone"]=$this->home_model->getNewsType("Entertainment",0);
        
        $data["getHealthNews"]=$this->home_model->getNewsType("Health",3);
        $data["getSmallHealthNews"]=$this->home_model->getNewsType("Health",1);
        $data["getSmallHealthNewsone"]=$this->home_model->getNewsType("Health",0);
        
        $data["getSportNews"]=$this->home_model->getNewsType("Sport",3);
        $data["getSmallSportNews"]=$this->home_model->getNewsType("Sport",1);
        $data["getSmallSportNewsone"]=$this->home_model->getNewsType("Sport",0);
        
        
        $this->load->view("template/header");
        $this->load->view("template/content",$data);
        $this->load->view("template/content_lifestyle",$data);
        $this->load->view("template/content_entertainment",$data);
        $this->load->view("template/content_health",$data);
        $this->load->view("template/content_sport",$data);
        $this->load->view("template/footer");
    }
    public function category(){
         $this->load->helper("url");
         $this->load->model("home_model");
         $data["category"]=$this->home_model->getNewsTypeOne("Nation");
         $data["categoryBusiness"]=$this->home_model->getNewsTypeOne("Business");
         $data["categoryEntertainment"]=$this->home_model->getNewsTypeOne("Entertainment");
         $data["categoryHealth"]=$this->home_model->getNewsTypeOne("Health");
         $data["categoryInternational"]=$this->home_model->getNewsTypeOne("International");
        $data["categorySport"]=$this->home_model->getNewsTypeOne("Sport");
        $data["picture"]=  $this->home_model->getPicture();
         $this->load->view("categorytemplate/categorytemp",$data);
    }
    public function article($AID){
        $this->load->helper("url");
        $this->load->model("home_model");
         $data["articledata"]=$this->home_model->getArticle($AID);
         
        $this->load->view("template/header");
        $this->load->view("template/article",$data);
    
       
        
        
    }
    public function search(){
        $this->load->helper("url");
        $this->load->helper("form");
         
        $this->load->model("home_model");
        $search=$this->input->post("searchdata");
        $data["search"]=$this->home_model->getSearch($search);
        
        
        $this->load->view("template/search",$data);
   
        
                
        
    }
    public function cms(){
         $this->load->helper("url");
        $this->load->helper("form");
         
      $this->load->model("user_model");
        
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->library("session");
        //fetch all user
        $this->value["userData"]=$this->user_model->get();
        //view them 
        $this->load->view("template/header");
         $this->load->view("CMS/_layout_model",$this->value);
  
        
      
    }
    public function modal(){
         $this->load->helper("url");
        $this->load->helper("form");
         
        $this->load->model("home_model");
        
        $this->load->view("template/header");
         $this->load->view("CMS/_layout");
    }
    public function login(){
        //redirect the user if he already login dont in mYCONTROller
        $this->load->model("user_model");
        
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->library("session");
        //set the form
        $rules= $this->user_model->rules;
        $dashboard="bullocknews/cms";
        
        $this->user_model->loggedin()==FALSE || redirect($dashboard);
//set rule
        
        $this->form_validation->set_rules($rules);//pass rule
      //porocess it
        if($this->form_validation->run() == TRUE){
            //we can login and reddirext
            if($this->user_model->login()== TRUE){
                redirect($dashboard);
            }
            else{
                $this->session->set_flashdata("error","Error in mail id or pass");
                redirect("bullocknews/login","refresh");
            }
        }
        
        $this->data["subview"]="CMS/login";
        $this->load->view("template/header");
        $this->load->view("CMS/_layout",  $this->data);
    }
    public function logout(){
       $this->load->model("user_model");
       $this->user_model->logout();
       redirect("bullocknews/login");
    }
    //for managing user
    //basic crud function
   
    public function edit($id=NULL){
        //fetch a user or set a user
         if($id){
             $this->data['user']=  $this->user_model->get($id);
             count($this->data['user'])||  $this->data['error'][]="user could not found";
         
         }
         else{
             $this->data['user']=  $this->user_model->get_new();
         }
         
         
         //set up the form
        $rules=$this->user_model->rules_admin;
         $id || $rules['password']["rules"].='|required';
         
        
        $this->form_validation->set_rules($rules);//pass rule
        //process the form
        
        if($this->form_validation->run() == TRUE){
            //we can login and reddirext
            $data=  $this->user_model->array_from_post(array('name','password','email'));
          
            $data["password"]=md5($data['password']);
            
            $this->user_model->save($data,$id);
            redirect("bullocknews/cms");
        }
        //load them in view
        
        $this->load->view("template/header");
        $this->load->view("CMS/_edit",$this->data);
        
    }
    public function delete($id){
      $this->user_model->delete($id);
      redirect("bullocknews/cms");
        
    }
     public function _unique_email($str){
         //donot validate if email is already exiuts
         //unless it's the email for the current user
         
         $this->load->model("user_model");
        
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->library("session");
        $id=  $this->uri->segment(3);
        $this->db->where('email',  $this->input->post('email'));
        !$id ||$this->db->where('id !=',$id);//donot inclue
        $user=  $this->user_model->get();
        if(count($user)){
            $this->form_validation->set_message('_unique_email','%s should be unique');
            return FALSE;
        }
        return TRUE;
    }
    /*public function motivation(){
        $this->load->helper("url");
        $this->load->model("home_model");
        $data["motivation"]=$this->home_model->getMotivationalPic();
        $data["article"]=  $this->home_model->motivationArticle();
                
        $this->load->view("motivationtemplate/motivation",$data);
    }
    public function getData(){
        $this->load->model("home_model");
        //$pages=  $this->home_model->get(array("name"));
       // $pages=  $this->home_model->get(1);
        
        var_dump($pages);
    }
    public function save() {
        $this->load->model("home_model");
        $data=array(
            "name"=>"batman",
            "password"=>"superman"
        );
        $this->home_model->delete(1);
        var_dump($data);
    }*/
    //put your code here
    
}
