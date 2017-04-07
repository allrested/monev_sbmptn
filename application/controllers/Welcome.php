<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
     $data = array(
      'nama' => $session_data['nama'],
      'kode' => $session_data['kode'],
      'view' =>'dashboard',
      'sudahupdate' => $this->M_dashboard->sudahupdate()->result_array(),
      'belumupdate' => $this->M_dashboard->belumupdate()->result_array(),
      'tott1' => $this->M_dashboard->belumupdate()->result_array(),
      'jumtott1' => $this->M_dashboard->tott1()->result_array(),
      'tott2tidakjelaskepsek' => $this->M_dashboard->tott2tidakjelaskepsek()->result_array(),
      'tott2kurangkepsek' => $this->M_dashboard->tott2kurangkepsek()->result_array(),
      'tott2cukupkepsek' => $this->M_dashboard->tott2cukupkepsek()->result_array(),
      'tott2jelaskepsek' => $this->M_dashboard->tott2jelaskepsek()->result_array(),
      'tott2sangatjelaskepsek' => $this->M_dashboard->tott2sangatjelaskepsek()->result_array(),
      'tott2tidakjelasgurubk' => $this->M_dashboard->tott2tidakjelasgurubk()->result_array(),
      'tott2kuranggurubk' => $this->M_dashboard->tott2kuranggurubk()->result_array(),
      'tott2cukupgurubk' => $this->M_dashboard->tott2cukupgurubk()->result_array(),
      'tott2jelasgurubk' => $this->M_dashboard->tott2jelasgurubk()->result_array(),
      'tott2sangatjelasgurubk' => $this->M_dashboard->tott2sangatjelasgurubk()->result_array(),
      'tott2tidakjelassiswa' => $this->M_dashboard->tott2tidakjelassiswa()->result_array(),
      'tott2kurangsiswa' => $this->M_dashboard->tott2kurangsiswa()->result_array(),
      'tott2cukupsiswa' => $this->M_dashboard->tott2cukupsiswa()->result_array(),
      'tott2jelassiswa' => $this->M_dashboard->tott2jelassiswa()->result_array(),
      'tott2sangatjelassiswa' => $this->M_dashboard->tott2sangatjelassiswa()->result_array(),
      'tott2tidakjelasortu' => $this->M_dashboard->tott2tidakjelasortu()->result_array(),
      'tott2kurangortu' => $this->M_dashboard->tott2kurangortu()->result_array(),
      'tott2cukuportu' => $this->M_dashboard->tott2cukuportu()->result_array(),
      'tott2jelasortu' => $this->M_dashboard->tott2jelasortu()->result_array(),
      'tott2sangatjelasortu' => $this->M_dashboard->tott2sangatjelasortu()->result_array(),
      'totadahelpdesk' => $this->M_dashboard->totadahelpdesk()->result_array(),
      'tottidakadahelpdesk' => $this->M_dashboard->tottidakadahelpdesk()->result_array(),
      'totadatelpon' => $this->M_dashboard->totadatelpon()->result_array(),
      'tottidakadatelpon' => $this->M_dashboard->tottidakadatelpon()->result_array(),
      'totadasms' => $this->M_dashboard->totadasms()->result_array(),
      'tottidakadasms' => $this->M_dashboard->tottidakadasms()->result_array(),
      'totadatwitter' => $this->M_dashboard->totadatwitter()->result_array(),
      'tottidakadatwitter' => $this->M_dashboard->tottidakadatwitter()->result_array(),
      'totadafb' => $this->M_dashboard->totadafb()->result_array(),
      'tottidakadafb' => $this->M_dashboard->tottidakadafb()->result_array(),
      'isi' => $this->M_dashboard->isi()->result_array(),
      'menu_active' => 'Dashboard_humas'



      );
     $this->load->view('template/v_template', $data);
   }
   else{
    $data = array('menu_active' => 'Dashboard_pbt', );
     redirect('Input',$data);
   }
   
 }

 public function lihat($user)
 {
  if($this->session->userdata('logged_admin'))
   {
  $this->load->model('M_user');
  $session_data = $this->session->userdata('logged_admin');
     $this->load->model('M_dashboard');
     $data = array(
      'nama' => $session_data['nama'],
      'kode' => $session_data['kode'],
          'view' => 'v_lihat',
          'get1'=>$this->M_user->get1($user)->result_array(),
          'get2'=>$this->M_user->get2($user)->result_array(),
          'get3'=>$this->M_user->get3($user)->result_array(),
          'get4'=>$this->M_user->get4($user)->result_array(),
          'get5'=>$this->M_user->get5($user)->result_array(),
          'getporto'=>$this->M_user->getporto($user)->result_array(),
          'getmasukan'=>$this->M_user->getmasuk($user)->result_array(),
          'getdaftar'=>$this->M_user->getdaftar($user)->result_array(),
          'getfile' => $this->M_user->getfile($user)->result_array(),
           );
  $this->load->view('template/v_template',$data);
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
