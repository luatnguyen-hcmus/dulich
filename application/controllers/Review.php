<?php 
	Class Review extends MY_Controller{
		function index(){

			//lay danh sach tin tức
			$this->load->model('review_model');
			$review_list = $this->review_model->get_list();
			$this->data['review_list'] = $review_list;

			$this->data['temp'] = 'site/review/index';
			$this->load->view('site/layout',$this->data);
		}
		function view(){
			//lay danh sach slide
			$this->load->model('slide_model');
			$slide_list = $this->slide_model->get_list();
			$this->data['slide_list'] = $slide_list;

			//lay danh sach tin tức
			$this->load->model('review_model');
			$review_list = $this->review_model->get_list();
			$this->data['review_list'] = $review_list;

			// lay id san pham muon xem
			$id = $this->uri->rsegment(3);
			$review = $this->review_model->get_info($id);
			if(!$review) redirect();
			$this->data['review'] = $review;
			//hien thi ra view
			$this->data['temp'] = 'site/review/view';
			$this->load->view('site/layout', $this->data);
		}
	}