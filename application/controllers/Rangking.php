<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rangking extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
	//	$this->load->model('MRangking', 'm_rangking');
	//	$this->load->model('MRangking', 'm_atribut');
	}

	public function index()
	{
	//	$data = $this->m_rangking->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('rangking/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'rangking/indexjs']);
	}

	public function create()
	{
		if (!empty($_POST)) {
			$this->m_rangking->insert_entry();
			redirect('rangking');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('rangking/create');
		$this->load->view('layout/footer', ['js' => 'rangking/createjs']);
	}

	public function update($id)
	{
		if (!empty($_POST)) {
			$this->m_rangking->update_entry();
			redirect('rangking');
		}

		$data = $this->m_rangking->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('rangking/update', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'rangking/updatejs']);
	}

	public function delete($id)
	{
		$this->m_rangking->delete_entry($id);
		redirect('rangking');
	}

	public function view_saw()
	{
		$data = $this->m_rangking->get_entries();
		$atribut = $this->m_atribut->get_entries();

		$c = [];
		$perhitungan_normalisasi = [];
		$perhitungan_bobot = [];
		$nilai_saw = [];

		foreach ($data as $d) {
			foreach ($atribut as $idx_k => $k) {
				// $jenis = 'c' . ($idx_k + 1);
				$jenis = strtolower($k->atribut);
				${$jenis}[] = $d->{$jenis};
			}
		}

		foreach ($atribut as $idx_k => $k) {
			$jenis = strtolower($k->atribut);
			if ($k->tipe == 'benefit') {
				$c[$idx_k] = max(${$jenis});
			} else {
				$c[$idx_k] = min(${$jenis});
			}
		}

		foreach ($data as $idx_d => $d) {
			$perhitungan_normalisasi[$idx_d]['nama'] = $d->nama;
			foreach ($atribut as $idx_k => $k) {
				$jenis = strtolower($k->atribut);
				${$jenis}[] = $d->{$jenis};

				if ($k->tipe == 'benefit') {
					$perhitungan_normalisasi[$idx_d][$jenis] = round($d->{$jenis} / $c[$idx_k], 2);
				} else {
					$perhitungan_normalisasi[$idx_d][$jenis] = round($c[$idx_k] / $d->{$jenis}, 2);
				}
			}
		}

		foreach ($perhitungan_normalisasi as $idx_d => $d) {
			$perhitungan_bobot[$idx_d]['nama'] = $d['nama'];
			$total = 0;
			foreach ($atribut as $idx_k => $k) {
				$jenis = strtolower($k->atribut);
				$hasil = round($d[$jenis] * $k->bobot, 2);
				$perhitungan_bobot[$idx_d][$jenis] = $hasil;
				$total += $hasil;
			}
			$perhitungan_bobot[$idx_d]['total'] = $total;
			$nilai_saw[] = $total;
		}

		$i = 0;
		foreach ($nilai_saw as $d) {
			$max = max($nilai_saw);
			$keys = array_search($max, $nilai_saw);
			unset($nilai_saw[$keys]);
			$i++;
			$perhitungan_bobot[$keys]['rank'] = $i;
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('rangking/view_saw', ['perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot]);
		$this->load->view('layout/footer', ['js' => 'rangking/view_sawjs']);
	}
}
