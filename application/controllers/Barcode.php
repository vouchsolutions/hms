<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barcode extends CI_Controller {

	public function index()
	{
		//I'm just using rand() function for data example
		$text = $this->input->get('text');
		// echo $text;
		// exit;
		$this->set_barcode($text);
	}
	
	private function set_barcode($code)
	{
		//load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
		//generate barcode
		Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
	}
	
}