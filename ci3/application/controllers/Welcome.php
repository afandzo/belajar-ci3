<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
	}

	public function index()
	{
		$recordSiswa = $this->m_siswa->getDataSiswa();
		$DATA = array('data_siswa' => $recordSiswa);
		$this->load->view('beranda', $DATA);
	}

	public function tambah()
	{
		$this->load->view('tambah');
	}

	public function edit($id)
	{
		$recordSiswa = $this->m_siswa->getDataSiswaDetail($id);
		$DATA = array('data_siswa' => $recordSiswa);
		$this->load->view('edit', $DATA);
	}

	public function tambahData()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$kelas = $this->input->post('kelas');
		$no_tlp = $this->input->post('no_tlp');
		$alamat = $this->input->post('alamat');

		$dataInsert = array(
			'nis' => $nis,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'kelas' => $kelas,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat,
		);

		// var_dump($dataInsert);

		$this->m_siswa->insertDataSiswa($dataInsert);
		redirect(base_url('Welcome'));
	}

	public function editData()
	{
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$kelas = $this->input->post('kelas');
		$no_tlp = $this->input->post('no_tlp');
		$alamat = $this->input->post('alamat');

		$dataUpdate = array(
			'nis' => $nis,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'kelas' => $kelas,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat,
		);
		$this->m_siswa->editDataSiswa($dataUpdate, $id);
		redirect(base_url());
	}

	public function deleteData($id)
	{
		$this->m_siswa->deleteDataSiswa($id);
		redirect(base_url());
	}
}
