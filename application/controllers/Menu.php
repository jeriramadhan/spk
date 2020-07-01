<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
				};
		$this->load->model('MPendaftar', 'm_pendaftar');
			}

  public function index() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/home');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
  }
  
    public function pendaftar() {
		$data = $this->m_pendaftar->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/pendaftar', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
	}

	public function createPendaftar()
	{
		if (!empty($_POST)) {
			$this->m_pendaftar->insert_entry();
			redirect('menu/pendaftar');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/creatependaftar');
		$this->load->view('layout/footer', ['js' => 'menu/createjs']);
	}

	public function updatePendaftar($id)
	{
		if (!empty($_POST)) {
			$this->m_pendaftar->update_entry();
			redirect('menu/pendaftar');
		}

		$data = $this->m_pendaftar->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/updatependaftar', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'menu/updatejs']);
	}

	public function deletePendaftar($id)
	{
		$this->m_pendaftar->delete_entry($id);
		redirect('menu/pendaftar');
	}

}