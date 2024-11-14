<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'MainModel',
			'QueryModel'
		));
	}

	public function index()
	{
		$data['kategori'] = $this->MainModel->get('category');
		$search = $this->input->post('search');

		if(!$search) {
			$data['content'] = $this->MainModel->get('content');
		} else {
			$data['content'] = $this->QueryModel->getContent($search);
		}

		$this->load->view('portal', $data);
	}

}
