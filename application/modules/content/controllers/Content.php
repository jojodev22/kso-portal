<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
        $this->form_validation->set_message('required', '%s harus diisi');

		$this->load->model(array(
			'MainModel',
			'QueryModel'
		));
	}

	public function index()
	{
		$data['title'] = 'Content';
		$data['content'] = $this->QueryModel->getContentToCategory();

		template_view('index', $data);

	}

	public function add()
	{
		$data['title'] = "Tambah Content";
		$data['kategori'] = $this->MainModel->get('category');
		
		$this->form_validation->set_rules('category_id', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('name', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');

		if($this->form_validation->run() == false) {
			template_view('create', $data);
		} else {

			$input = $this->input->post(null, true);
			$input['category_id'] = $input['category_id'];
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['updated_at'] = date('Y-m-d H:i:s');
		
			$this->MainModel->insert('content', $input);
			

			redirect('content');

		}
	}

}
