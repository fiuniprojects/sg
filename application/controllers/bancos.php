<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bancos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$menu 		= $this->load->view('menu', false, true);
		$bancos 	= false;
		$datos 		= array(
			'bancos'	=> $bancos,
		);
		
		$detalles 	= $this->load->view('bancos/detalles', $datos, true);
		$datos 		= array(
			'detalles'	=> $detalles,
		);
		$cabecera 	= $this->load->view('bancos/cabecera', $datos, true);

		$datos 		= array(
			'menu'		=> $menu,
			'cabecera'	=> $cabecera,
		);
		$this->load->view('principal', $datos, false);
	}
}
