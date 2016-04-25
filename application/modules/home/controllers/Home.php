<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Home extends MX_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$dt['sol'] = utf8_encode('сссссс');
		$this->load->view('home_view', $dt);
	}
}
