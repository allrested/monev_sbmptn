<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

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
		$this->load->model('M_user');
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
  	 	$cek = $this->M_user->checkupdate();
			if ($cek)
			{
				
					$data = array(
					'view' => 'Input/v_sudah',
					'cek' => $cek,
					'kode' => $session_data['kode'],
					'password' => $session_data['password'],
					'nama' =>$session_data['nama'],
					'get1'=>$this->M_user->get1($user)->result_array(),
					'get2'=>$this->M_user->get2($user)->result_array(),
					'get3'=>$this->M_user->get3($user)->result_array(),
					'get4'=>$this->M_user->get4($user)->result_array(),
					'get5'=>$this->M_user->get5($user)->result_array(),
					'getporto'=>$this->M_user->getporto($user)->result_array(),
					'getmasukan'=>$this->M_user->getmasuk($user)->result_array(),
					'getdaftar'=>$this->M_user->getdaftar($user)->result_array(),
					 );
			}
			// jika data belum update
			else {
			$data = array(
			'view' => 'Input/v_input',
			'cek' => $cek,
			'kode' => $session_data['kode'],
			'password' => $session_data['password'],
			'nama' =>$session_data['nama'], );
			}
  	 	$this->load->view('template/v_template',$data);

	}

	public function insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_input');
     	$this->M_input->insert($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."input';
    </SCRIPT>");


	}
	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->load->model('M_input');
     	$this->M_input->update($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."input';
    </SCRIPT>");




	}
}
