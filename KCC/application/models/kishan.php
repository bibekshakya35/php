<?php
class kishan extends CI_Model{

public function login($user_name,$password)
{
	$sql="SELECT *from user where username='$user_name' AND password='$password'";
	$query=$this->db->query($sql);	
	return $query->result();
}

public function showuser($user_id)
{
	$sql="SELECT *from user where user_id='$user_id'";
	$query=$this->db->query($sql);	
	return $query->result();
}

public function register_user($data)
	{
		$query=$this->db->insert('user',$data);
		return $query;
	}


public function insert_farmer($data)
{
	$query=$this->db->insert('tbl_farmer',$data);
	return $query;
}
public function view_farmerbyId($farmer_id)
{
	$sql="SELECT *,tbl_crops.maincrops,tbl_developmentregion.dr_name,tbl_zone.zone_name,tbl_district.district_name,
	tbl_variety.variety_name,tbl_problems.problem_name,tbl_recommended.recommended_solution from tbl_farmer
	INNER JOIN tbl_crops ON tbl_farmer.crop_id=tbl_crops.crop_id 
	INNER JOIN tbl_developmentregion ON tbl_farmer.dr_id=tbl_developmentregion.dr_id
	INNER JOIN tbl_zone ON tbl_farmer.zone_id=tbl_zone.zone_id
	INNER JOIN tbl_district ON tbl_farmer.district_id=tbl_district.district_id
	INNER JOIN tbl_problems ON tbl_farmer.problem_id=tbl_problems.problem_id
	INNER JOIN tbl_variety ON tbl_farmer.variety_id=tbl_variety.variety_id
	INNER JOIN tbl_recommended ON tbl_farmer.recommended_id=tbl_recommended.recommended_id WHERE farmer_id='$farmer_id' ";
	$query=$this->db->query($sql);
	return $query->result();
}
public function getuserByID($user_id){
		$sql = 'SELECT user_id,fullname,username,password,user_group,status, FROM user where user_id = "'.$user_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->user_id] = $val->fullname;
		}
		return $subtopic;
	}

public function insert_crop($data)
{
	$query=$this->db->insert('tbl_crops',$data);
	return $query;
}

public function insert_variety($data)
{
	$query=$this->db->insert('tbl_variety',$data);
	return $query;
}

public function insert_problem($data)
{
	$query=$this->db->insert('tbl_problems',$data);
	return $query;
}

public function insert_solution($data)
{
	$query=$this->db->insert('tbl_recommended',$data);
	return $query;
}

public function viewCrops()
{
	$sql="SELECT *from tbl_crops";
	$query=$this->db->query($sql);
	return $query->result();
}
public function viewusers()
{
	$sql="SELECT *from user where user_group='1'";
	$query=$this->db->query($sql);
	return $query->result();
}

public function viewmembers()
{
	$sql="SELECT *from user where user_group='0'";
	$query=$this->db->query($sql);
	return $query->result();
}

// public function viewcropsbyid($partialSates)
// {
// 	$sql="SELECT *from tbl_crops WHERE maincrops LIKE '%$partialSates%'";
// 	$query=$this->db->query($sql);
// 	return $query->result();
// }

// public function viewcropsbyid($crop){
// $sql="SELECT variety_id,variety_name from tbl_crops join tbl_variety  on tbl_variety.crop_id=tbl_crops.crop_id WHERE maincrops LIKE '%$crop%'";
// $query = $this->db->query($sql);
// $result =  $query->result();
// $subtopic = array();
// foreach($result as $key => $val){
// 	$subtopic[$val->variety_id] = $val->variety_name;
// }
// return $subtopic;
// }


public function getCropsByName($name)
{
	$sql="SELECT *from tbl_crops WHERE maincrops LIKE '%$name%'";
	$query=$this->db->query($sql);
	return $query->result();
}

public function view_farmer()
{
	$sql="SELECT *,tbl_crops.maincrops,tbl_developmentregion.dr_name,tbl_zone.zone_name,tbl_district.district_name,
	tbl_variety.variety_name,tbl_problems.problem_name,tbl_recommended.recommended_solution from tbl_farmer
	INNER JOIN tbl_crops ON tbl_farmer.crop_id=tbl_crops.crop_id 
	INNER JOIN tbl_developmentregion ON tbl_farmer.dr_id=tbl_developmentregion.dr_id
	INNER JOIN tbl_zone ON tbl_farmer.zone_id=tbl_zone.zone_id
	INNER JOIN tbl_district ON tbl_farmer.district_id=tbl_district.district_id
	INNER JOIN tbl_problems ON tbl_farmer.problem_id=tbl_problems.problem_id
	INNER JOIN tbl_variety ON tbl_farmer.variety_id=tbl_variety.variety_id
	INNER JOIN tbl_recommended ON tbl_farmer.recommended_id=tbl_recommended.recommended_id";
	$query=$this->db->query($sql);
	return $query->result();
}

public function view_variety()
{
	$sql="SELECT *,tbl_crops.maincrops from tbl_variety  INNER JOIN tbl_crops ON tbl_variety.crop_id=tbl_crops.crop_id";
	$query=$this->db->query($sql);
	return $query->result();
}

public function view_problem()
{
	$sql="SELECT *,tbl_crops.maincrops from tbl_problems  INNER JOIN tbl_crops ON tbl_problems.crop_id=tbl_crops.crop_id";
	$query=$this->db->query($sql);
	return $query->result();
}

public function view_solution()
{
	$sql="SELECT *,tbl_problems.problem_name from tbl_recommended  INNER JOIN tbl_problems ON tbl_recommended.problem_id=tbl_problems.problem_id";
	$query=$this->db->query($sql);
	return $query->result();
}

public function viewregion()
{
	$sql="SELECT * FROM tbl_developmentregion";
	$query=$this->db->query($sql);
	return $query->result();
}

public function getregionById($dr_id){
		$sql = 'SELECT zone_name,zone_id FROM tbl_zone where dr_id = "'.$dr_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->zone_id] = $val->zone_name;
		}
		return $subtopic;
	}

	public function getdistrictByID($zone_id){
		$sql = 'SELECT district_name,district_id FROM tbl_district where zone_id = "'.$zone_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->district_id] = $val->district_name;
		}
		return $subtopic;
	}

	public function getpdfById($crop_id)
	{
		$sql = 'SELECT description,crop_id FROM tbl_crops where crop_id = "'.$crop_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->crop_id] = $val->description;
		}
		return $subtopic;
	}
	public function getvarietyById($crop_id){
		$sql = 'SELECT variety_name,variety_id FROM tbl_variety where crop_id = "'.$crop_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->variety_id] = $val->variety_name;
		}
		return $subtopic;
	}

	public function getproblemById($crop_id){
		$sql = 'SELECT problem_name,problem_id FROM tbl_problems where crop_id = "'.$crop_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->problem_id] = $val->problem_name;
		}
		return $subtopic;
	}

	public function getsolutionById($problem_id){
		$sql = 'SELECT recommended_solution,recommended_id FROM tbl_recommended where problem_id = "'.$problem_id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$subtopic = array();
		foreach($result as $key => $val){
			$subtopic[$val->recommended_id] = $val->recommended_solution;
		}
		return $subtopic;
	}

	public function process_edit_user($id,$name,$username,$email,$user_type,$status)
	{
		$sql="UPDATE user SET fullname='$name', email='$email', user_group='$user_type', status='$status' Where user_id='$id' ";
		$query=$this->db->query($sql);
		return $query;
		
	}

	public function viewregn()
	{
		$sql="SELECT *,tbl_developmentregion.name FROM tbl_crops INNER JOIN tbl_developmentregion ON tbl_crops.dr_id=tbl_developmentregion.dr_id";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	
	//sujan 
		public function getAllRegions()
	{
		$sql="SELECT * from tbl_developmentregion";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getZoneById($id)
	{
		$sql="SELECT * from tbl_zone where zone_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getDistrictByIds($id)
	{
		$sql="SELECT * from tbl_district WHERE district_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getVdcById($id)
	{
		$sql="SELECT * FROM tbl_vdc where vdc_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getZone($id)
	{
		$sql = 'SELECT * FROM tbl_zone where dr_id = "'.$id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$zone = array();
		foreach($result as $key => $val){
			$zone[$val->zone_id] = $val->zone_name;
		}
		return $zone;
	}
	public function getDistrict($id)
	{
		$sql = 'SELECT * FROM tbl_district where zone_id = "'.$id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$district = array();
		foreach($result as $key => $val){
			$district[$val->district_id] = $val->district_name;
		}
		return $district;
	}
	public function getVdc($id)
	{
		$sql = 'SELECT * FROM tbl_vdc where district_id = "'.$id.'"';
		$query = $this->db->query($sql);
		$result =  $query->result();
		$vdc = array();
		foreach($result as $key => $val){
			$vdc[$val->vdc_id] = $val->vdc_name;
		}
		return $vdc;
	}
	public function getAllNgos()
	{
		$sql="SELECT * from tbl_ngosahakari";
		$query=$this->db->query($sql);
		return $query->result();
	}

	// public function showAllAgrovates()
	// {
	// 	$sql="SELECT a.* , dr.dr_name as drname, z.zone_name as zname, d.district_name as dname,v.VDC_name as vname from tbl_distributor as a 
	// 	join tbl_developmentregion as dr on a.dr_id=dr.dr_id
	// 	join tbl_zone as z on a.zone_id=z.zone_id
	// 	join tbl_district as d on a.district_id=d.district_id
	// 	join tbl_vdc as v on a.vdc_id=v.vdc_id";
	// 	$query=$this->db->query($sql);
	// 	return $query->result();
	// }
	public function showAllAgrovatesEast()
	{
		$sql="SELECT d.*, dis.district_name as district FROM tbl_distributor as d join tbl_district as dis
		on d.district_id=dis.district_id WHERE dr_id='5'";
	 	$query=$this->db->query($sql);
	 	return $query->result();
	}
	public function showAllAgrovatesCentral()
	{
		$sql="SELECT d.*, dis.district_name as district FROM tbl_distributor as d join tbl_district as dis
		on d.district_id=dis.district_id WHERE dr_id='4'";
	 	$query=$this->db->query($sql);
	 	return $query->result();
	}
	public function showAllAgrovatesWest()
	{
		$sql="SELECT d.*, dis.district_name as district FROM tbl_distributor as d join tbl_district as dis
		on d.district_id=dis.district_id WHERE dr_id='3'";
	 	$query=$this->db->query($sql);
	 	return $query->result();
	}
	public function showAllAgrovatesMidwest()
	{
		$sql="SELECT d.*, dis.district_name as district FROM tbl_distributor as d join tbl_district as dis
		on d.district_id=dis.district_id WHERE dr_id='2'";
	 	$query=$this->db->query($sql);
	 	return $query->result();
	}
	public function showAllAgrovatesFarwest()
	{
		$sql="SELECT d.*, dis.district_name as district FROM tbl_distributor as d join tbl_district as dis
		on d.district_id=dis.district_id WHERE dr_id='1'";
	 	$query=$this->db->query($sql);
	 	return $query->result();
	}
	public function getAgrovetProfile($id)
	{
		$sql="SELECT a.* , dr.dr_name as drname, z.zone_name as zname, d.district_name as dname,v.VDC_name as vname from tbl_distributor as a 
		join tbl_developmentregion as dr on a.dr_id=dr.dr_id
		join tbl_zone as z on a.zone_id=z.zone_id
		join tbl_district as d on a.district_id=d.district_id
		join tbl_vdc as v on a.vdc_id=v.vdc_id where agrovet_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getWholesalers()
	{
		$sql="SELECT * from tbl_distributor";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getProfileFarmers($id)
	{
		$sql="SELECT f.*,d.district_name from farmer as f join tbl_district as d on f.district_id=d.district_id where distributor_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getRetailerAgros($id)
	{
		$sql="SELECT * from tbl_retailer where distributor_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();

	}
	
	public function insertAgrovet($data)
	{
		$value=$this->db->insert('tbl_distributor',$data);
		return $value;
	}
	public function  insertRetailer($data)
	{
		$value=$this->db->insert('tbl_retailer',$data);
		return $value;
	}
	public function insertProfileRetailer($data)
	{
		$value=$this->db->insert('tbl_retailer',$data);
		return $value;
	}
	public function insertNgo($data)
	{
		$value=$this->db->insert('tbl_ngosahakari',$data);
		return $value;
	}
	public function insertDiscussion($data)
	{
		$value=$this->db->insert('tbl_discussion',$data);
		return $value;
	}
	public function insertComment($data)
	{
		$value=$this->db->insert('tbl_replies',$data);
		return $value;
	}
	public function getPosts()
	{
		$sql="SELECT d.*,u.username,u.image FROM tbl_discussion as d join user as u
		on d.user_id=u.user_id order by date desc";
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function getReplies($id)
	{
            
		$sql="SELECT r.*,u.*,d.* from tbl_replies as r
                LEFT JOIN user as u ON r.user_id=u.user_id 
                LEFT JOIN tbl_discussion as d ON r.discussion_id = d.discussion_id where r.discussion_id =$id order by r.date desc";
           
		$query=$this->db->query($sql);
		return $query->result();
	}
        public function getId(){
            $sql="select discussion_id from tbl_discussion";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
	public function removeAgrovet($id)
	{
		$sql="DELETE FROM tbl_distributor where agrovet_id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	public function removeNgo($id)
	{
		$sql="DELETE FROM tbl_ngosahakari where ngo_sahakari_id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	public function getEditAgrovet($id)
	{
		$sql="SELECT * from tbl_distributor where agrovet_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	public function getEditNgo($id)
	{
		$sql="SELECT * from tbl_ngosahakari where ngo_sahakari_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	//when user edits this will reflect  on this sestion
	public function updateNgo($id,$ngo_name,$email,$phone,$address,$created_on,$status)
	{
		$sql="insert into tbl_ngosahakariedit (ngo_sahakari_name,email,address,phone,status,created_on,ngo_sahakari_id)values('$ngo_name','$email','$phone','$address','$status','$created_on','$id')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function updateNgoNotic($date,$type,$content_id,$user_id)
	{
		$sql="insert into tbl_update (updated_date,updated_id,content_id,user_id)values('$date','$type','$content_id','$user_id')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function searchFarmer($farmers)
	{
		$sql="SELECT f.*,d.district_name as district ,c.maincrops as crop,p.problem_name   FROM tbl_farmer as f 
		join tbl_district as d on f.district_id=d.district_id
		join tbl_crops as c on c.crop_id=f.crop_id
		join tbl_problems as p on p.problem_id=f.problem_id WHERE fname LIKE '%$farmers%' ";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticAgros()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u where updated_id='1'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticFarmers()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u where updated_id='2'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticMembers()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u where updated_id='3'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticNgos()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u where updated_id='4'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticFollowUp()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u where updated_id='5'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNoticAll()
	{
		$sql="SELECT u.*,count(id) as num from tbl_update as u ";
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function getNotificNgos1()
	{
		$sql="SELECT n.ngo_sahakari_id,n.ngo_sahakari_name,n.phone,n.email,n.address,n.status,n.created_on FROM tbl_update as u join tbl_ngosahakari as n on n.ngo_sahakari_id=u.content_id  where u.updated_id='4' order by n.created_on asc";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function getNotificNgos2()
	{
		$sql="SELECT n.ngo_sahakari_id,n.ngo_sahakari_name,n.phone,n.email,n.address,n.status,n.created_on FROM tbl_update as u  join tbl_ngosahakariedit as n on n.ngo_sahakari_id=u.content_id  where u.updated_id='4' order by n.created_on asc";
		$query=$this->db->query($sql);
		return $query->result();
	}

}

?>