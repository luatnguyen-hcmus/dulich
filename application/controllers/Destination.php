<?php 
	Class Destination extends MY_Controller{
		function index(){

			$this->db->select('*');
			$this->db->from('catalog', 'id');
			$this->db->join('catalog_image', 'catalog_image.id_catalog = catalog.id');
			$result = $this->db->get();
			$datas = $result->result_array();
			$this->data['listtop'] = $datas;

			$this->data['temp'] = 'site/destination/index';
			$this->load->view('site/layout',$this->data);
		}
}