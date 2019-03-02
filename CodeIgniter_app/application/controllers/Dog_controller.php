<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dog_controller extends CI_Controller {

	public function index() {
		$this->load->model("dog");
		$breed = $this->dog->breed();
		echo $breed;
	}
}

?>
