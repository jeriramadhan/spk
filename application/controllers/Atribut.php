<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atribut extends CI_Controller
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MAtribut', 'm_atribut');
	}

	public function index()
	{
		$data = $this->m_atribut->get_entries();

		if (!empty($_POST)) {
			foreach ($data as $i => $d) {
				$this->m_atribut->update_entry($d->id, $_POST['c' . ($i + 1)]);
			}
			redirect('atribut');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('atribut/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'atribut/indexjs']);
	}
	 public function editAtribut($id){
		//  $id['id'] = $this->input->post('id');
		 $data = array(
			 'keterangan' => $this->input->post("atribut")
		 );
		 $this->m_atribut->edit($data,$id );
	 }

}
