<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['categories']=$this->common->getCategires();
		$data['home_category_list']=$this->common->home_category_list();
		$data['home_subcategory_list']=$this->common->home_subcategory_list();
		$this->load->view('dashboard/home',$data);
	}

	public  function about()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/about-us',$data);
	}

	public  function who_is_who()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/who_is_who',$data);
	}

	public function login()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/login',$data);
	}


	public function privacyPolicy()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/privacy_policy',$data);
	}


	public function RefundsCancellations()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/RefundsCancellations',$data);
	}

	public function TermsConditions()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/TermsConditions',$data);
	}
	public function elearning()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/elearning',$data);
	}
	public function advantage()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/advantage',$data);
	}
	public function technology()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/technology',$data);
	}
	public function knowledge()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/knowledge',$data);
	}
	public function faq()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/faq',$data);
	}

	public function service_form()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/service_form',$data);
	}

	public function career()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/career',$data);
	}

	public function contact()
	{
		$data['categories']=$this->common->getCategires();
		$this->load->view('dashboard/contact',$data);
	}

	public function category($cat_id=''){
		$data['categories']=$this->common->getCategires();
		$data['product_list']=$this->common->getProductsByCategory($cat_id);
		$where['cat_id']=$cat_id;
		$data['details']=$this->common->getcateDetails('category',$where);
		$this->load->view('product/category',$data);

	}

	public function subcategory($subcategory=''){
		$data['categories']=$this->common->getCategires();
		$data['product_list']=$this->common->getProductsBySubCategory($subcategory);
		$where['sub_id']=$subcategory;
		$data['details']=$this->common->getcateDetails('subcategory',$where);
		$this->load->view('product/subcategory',$data);

	}

	public function subchildcategory($sub_child_category=''){
		$data['categories']=$this->common->getCategires();
		$data['product_list']=$this->common->getProductsBySubChildCategory($sub_child_category);
		$where['id']=$sub_child_category;
		$data['details']=$this->common->getcateDetails('subchild',$where);
		$this->load->view('product/subchildcategory',$data);

	}

	public function product_details($product_id=''){
		$data['categories']=$this->common->getCategires();
		$this->load->view('product/product_details',$data);

	}

	public function add_to_cart($product_id=''){
		$data['categories']=$this->common->getCategires();
		$this->load->view('product/add_cart',$data);

	}

	public function checkout($product_id=''){
		$data['categories']=$this->common->getCategires();
		$this->load->view('product/checkout_view',$data);

	}










}
