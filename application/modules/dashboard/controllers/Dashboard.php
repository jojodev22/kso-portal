<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'MainModel'
		));
	}

	public function index()
	{
		$data['title'] = 'Dashboard';

		template_view('dashboard', $data);

	}
}
