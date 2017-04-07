<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('Login');
	}
	public function check_database(){
	$this->load->library('session');
  $username = $this->input->post('username');
  $password = $this->input->post('password');
 	$this->load->model('M_user');
   $result = $this->M_user->login($username, $password);
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'kode' => $row->kode,
         'password' => $row->password,
         'nama' => $row->nama
       );
     }
     if($sess_array['nama']=='ADMINISTRATOR')
     {
      $this->session->set_userdata('logged_admin', $sess_array);
      $this->session->set_flashdata('msg', 'Berhasil Login');
      redirect('Welcome', 'refresh');
     }
     else
      $this->session->set_userdata('logged_in', $sess_array);
      $this->session->set_flashdata('msg', 'Berhasil Login');
      redirect('input', 'refresh');
   }
   else
   {
     $this->session->set_flashdata('msg', "<p class='alert alert-danger'>Invalid username or password</p>");
     redirect ('login','refresh');
   }
}
}
