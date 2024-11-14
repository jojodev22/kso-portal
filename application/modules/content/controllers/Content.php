<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
        $this->form_validation->set_message('required', '%s harus diisi');

		$this->load->model(array(
			'MainModel',
			'QueryModel'
		));
	}

	private function _upload_file()
	{
		// Konfigurasi upload
        $config['upload_path'] = './upload/'; // Tentukan lokasi penyimpanan file
        $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf|docx'; // Tentukan tipe file yang diizinkan
        $config['max_size'] = 2048; // Ukuran maksimal file dalam KB (2MB)
		$config['overwrite']  = true;

        $this->upload->initialize($config);

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
		
		$this->form_validation->set_rules('id_category', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('name', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		//$this->form_validation->set_rules('thumbnail', 'Thumbnail', 'required');

		if($this->form_validation->run() == false) {
			template_view('create', $data);
		} else {
			$input = $this->input->post(null, true);
			$input['id_category'] = $input['id_category'];
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['updated_at'] = date('Y-m-d H:i:s');
			
			// Proses upload
			$this->_upload_file();
			if ($this->upload->do_upload('thumbnail')) {
				// Jika berhasil upload
				$data = $this->upload->data();
				$input['thumbnail'] = $data['file_name'];
				
			} else {
				// Jika gagal upload
				echo "Upload gagal! <br>";
				echo $this->upload->display_errors();
			}
			
			$this->MainModel->insert('content', $input);
			
			redirect('content');

		}
	}

	public function update($id)
	{
		
		var_dump($id);die;
		$id_content = encode_php_tags($contentId);
		$data['title'] = "Edit Content";
		$data['content'] = $this->MainModel->get_where('content', ['id' => $contentId]);


		$data['kategori'] = $this->MainModel->get('category');

		// rules validation
		$this->form_validation->set_rules('name', 'Nama Content', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('nm_kategori', 'Kategori Content', 'required');

		if($this->form_validation->run() == false) {
			template_view('update', $data);
		} else {
			$input = $this->input->post(null, true);
			$this->MainModel->update('content', $input, ['id' => $id_content]);

			redirect('content');
		}

	}

}
