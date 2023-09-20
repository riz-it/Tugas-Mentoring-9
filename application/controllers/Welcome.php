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
		$this->load->library('pdf');
		$this->load->model('UserModel');
		ini_set('memory_limit', '1024M');
	}


	public function index()
	{
		$data = [
			'users' => $this->UserModel->findAll(),
		];
		$this->load->view('welcome_message', $data);
	}

	public function pdf()
	{
		$path = base_url('public/assets/logo/logo-vertical.png');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$data = [
			'pathImage' => $base64,
			'address' => 'Jl. Joyoagung No. 11, Kelurahan Dinoyo, Kota Malang',
			'company' => 'PT. Arkatama Multi Solusindo',
			'title' => 'SURAT KETERANGAN IZIN KERJA',
			'phone' => '087721015398',
			'mail' => 'arkatamalang@co.id',
		];

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "letterHead.pdf";
		$this->pdf->load_view('component/pdf/letterHead', $data);
	}

	public function generateIdCard($id)
	{

		$user = $this->UserModel->find($id);

		$path = base_url('public/assets/uploads/' . $user->photo);
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$data = [
			'pathImage' => $base64,
			'name' => $user->name,
			'date_birth' => $user->date_birth,
			'address' => $user->address,
			'place_of_birth' => $user->place_of_birth,
			'province' => 'Provinsi Jawa Timur',
			'city' => 'Kota Malang',
		];
		$this->pdf->setPaper([0, 0, 640, 382], 'custom');
		$this->pdf->filename = $user->name . "-id.pdf";
		$this->pdf->load_view('component/pdf/cardId', $data);
	}
}
