<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_monev extends CI_Controller {

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
	public function index()
	{
			if( $this->session->userdata('logged_admin') || $this->session->userdata('logged_in'))
   {
		 $this->load->model('M_baru');
		 $session_data = $this->session->userdata('logged_in');
		 $cek = $this->M_baru->checkupdate_monev();
			if ($cek){
			$data = array(
			'view' => 'petugas_monev/v_sudah',
			'get' => $this->M_baru->get_monev($session_data['kode'])->result_array(),
			
			'menu_active' => 'Petugas_monev',
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'menu_active' => 'Petugas_monev',
			'nama' =>$session_data['nama'], );
			}else
			{
				$data = array(
			'view' => 'petugas_monev/v_lihat',
			'menu_active' => 'Petugas_monev',
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'menu_active' => 'Petugas_monev',
			'nama' =>$session_data['nama'], );
			}
			//}
  	 	$this->load->view('template/v_template',$data);
  	 }else redirect('login');
	}

	public function insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_baru');
     	$this->M_baru->simpan_petugas_monev($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."Petugas_monev';
    </SCRIPT>");


	}
	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_baru');
     	$this->M_baru->update_petugas_monev($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."Petugas_monev';
    </SCRIPT>");




	}
}
