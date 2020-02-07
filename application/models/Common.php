<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model
{

		public function getCategires(){
			$subchild=array();
			$subcategories=array();
			$categoires=array();
			 $q = $this->db->get('category');
	        if ($q->num_rows()) {
	        	foreach ($q->result() as  $category) {
	        		$query_subcat = $this->db->where(['category_id' =>$category->cat_id])->get('subcategory');
	        		$subcategories=[];
	        		foreach ($query_subcat->result() as  $sub_cat) {
	        		  $query_subchild = $this->db->where(['category_id' =>$sub_cat->category_id,'sub_id'=>$sub_cat->sub_id])->get('subchild');		
	        		  $query_subchild->result();
	        		  $subcategories[]=array('sucat'=>$sub_cat,'child'=>$query_subchild->result());
	        		}

	        		$categoires[]=array('category'=>$category,'subcategories'=>$subcategories);

	        	}

	        	return $categoires;
	        	            
	        } else {
	            return FALSE;
	    }
	 } 


	 public function home_category_list(){
		$query=$this->db->get('category',4,0);
		return $query->result();
	}


	public function home_subcategory_list(){
		$query=$this->db->get('subcategory',4,0);
		return $query->result();
	}

	public function getProductsByCategory($id){
		$query=$this->db->where('pro_category_id',$id)->get('product');
		return $query->result();
	}

	public function getProductsBySubCategory($id){
		$query=$this->db->where('pro_sub_category',$id)->get('product');
		return $query->result();
	}

	public function getProductsBySubChildCategory($id){
		$query=$this->db->where('pro_child',$id)->get('product');
		return $query->result();
	}


	public function getcateDetails($table,$where){

		$query=$this->db->where($where)->get($table);
		return $query->row();


	}



	
	/*public function validateLogin($EmailId, $Password) {
        $q = $this->db->where(['email' => $EmailId, 'password' => $Password])->get('tbl_users');
        if ($q->num_rows()) {
        	return $q->row();             
        } else {
            return FALSE;
        }
    }

	public function school_list($status){

		$query=$this->db->where(['status' => $status])->order_by("school_name", "asc")->get('tbl_school');
		return $query->result();
	}


	public  function recent_view_list($status){

		$data['tbl_recently_view.ip']= $this->input->ip_address();
		$data['date']=date('Y-m-d');
		$query=$this->db->select('tbl_school.*')->where($data)->order_by("tbl_recently_view.id", "desc")->join('tbl_recently_view','tbl_recently_view.school_id=tbl_school.id')->get('tbl_school');		
		//$query=$this->db->where(['status' => $status])->order_by("school_name", "asc")->get('tbl_school');
		return $query->result();

	}

	public function near_school_list($status){
		//$interface_to_detect = 'wlan0';
		//$ip = explode(' ',explode(':',explode('inet addr',explode($interface_to_detect,trim(`ifconfig`))[1])[1])[1])[0];	
		$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');
		$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
		$details->city=$_COOKIE['city'];
		$query=$this->db->where(['status' => $status,'city'=>$details->city ? $details->city:'New Delhi'])->like('keywords',$details->city)->order_by("school_name", "asc")->get('tbl_school');
		
		return $query->result();
	}



	public function search_school_list($city){

		$query=$this->db->where('city',$city)->order_by("school_name", "asc")->get('tbl_school');
		return $query->result();
	}

	public function searchSchoolByKeywords($city){

		$query=$this->db->like('keywords',$city)->order_by("school_name", "asc")->get('tbl_school');
		return $query->result();
	}

	public function grade_school_list($grade){

		$query=$this->db->where(['grade' => $grade])->order_by("school_name", "asc")->get('tbl_school');
		return $query->result();
	}

	public function school_detail($id){

		$query=$this->db->where(['id' => $id])->order_by("school_name", "asc")->get('tbl_school');
		return $query->row();
	}

	public function gallery_detail($id){

		$query=$this->db->where(['school_id' => $id])->get('tbl_gallery');
		return $query->result();
	}

	public function sports($id){

		$query=$this->db->select('GROUP_CONCAT(distinct sport_name ) as `sport_name` ')->where(['school_id' => $id])->get('tbl_sports');
		return $query->row();
	}

	public function picnic_images($id){

		$query=$this->db->where(['school_id' => $id])->get('tbl_picnic_images');
		return $query->result();
	}

	public function comments($id){

		$query=$this->db->where(['school_id' => $id])->order_by("id", "DESC")->get('tbl_comments');
		return $query->result();
	}

	

	public function basic_details($id){

		$query=$this->db->where(['id' => $id])->get('tbl_basic');
		return $query->row();
	}

	public function state_list(){
		$query=$this->db->distinct()->select('state')->get('states');
		return $query->result();
		        
	}
	public function city_list($state){
	  $query= $this->db->distinct()->select('city')->where('state', $state)->get('states');
	  return $query->result();
		        
	}

	public function streams_list(){

		$query=$this->db->get('tbl_streams');
		return $query->result();
	}

	public function coed_list(){

		$query=$this->db->get('tbl_coed_status');
		return $query->result();
	}

	public function grades_list(){

		$query=$this->db->get('tbl_grades');
		return $query->result();
	}


	public function type_list(){

		$query=$this->db->get('tbl_type');
		return $query->result();
	}

	function varificationString($value){
	    $this->db->select("*")->from("tbl_users");
	    $this->db->where("verification_code",$value);
	    $query=$this->db->get();
	    if($query->num_rows() == 1){
	     return $query->row_array();
	    }
	    else{
	          return $query->row_array();
	    }
	}*/


}	