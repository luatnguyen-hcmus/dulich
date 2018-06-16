<?php 
	Class Email extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('email_model');
			
		}
		function index(){
			$input = array();
			$list = $this->email_model->get_list($input);
			$this->data['list'] = $list;

			$total = $this->email_model->get_total();
			$this->data['total'] = $total;

			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;
			$this->data['temp'] = 'admin/email/index';
			$this->load->view('admin/main',$this->data);
		}
		function check_username(){
			$username = $this->input->post('name');
			$where = array('email' => $username);
			if($this->email_model->check_exists($where)){
				$this->form_validation->set_message(__FUNCTION__, 'Email Exit');
				return false;
			}
			return true;
		}
		function add(){
			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$this->form_validation->set_rules('name', 'Email', 'required|valid_email|callback_check_username');

				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$email = $this->input->post('status_email');
					if($email){
						$email = $email;

					}
					else{
						$email = 0;
					}
					$data = array(
						'email'     => $name,
						'status' => $email,
					);
					

					if($this->email_model->create($data)){
						$this->session->set_flashdata('message', 'Add data success!');
					}else{
						$this->session->set_flashdata('message', 'Add failed !');
					}
					redirect(admin_url('email'));
				}
			}
			

			$this->data['temp'] = 'admin/email/add';
			$this->load->view('admin/main',$this->data);
		}
		function edit(){
			$id = $this->uri->rsegment('3');
			$id = intval($id);

			$this->load->library('form_validation');
			$this->load->helper('form');

			$info = $this->email_model->get_info($id);

			//pre($info);

			if(!$info){
				$this->session->set_flashdata('message', 'this exit not email !');
				redirect(admin_url('email'));
			}
			$this->data['info'] = $info;

			if($this->input->post()){

				$this->form_validation->set_rules('name', 'Email', 'required');
				
				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$email = $this->input->post('email');
					
					$data = array(
						'email'     => $name,
						'status'    => $email,
					);					

					if($this->email_model->update($id, $data)){
						$this->session->set_flashdata('message', 'Upload data success !');
					}else{
						$this->session->set_flashdata('message', 'Update failed !');
					}
					redirect(admin_url('email'));
				}
				
			}

			
            
			$this->data['temp'] = 'admin/email/edit';
			$this->load->view('admin/main', $this->data);

		}
		function delete(){

			$id = $this->uri->rsegment('3');
			$id = intval($id);
			$info = $this->email_model->get_info($id);

			//pre($info);

			if(!$info){
				$this->session->set_flashdata('message', 'this exit not Email !');
				redirect(admin_url('email'));
			}
			if($this->email_model->delete($id)){
				$this->session->set_flashdata('message', 'Delete success Email have id is '.$id);
			}else{
					$this->session->set_flashdata('message', 'Delete failed !');
			}
			redirect(admin_url('email'));
		}
		
	}