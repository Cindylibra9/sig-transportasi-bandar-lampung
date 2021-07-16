<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamp extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Loc_Model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['lokasi'] = $this->Loc_Model->getloc();
		$this->load->view('templates/head');
		$this->load->view('pages/index', $data);
		$this->load->view('templates/foot', $data);
	}
	public function map2()
	{
		$data['lokasi'] = $this->Loc_Model->getloc();
		$this->load->view('templates/head');
		$this->load->view('pages/index', $data);
		$this->load->view('templates/foot2', $data);
	}
	public function form()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('lat', 'lat', 'required');
		$this->form_validation->set_rules('long', 'long', 'required');


		if ($this->form_validation->run() == false) {
			$this->load->view('templates/head');
			$this->load->view('pages/form');
			$this->load->view('templates/footn');
		} else {
			$this->Loc_Model->tambahDatalokasi();
			redirect('Tamp/form');
		}
	}
}
