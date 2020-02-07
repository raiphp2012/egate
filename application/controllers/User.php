<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function login()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Useranme','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('message','All fields are required.');
                $this->load->view('users/login');
           }
        else{
          $password=md5($password);
          $data = $this->Common->validateLogin($username,$password);
           if ($data->id > 0) {
            $this->session->set_userdata('user_id', $data->id);
            $this->session->set_userdata('username', $data->first_name);
            $this->session->set_userdata('isLoggedIn', true);
            redirect(base_url().'dashboard');

        } else {
            $this->session->set_flashdata('message', 'Email and password combnation not found.');
            redirect(base_url().'Users');
        }	      		
        }	
		
	}

public function new_register(){

		/*$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
    	$data['contact_no'] = $this->input->post('contact_no');
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('contact_no','Contact No','trim|required|exact_length[10]|numeric');
		    $this->form_validation->set_rules('username','Useranme','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('term','Term','trim|required');
        $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('message','All fields are required.');
                $this->load->view('users/register');
           }
        else{
        	$data['status'] = 'active';
        	$data['role'] = 'None';
        	$data['created_at']=date('Y-m-d H:i:s');
			    $data['modified_at']=date('Y-m-d H:i:s');

          $this->db->where('username', $data['username']);
           $query = $this->db->get('tbl_user');
           if ($query->num_rows() == 0) {
               $this->db->insert('tbl_user',$data);
                $status =($this->db->affected_rows() == 1) ? true : false;
                if($status==true){
                  $this->session->set_flashdata('message','User Added Successfully.');
                }else{
                  $this->session->set_flashdata('message','User Could not Added');
                }
           } else {
               $this->session->set_flashdata('message','User Already  Added');
               redirect(base_url('dashboard/login'));  
           }       		
       		redirect(base_url('dashboard/login'));*/	

        }

	}	









}
