<?php
class Template {
	
	protected $_ci;

	function __construct()
	{
		$this->_ci = &get_instance();
	}
	
	function views($template = "content", $data = null){
		if ($template != null){
			$data['content'] = $this->_ci->load->view($template, $data, true);
			$data['meta'] = $this->_ci->load->view('template/meta', $data, true);
			$data['load'] = $this->_ci->load->view('template/load', $data, true);
			$data['header'] = $this->_ci->load->view('template/header', $data, true);
			$data['footer'] = $this->_ci->load->view('template/footer', $data, true);
			$data['javascipt'] = $this->_ci->load->view('template/js', $data, true);
			echo $data['template'] = $this->_ci->load->view('index', $data, true);
		}
	}
}