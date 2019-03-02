<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dog_controller extends CI_Controller {

	public function index() {
		$this->load->model("dog");
		$info['dog'] = $this->dog->dog_info();
		$this->load->view("dog", $info);
	}
}

?>
