<?php 
	Class Traveltip extends MY_Controller{
		function index(){

			//lay danh sach tin tức
			$this->load->model('traveltip_model');
			$traveltip_list = $this->traveltip_model->get_list();
			$this->data['traveltip_list'] = $traveltip_list;

			$this->data['temp'] = 'site/traveltip/index';
			$this->load->view('site/layout',$this->data);
		}
		function view(){
			//lay danh sach slide
			$this->load->model('slide_model');
			$slide_list = $this->slide_model->get_list();
			$this->data['slide_list'] = $slide_list;

			//lay danh sach tin tức
			$this->load->model('traveltip_model');
			$traveltip_list = $this->traveltip_model->get_list();
			$this->data['traveltip_list'] = $traveltip_list;

			// lay id san pham muon xem
			$id = $this->uri->rsegment(3);
			$traveltip = $this->traveltip_model->get_info($id);
			if(!$traveltip) redirect();
			$this->data['traveltip'] = $traveltip;
			//hien thi ra view
			$this->data['temp'] = 'site/traveltip/view';
			$this->load->view('site/layout', $this->data);
		}
	}