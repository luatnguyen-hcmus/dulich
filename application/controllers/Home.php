<?php 
	Class Home extends MY_Controller{
		function index(){
			

			//lay danh sach san tour
			$this->load->model('tour_model');
			$tour_list = $this->tour_model->get_list();
			$this->data['tour_list'] = $tour_list;

			
			// $this->db->select('*');
			// $this->db->from('catalog', 'id');
			// $this->db->join('catalog_image', 'catalog_image.id_catalog = catalog.id');
			// $this->db->limit('5');
			// $result = $this->db->get();
			// $datas = $result->result_array();


			//lay 4 tour moi nhat
			$input = array();
			$input['limit'] = array(20, 0);
			$listtop = $this->tour_model->get_list($input);
			// pre($listtop);
			$this->data['listtop'] = $listtop;



			// lay 4 tour.
			$input = array();
			$input['limit'] = array(4, 0);
			$tour_newest = $this->tour_model->get_list($input);
			$this->data['tour_newest'] = $tour_newest;
			$input = [];

			//lay 4 tour moi nhat
			$input['limit'] = array(3, 3);
			$input['order'] = array('view', 'DESC');
			$tour_more = $this->tour_model->get_list($input);
			$this->data['tour_more'] = $tour_more;


			// //lay 6 tour
			// $input['limit'] = array(6, 6);
			// $input['order'] = array('view', 'DESC');
			// $tour_more6 = $this->tour_model->get_list($input);
			// $this->data['tour_more6'] = $tour_more6;

			// lay 2 tour
			$input['limit'] = array(2, 0);
			$input['order'] = array('RAND()', '');
			$tour_more2 = $this->tour_model->get_list($input);
			$this->data['tour_more2'] = $tour_more2;


			// //lay tat ca cac tour
			// $input['order'] = array('view', 'DESC');
			// $tour_more_all = $this->tour_model->get_list();
			//$this->data['tour_more_all'] = $tour_more_all;


			//lay noi dung cua biên message
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;

			$this->data['temp'] = 'site/home/index';
			$this->load->view('site/layout',$this->data);
		}
	}