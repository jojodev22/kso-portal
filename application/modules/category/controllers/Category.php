<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
        $this->form_validation->set_message('required', '%s harus diisi');
		
		$this->load->model(array(
			'MainModel'
		));
	}

	public function index()
	{
		$data['title'] = 'Category';
		
		$data['category'] = $this->MainModel->get('category');

		template_view('index', $data);

	}

	public function add()
	{

		$data['title'] = "Tambah Kategori";
		
		$this->form_validation->set_rules('name', 'Nama Kategori', 'required');
		if($this->form_validation->run() == false) {
			template_view('create', $data);
		} else {
			$input = $this->input->post(null, true);

			$this->MainModel->insert('category', $input);

			redirect('category');

		}


	}

	public function update($id)
	{
		$id_category = encode_php_tags($id);
		$data['title'] = 'Edit Kategori';
		$data['kategori'] = $this->MainModel->get_where('category', ['id' => $id_category]);

		$this->form_validation->set_rules('name', 'Nama Kategori', 'required');
		if($this->form_validation->run() == false) {
			template_view('update', $data);
		} else {
			$input = $this->input->post(null, true);
			$this->MainModel->update('category', $input, ['id' => $id_category]);

			redirect('category');
		}


	}

	public function delete($id) 
	{
		$id_category = encode_php_tags($id);
		$this->MainModel->delete('category', ['id' => $id_category]);

		redirect('category');
	}

}
