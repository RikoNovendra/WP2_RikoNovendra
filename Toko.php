<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('Toko_model');
	}

	public function index()
	{

		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
			'required' => 'Nama Pembeli Harus Diisi'
		]);
		$this->form_validation->set_rules('nohp', 'Nomor HP', 'required', [
			'required' => 'Nomor HP harus Diisi'
		]);
		if ($this->form_validation->run() == FALSE){
			$this->load->view('toko/v_input');
		}	else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nohp' => $this->input->post('nohp'),
				'merk' => $this->input->post('merk'),
				'ukuran' => $this->input->post('ukuran'),
				'harga' => $this->Toko_model->proses($this->input->post('harga'))
			];
			$this->load->view('toko/v_output', $data);
		}
	}
}

?>