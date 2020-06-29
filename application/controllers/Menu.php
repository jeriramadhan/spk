<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function index() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/home');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
  }
  
    public function pendaftar() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/home');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
	}
}