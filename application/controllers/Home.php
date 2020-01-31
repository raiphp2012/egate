<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('dashboard/home');
	}

	public  function about()
	{
		$this->load->view('dashboard/about-us');
	}

	public  function who_is_who()
	{
		$this->load->view('dashboard/who_is_who');
	}

	public function login()
	{
		$this->load->view('dashboard/login');
	}


	public function privacyPolicy()
	{
		$this->load->view('dashboard/privacy_policy');
	}


	public function RefundsCancellations()
	{
		$this->load->view('dashboard/RefundsCancellations');
	}

	public function TermsConditions()
	{
		$this->load->view('dashboard/TermsConditions');
	}
	public function elearning()
	{
		$this->load->view('dashboard/elearning');
	}
	public function advantage()
	{
		$this->load->view('dashboard/advantage');
	}
	public function technology()
	{
		$this->load->view('dashboard/technology');
	}
	public function knowledge()
	{
		$this->load->view('dashboard/knowledge');
	}
	public function faq()
	{
		$this->load->view('dashboard/faq');
	}

	public function service_form()
	{
		$this->load->view('dashboard/service_form');
	}

	public function career()
	{
		$this->load->view('dashboard/career');
	}

	public function contact()
	{
		$this->load->view('dashboard/contact');
	}







}
