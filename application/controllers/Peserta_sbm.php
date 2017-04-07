<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_sbm extends CI_Controller {

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
		$cek = $this->M_baru->checkupdate_peserta();
			if ($cek){
				$data = array(
			'view' => 'peserta_sbm/v_sudah',
			'get' => $this->M_baru->get_peserta_peruser($session_data['kode'])->result_array(),
			'kode' => $session_data['kode'],
			'menu_active' => 'Peserta_sbm',
			'nama' =>$session_data['nama'], );
			}
			else{

			$data = array(
			'view' => 'peserta_sbm/v_input',
			'menu_active' => 'Peserta_sbm',
			//'cek' => $cek,
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'nama' =>$session_data['nama'], );
			}
			//}
  	 	$this->load->view('template/v_template',$data);
  	 }
  	 else
  	 redirect('login');

	}

	public function insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_baru');
     	$this->M_baru->simpan_peserta($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."peserta_sbm';
    </SCRIPT>");


	}
	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_baru');
     	$this->M_baru->update_peserta($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."Peserta_sbm';
    </SCRIPT>");




	}
}
