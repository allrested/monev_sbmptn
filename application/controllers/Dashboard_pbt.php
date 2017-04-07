<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pbt extends CI_Controller {

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
    
 	  $this->load->library('session');
   if($this->session->userdata('logged_admin'))
   {
     $session_data = $this->session->userdata('logged_admin');
     $this->load->model('M_dashboard');
     $this->load->model('M_baru');
     $data = array(
      'nama' => $session_data['nama'],
     	'kode' => $session_data['kode'],
     	'view' =>'dashboard_pbt',
     	'sudahupdate' => $this->M_dashboard->sudahupdate()->result_array(),
     	'belumupdate' => $this->M_dashboard->belumupdate()->result_array(),
     	'tott1' => $this->M_dashboard->belumupdate()->result_array(),
      'peserta' => $this->M_baru->grapik_peserta()->result_array(),
      'penanggung_jawab' => $this->M_baru->grapik_penanggung_jawab()->result_array(),
      'menu_active' => 'Dashboard_pbt',

     	);
     $this->load->view('template/v_template', $data);
   }
   elseif($this->session->userdata('logged_in'))
   {
    $data = array('menu_active' => 'Dashboard_pbt', );
     redirect('Input','refresh',$data);
   }
   else
    redirect('Login');
 }

 public function logout()
 {
 	$this->load->library('session');
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Login', 'refresh');
 }
}


