<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Login extends MX_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{

		$datos['dt'] = array(
			'static' => BASE_STATICS, 
			'title' => 'E.T - ESPECIAL ',
			// 'navigate' => array(	
			// 	array('modulo' => 'Directorio1', 'direc' => 'empresas'),
			// 	array('modulo' => 'Usuarios', 'direc' => 'home'),
			// ),
		);
		
		$datos['page'] = 'form_login';
		$datos['dt_page'] = array(
			'url_login' => BASE_URL . 'login',
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $datos);
	}

	
}
