<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('dosen');
    }
	public function index() {
		$data['basis_data'] = $this->dosen->getDosen();
		$this->load->view('tampilan_db', $data);
	}
}
