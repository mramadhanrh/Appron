<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {
	function index(){
		$data['view'] = "v_browse";
		$this->load->view("browse", $data);
	}
}