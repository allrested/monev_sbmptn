<?php 
class Cbt extends CI_Controller{
	
	public function __construct()
	{
			
		parent::__construct();
		

		$this->load->model('M_cbt');
		$this->load->library('session');
	
	}
	public function index(){
		if($this->session->userdata('logged_admin'))
   		{
   			$this->dashboard_cbt();
   		}

	else redirect('login');

	}
	public function dashboard_cbt()
	{
		 	
	   if($this->session->userdata('logged_admin'))
	   {
	     $session_data = $this->session->userdata('logged_admin');
	     $data = array(
	      'nama' => $session_data['nama'],
	     	'kode' => $session_data['kode'],
	     	'view' =>'CBT/dashboard',
	     	//'sudahupdate' => $this->M_dashboard->sudahupdate()->result_array(),
	     	//'belumupdate' => $this->M_dashboard->belumupdate()->result_array(),
	     	//'tott1' => $this->M_dashboard->belumupdate()->result_array(),
	      'peserta' => $this->M_cbt->grapik_peserta()->result_array(),
	      'penanggung_jawab' => $this->M_cbt->grapik_penanggung_jawab()->result_array(),
	      'menu_active' => 'Dashboard_cbt',

	     	);
	     $this->load->view('template/v_template', $data);
	   }
	   elseif($this->session->userdata('logged_in'))
	   {
	     redirect();
	   
	   }
	   else
	    redirect('Login');
	}
	public function peserta_sbm()
	{
		if( $this->session->userdata('logged_admin') || $this->session->userdata('logged_in'))
   {
		$session_data = $this->session->userdata('logged_in');
		$cek = $this->M_cbt->checkupdate_peserta();
			if ($cek){
				$data = array(
			'view' => 'CBT/peserta_sbm/v_sudah' ,
			'get' => $this->M_cbt->get_peserta_peruser($session_data['kode'])->result_array(),
			'kode' => $session_data['kode'],
			'menu_active' =>'CBT_Peserta_sbm',
			'nama' =>$session_data['nama'], );
			}
			else{

			$data = array(
			'view' => 'CBT/peserta_sbm/v_input',
			'menu_active' => 'CBT_Peserta_sbm',
			//'cek' => $cek,
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'nama' =>$session_data['nama'], );
			}
			//}
  	 	$this->load->view('template/v_template',$data);
  	 }else redirect('login');
		
	}
	public function penanggung_jawab()
	{
		if( $this->session->userdata('logged_admin') || $this->session->userdata('logged_in'))
   {
		$session_data = $this->session->userdata('logged_in');
		$cek = $this->M_cbt->checkupdate_peserta();
			if ($cek){
				$data = array(
			'view' => 'CBT/penanggung_jawab/v_sudah' ,
			'get' => $this->M_cbt->get_penanggung_jawab_peruser($session_data['kode'])->result_array(),
			'kode' => $session_data['kode'],
			'menu_active' =>'CBT_Penanggung_jawab',
			'nama' =>$session_data['nama'], );
			}
			else{

			$data = array(
			'view' => 'CBT/penanggung_jawab/v_input',
			'menu_active' => 'CBT_Penanggung_jawab',
			//'cek' => $cek,
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'nama' =>$session_data['nama'], );
			}
			//}
  	 	$this->load->view('template/v_template',$data);
	}
	else redirect('login');
}
	public function petugas_monev()
	{
		if( $this->session->userdata('logged_admin') || $this->session->userdata('logged_in'))
   {
		$session_data = $this->session->userdata('logged_in');
		$cek = $this->M_cbt->checkupdate_monev();
			if ($cek){
			$data = array(
			'view' => 'CBT/petugas_monev/v_sudah' ,
			'get' => $this->M_cbt->get_monev($session_data['kode'])->result_array(),
			'kode' => $session_data['kode'],
			'menu_active' =>'CBT_Petugas_monev',
			'nama' =>$session_data['nama'], );
			}
			else{

			$data = array(
			'view' => 'CBT/petugas_monev/v_input',
			'menu_active' => 'CBT_Petugas_monev',
			//'cek' => $cek,
			'kode' => $session_data['kode'],
			//'password' => $session_data['password'],
			'nama' =>$session_data['nama'], );
			}
			//}
			$this->load->view('template/v_template',$data);
  	 	
	}
	else redirect('login');
}

	public function peserta_sbm_insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->simpan_peserta($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."CBT/Peserta_sbm';
    </SCRIPT>");

	}
	public function penanggung_jawab_insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->simpan_penanggung_jawab($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."CBT/penanggung_jawab';
    </SCRIPT>");
	}
	public function petugas_monev_insert()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->simpan_petugas_monev($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Input')
    window.location.href='".base_url()."CBT/petugas_monev';
    </SCRIPT>");
	}
	public function peserta_sbm_update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->update_peserta($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."CBT/Peserta_sbm';
    </SCRIPT>");

	}
	public function penanggung_jawab_update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->update_penanggung_jawab($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."CBT/penanggung_jawab';
    </SCRIPT>");
	}
	public function petugas_monev_update()
	{
		$session_data = $this->session->userdata('logged_in');
     	$user = $session_data['kode'];
     	$this->M_cbt->update_petugas_monev($user);
     	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Di Update')
    window.location.href='".base_url()."CBT/petugas_monev';
    </SCRIPT>");
	}
	public function rekap_peserta()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $data_jadwal3 = $this->M_cbt->grapik_peserta()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Rekap_peserta_cbt.xls');
        $objPHPExcel = $this->excel->getobjPhpExcel();
        //$objPHPExcel->setActiveSheetIndex(1);
       
        foreach ($data_jadwal3 as $k_jadwal => $v_jadwal) {
            $jumlah1 = $v_jadwal['1y']+$v_jadwal['1t'];
            $jumlah2 = $v_jadwal['2y']+$v_jadwal['2t'];
            $jumlah3 = $v_jadwal['3y']+$v_jadwal['3t'];
            $jumlah4 = $v_jadwal['4y']+$v_jadwal['4t'];
            $jumlah5 = $v_jadwal['5y']+$v_jadwal['5t'];
            $jumlah6 = $v_jadwal['6y']+$v_jadwal['6t'];
            $jumlah7 = $v_jadwal['7y']+$v_jadwal['7t'];
            $jumlah8 = $v_jadwal['8y']+$v_jadwal['8t'];
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D6', $v_jadwal['1y'])
                ->setCellValue('D7', $v_jadwal['2y'])
                ->setCellValue('D8', $v_jadwal['3y'])
                ->setCellValue('D9', $v_jadwal['4y'])
                ->setCellValue('D10', $v_jadwal['5y'])
                ->setCellValue('D11', $v_jadwal['6y'])
                ->setCellValue('D12', $v_jadwal['7y'])
                ->setCellValue('D13', $v_jadwal['8y'])
                ->setCellValue('E6', $v_jadwal['1t'])
                ->setCellValue('E7', $v_jadwal['2t'])
                ->setCellValue('E8', $v_jadwal['3t'])
                ->setCellValue('E9', $v_jadwal['4t'])
                ->setCellValue('E10', $v_jadwal['5t'])
                ->setCellValue('E11', $v_jadwal['6t'])
                ->setCellValue('E12', $v_jadwal['7t'])
                ->setCellValue('E13', $v_jadwal['8t'])
                ->setCellValue('F6', ($v_jadwal['1y']+$v_jadwal['1t']))
                ->setCellValue('F7', ($v_jadwal['2y']+$v_jadwal['2t']))
                ->setCellValue('F8', ($v_jadwal['3y']+$v_jadwal['3t']))
                ->setCellValue('F9', ($v_jadwal['4y']+$v_jadwal['4t']))
                ->setCellValue('F10', ($v_jadwal['5y']+$v_jadwal['5t']))
                ->setCellValue('F11', ($v_jadwal['6y']+$v_jadwal['6t']))
                ->setCellValue('F12', ($v_jadwal['7y']+$v_jadwal['7t']))
                ->setCellValue('F13', ($v_jadwal['8y']+$v_jadwal['8t']))
                ->setCellValue('G6', ($v_jadwal['1y']/$jumlah1*100))
                ->setCellValue('G7', ($v_jadwal['2y']/$jumlah2*100))
                ->setCellValue('G8', ($v_jadwal['3y']/$jumlah3*100))
                ->setCellValue('G9', ($v_jadwal['4y']/$jumlah4*100))
                ->setCellValue('G10', ($v_jadwal['5y']/$jumlah5*100))
                ->setCellValue('G11', ($v_jadwal['6y']/$jumlah6*100))
                ->setCellValue('G12', ($v_jadwal['7y']/$jumlah7*100))
                ->setCellValue('G13', ($v_jadwal['8y']/$jumlah8*100))
                ->setCellValue('H6', ($v_jadwal['1t']/$jumlah1*100))
                ->setCellValue('H7', ($v_jadwal['2t']/$jumlah2*100))
                ->setCellValue('H8', ($v_jadwal['3t']/$jumlah3*100))
                ->setCellValue('H9', ($v_jadwal['4t']/$jumlah4*100))
                ->setCellValue('H10', ($v_jadwal['5t']/$jumlah5*100))
                ->setCellValue('H11', ($v_jadwal['6t']/$jumlah6*100))
                ->setCellValue('H12', ($v_jadwal['7t']/$jumlah7*100))
                ->setCellValue('H13', ($v_jadwal['8t']/$jumlah8*100))
                ->setCellValue('I6', ($v_jadwal['1y']/$jumlah1*100)+($v_jadwal['1t']/$jumlah1*100))
                ->setCellValue('I7', ($v_jadwal['2y']/$jumlah2*100)+($v_jadwal['2t']/$jumlah2*100))
                ->setCellValue('I8', ($v_jadwal['3y']/$jumlah3*100)+($v_jadwal['3t']/$jumlah3*100))
                ->setCellValue('I9', ($v_jadwal['4y']/$jumlah4*100)+($v_jadwal['4t']/$jumlah4*100))
                ->setCellValue('I10', ($v_jadwal['5y']/$jumlah5*100)+($v_jadwal['5t']/$jumlah5*100))
                ->setCellValue('I11', ($v_jadwal['6y']/$jumlah6*100)+($v_jadwal['6t']/$jumlah6*100))
                ->setCellValue('I12', ($v_jadwal['7y']/$jumlah7*100)+($v_jadwal['7t']/$jumlah7*100))
                ->setCellValue('I13', ($v_jadwal['8y']/$jumlah8*100)+($v_jadwal['8t']/$jumlah8*100))
                ;
        }
       
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Peserta CBT');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Peserta CBT');
    }
    public function rekap_penanggung_jawab()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $data_jadwal3 = $this->M_cbt->grapik_penanggung_jawab()->result_array();
        $data_catatan = $this->M_cbt->grapik_penanggung_jawab_catatan()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Rekap_penanggung_jawab_cbt.xls');
        $objPHPExcel = $this->excel->getobjPhpExcel();
        //$objPHPExcel->setActiveSheetIndex(1);
       
        foreach ($data_jadwal3 as $k_jadwal => $v_jadwal) {
            $jumlah1 = $v_jadwal['1y']+$v_jadwal['1n'];
            $jumlah2 = $v_jadwal['2y']+$v_jadwal['2n'];
            $jumlah3 = $v_jadwal['3y']+$v_jadwal['3n'];
            $jumlah4 = $v_jadwal['4y']+$v_jadwal['4n'];
            $jumlah5 = $v_jadwal['5y']+$v_jadwal['5n'];
            $jumlah6 = $v_jadwal['6y']+$v_jadwal['6n'];
            $jumlah7 = $v_jadwal['7y']+$v_jadwal['7n'];
            $jumlah8 = $v_jadwal['8y']+$v_jadwal['8n'];
            $jumlah9 = $v_jadwal['9y']+$v_jadwal['9n'];
            $jumlah10 = $v_jadwal['10y']+$v_jadwal['10n'];
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D6', $v_jadwal['1y'])
                ->setCellValue('D7', $v_jadwal['2y'])
                ->setCellValue('D8', $v_jadwal['3y'])
                ->setCellValue('D9', $v_jadwal['4y'])
                ->setCellValue('D10', $v_jadwal['5y'])
                ->setCellValue('D11', $v_jadwal['6y'])
                ->setCellValue('D12', $v_jadwal['7y'])
                ->setCellValue('D13', $v_jadwal['8y'])
                ->setCellValue('D14', $v_jadwal['9y'])
                ->setCellValue('D15', $v_jadwal['10y'])
                ->setCellValue('E6', $v_jadwal['1n'])
                ->setCellValue('E7', $v_jadwal['2n'])
                ->setCellValue('E8', $v_jadwal['3n'])
                ->setCellValue('E9', $v_jadwal['4n'])
                ->setCellValue('E10', $v_jadwal['5n'])
                ->setCellValue('E11', $v_jadwal['6n'])
                ->setCellValue('E12', $v_jadwal['7n'])
                ->setCellValue('E13', $v_jadwal['8n'])
                ->setCellValue('E14', $v_jadwal['9n'])
                ->setCellValue('E15', $v_jadwal['10n'])
                ->setCellValue('F6', ($v_jadwal['1y']+$v_jadwal['1n']))
                ->setCellValue('F7', ($v_jadwal['2y']+$v_jadwal['2n']))
                ->setCellValue('F8', ($v_jadwal['3y']+$v_jadwal['3n']))
                ->setCellValue('F9', ($v_jadwal['4y']+$v_jadwal['4n']))
                ->setCellValue('F10', ($v_jadwal['5y']+$v_jadwal['5n']))
                ->setCellValue('F11', ($v_jadwal['6y']+$v_jadwal['6n']))
                ->setCellValue('F12', ($v_jadwal['7y']+$v_jadwal['7n']))
                ->setCellValue('F13', ($v_jadwal['8y']+$v_jadwal['8n']))
                ->setCellValue('F14', ($v_jadwal['9y']+$v_jadwal['9n']))
                ->setCellValue('F15', ($v_jadwal['10y']+$v_jadwal['10n']))
                ->setCellValue('G6', ($v_jadwal['1y']/$jumlah1*100))
                ->setCellValue('G7', ($v_jadwal['2y']/$jumlah2*100))
                ->setCellValue('G8', ($v_jadwal['3y']/$jumlah3*100))
                ->setCellValue('G9', ($v_jadwal['4y']/$jumlah4*100))
                ->setCellValue('G10', ($v_jadwal['5y']/$jumlah5*100))
                ->setCellValue('G11', ($v_jadwal['6y']/$jumlah6*100))
                ->setCellValue('G12', ($v_jadwal['7y']/$jumlah7*100))
                ->setCellValue('G13', ($v_jadwal['8y']/$jumlah8*100))
                ->setCellValue('G14', ($v_jadwal['9y']/$jumlah9*100))
                ->setCellValue('G15', ($v_jadwal['10y']/$jumlah10*100))
                ->setCellValue('H6', ($v_jadwal['1n']/$jumlah1*100))
                ->setCellValue('H7', ($v_jadwal['2n']/$jumlah2*100))
                ->setCellValue('H8', ($v_jadwal['3n']/$jumlah3*100))
                ->setCellValue('H9', ($v_jadwal['4n']/$jumlah4*100))
                ->setCellValue('H10', ($v_jadwal['5n']/$jumlah5*100))
                ->setCellValue('H11', ($v_jadwal['6n']/$jumlah6*100))
                ->setCellValue('H12', ($v_jadwal['7n']/$jumlah7*100))
                ->setCellValue('H13', ($v_jadwal['8n']/$jumlah8*100))
                ->setCellValue('H14', ($v_jadwal['9n']/$jumlah9*100))
                ->setCellValue('H15', ($v_jadwal['10n']/$jumlah10*100))
                ->setCellValue('I6', ($v_jadwal['1y']/$jumlah1*100)+($v_jadwal['1n']/$jumlah1*100))
                ->setCellValue('I7', ($v_jadwal['2y']/$jumlah2*100)+($v_jadwal['2n']/$jumlah2*100))
                ->setCellValue('I8', ($v_jadwal['3y']/$jumlah3*100)+($v_jadwal['3n']/$jumlah3*100))
                ->setCellValue('I9', ($v_jadwal['4y']/$jumlah4*100)+($v_jadwal['4n']/$jumlah4*100))
                ->setCellValue('I10', ($v_jadwal['5y']/$jumlah5*100)+($v_jadwal['5n']/$jumlah5*100))
                ->setCellValue('I11', ($v_jadwal['6y']/$jumlah6*100)+($v_jadwal['6n']/$jumlah6*100))
                ->setCellValue('I12', ($v_jadwal['7y']/$jumlah7*100)+($v_jadwal['7n']/$jumlah7*100))
                ->setCellValue('I13', ($v_jadwal['8y']/$jumlah8*100)+($v_jadwal['8n']/$jumlah8*100))
                ->setCellValue('I14', ($v_jadwal['9y']/$jumlah9*100)+($v_jadwal['9n']/$jumlah9*100))
                ->setCellValue('I15', ($v_jadwal['10y']/$jumlah10*100)+($v_jadwal['10n']/$jumlah10*100))
                ;
        }
        $row = 27;
        $nomor = 1;
        foreach ($data_catatan as $k_catatan => $v_catatan) {
        $objPHPExcel->getActiveSheet()
            ->setCellValue('B'.(++$row), $nomor++)
            ->setCellValue('C'.($row), $v_catatan['1t'])
            ->setCellValue('D'.($row), $v_catatan['2t'])
            ->setCellValue('E'.($row), $v_catatan['3t'])
            ->setCellValue('F'.($row), $v_catatan['4t'])
            ->setCellValue('G'.($row), $v_catatan['5t'])
            ->setCellValue('H'.($row), $v_catatan['6t'])
            ->setCellValue('I'.($row), $v_catatan['7t'])
            ->setCellValue('J'.($row), $v_catatan['8t'])
            ->setCellValue('K'.($row), $v_catatan['9t'])
            ->setCellValue('L'.($row), $v_catatan['10t'])
            ;
        }
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Penanggung Jawab CBT');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Penanggung Jawab CBT');
    }
    public function rekap_monev()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $a1y = $this->M_cbt->a1y()->result_array();
        $a1n = $this->M_cbt->a1n()->result_array();
        $a2y = $this->M_cbt->a2y()->result_array();
        $a2n = $this->M_cbt->a2n()->result_array();
        $a3ay = $this->M_cbt->a3ay()->result_array();
        $a3an = $this->M_cbt->a3an()->result_array();
        $a3by = $this->M_cbt->a3ay()->result_array();
        $a3bn = $this->M_cbt->a3bn()->result_array();
        $a3cy = $this->M_cbt->a3cy()->result_array();
        $a3cn = $this->M_cbt->a3cn()->result_array();
        $a3dy = $this->M_cbt->a3dy()->result_array();
        $a3dn = $this->M_cbt->a3dn()->result_array();
        $a3ey = $this->M_cbt->a3ey()->result_array();
        $a3en = $this->M_cbt->a3en()->result_array();
        $a4y = $this->M_cbt->a4y()->result_array();
        $a4n = $this->M_cbt->a4n()->result_array();
        $a5y = $this->M_cbt->a5y()->result_array();
        $a5n = $this->M_cbt->a5n()->result_array();
        $b1y = $this->M_cbt->b1y()->result_array();
        $b1n = $this->M_cbt->b1n()->result_array();
        $b2y = $this->M_cbt->b2y()->result_array();
        $b2n = $this->M_cbt->b2n()->result_array();
        $b3y = $this->M_cbt->b3y()->result_array();
        $b3n = $this->M_cbt->b3n()->result_array();
        $b4y = $this->M_cbt->b4y()->result_array();
        $b4n = $this->M_cbt->b4n()->result_array();
        $c1y = $this->M_cbt->c1y()->result_array();
        $c1n = $this->M_cbt->c1n()->result_array();
        $c2y = $this->M_cbt->c2y()->result_array();
        $c2n = $this->M_cbt->c2n()->result_array();
        $c3y = $this->M_cbt->c3y()->result_array();
        $c3n = $this->M_cbt->c3n()->result_array();
        $c4y = $this->M_cbt->c4y()->result_array();
        $c4n = $this->M_cbt->c4n()->result_array();
        $d1y = $this->M_cbt->d1y()->result_array();
        $d1n = $this->M_cbt->d1n()->result_array();
        $d2y = $this->M_cbt->d2y()->result_array();
        $d2n = $this->M_cbt->d2n()->result_array();
        $d3y = $this->M_cbt->d3y()->result_array();
        $d3n = $this->M_cbt->d3n()->result_array();
        $d4y = $this->M_cbt->d4y()->result_array();
        $d4n = $this->M_cbt->d4n()->result_array();
        $d5y = $this->M_cbt->d5y()->result_array();
        $d5n = $this->M_cbt->d5n()->result_array();
        $d6y = $this->M_cbt->d6y()->result_array();
        $d6n = $this->M_cbt->d6n()->result_array();
        $d7y = $this->M_cbt->d7y()->result_array();
        $d7n = $this->M_cbt->d7n()->result_array();
        $e1y = $this->M_cbt->e1y()->result_array();
        $e1n = $this->M_cbt->e1n()->result_array();
        $e2y = $this->M_cbt->e2y()->result_array();
        $e2n = $this->M_cbt->e2n()->result_array();
        $e3y = $this->M_cbt->e3y()->result_array();
        $e3n = $this->M_cbt->e3n()->result_array();
        $e4y = $this->M_cbt->e4y()->result_array();
        $e4n = $this->M_cbt->e4n()->result_array();
        $e5y = $this->M_cbt->e5y()->result_array();
        $e5n = $this->M_cbt->e5n()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Inputan_monev_cbt.xls');
        $objPHPExcel = $this->excel->getobjPhpExcel();
        //$objPHPExcel->setActiveSheetIndex(1);
       
        foreach ($a1y as $a1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C3', $a1_y['a'])
                ;
        }       
        foreach ($a1n as $a1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D3', $a1_n['a'])
                ;
        }
        foreach ($a2y as $a2_y ) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C4', $a2_y['a'])
                ;
        }       
        foreach ($a2n as $a2_n ) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D4', $a2_n['a'])
                ;
        }
        foreach ($a3ay as $a3a_y ) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C6', $a3a_y['a'])
                ;
        }       
        foreach ($a3an as $a3a_n ) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D6', $a3a_n['a'])
                ;
        }
        foreach ($a3by as $a3b_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C7', $a3b_y['a'])
                ;
        }       
        foreach ($a3bn as $as3b_n => $a3b_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D7', $a3b_n['a'])
                ;
        }
        foreach ($a3cy as $a3cs_y => $a3c_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C8', $a3c_y['a'])
                ;
        }       
        foreach ($a3cn as $a3sc_n => $a3c_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D8', $a3c_n['a'])
                ;
        }
        foreach ($a3dy as $a3sd_y => $a3d_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C9', $a3d_y['a'])
                ;
        }       
        foreach ($a3dn as $as3d_n => $a3d_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D9', $a3d_n['a'])
                ;
        }
        foreach ($a3ey as $a3se_y => $a3e_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C10', $a3e_y['a'])
                ;
        }       
        foreach ($a3en as $a3es_n => $a3e_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D10', $a3e_n['a'])
                ;
        }
        foreach ($a4y as $as4_y => $a4_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C12', $a4_y['a'])
                ;
        }       
        foreach ($a4n as $a4_sn => $a4_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D12', $a4_n['a'])
                ;
        }
        foreach ($a5y as $a5s_y => $a5_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C13', $a5_y['a'])
                ;
        }       
        foreach ($a5n as $a5s_n => $a5_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D13', $a5_n['a'])
                ;
        }
        foreach ($b1y as $bs1_y => $b1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C16', $b1_y['a'])
                ;
        }       
        foreach ($b1n as $sb1_n => $b1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D16', $b1_n['a'])
                ;
        }
        foreach ($b2y as $bs2_y => $b2_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C17', $b2_y['a'])
                ;
        }       
        foreach ($b2n as $bs2_n => $b2_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D17', $b2_n['a'])
                ;
        }
        foreach ($b3y as $bs3_y => $b3_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C18', $b3_y['a'])
                ;
        }       
        foreach ($b3n as $bs3_n => $b3_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D18', $b3_n['a'])
                ;
        }
        foreach ($b4y as $b4s_y => $b4_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C19', $b4_y['a'])
                ;
        }       
        foreach ($b4n as $b4s_n => $b4_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D19', $b4_n['a'])
                ;
        }
        foreach ($c1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C23', $c1_y['a'])
                ;
        }       
        foreach ($c1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D23', $c1_n['a'])
                ;
        }
        foreach ($c2y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C24', $c1_y['a'])
                ;
        }       
        foreach ($c2n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D24', $c1_n['a'])
                ;
        }
        foreach ($c3y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C25', $c1_y['a'])
                ;
        }       
        foreach ($c3n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D25', $c1_n['a'])
                ;
        }
        foreach ($c4y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C26', $c1_y['a'])
                ;
        }       
        foreach ($c4n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D26', $c1_n['a'])
                ;
        }
        foreach ($d1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C32', $c1_y['a'])
                ;
        }
        foreach ($e1y as $e1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C36', $e1_y['a'])
                ;
        }
        foreach ($e1n as $e1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D36', $e1_n['a'])
                ;
        }
        foreach ($e2y as $e2_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C37', $e2_y['a'])
                ;
        }
        foreach ($e2n as $e2_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D37', $e2_n['a'])
                ;
        }
        foreach ($e3y as $e3_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C38', $e3_y['a'])
                ;
        }
        foreach ($e3n as $e3_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D38', $e3_n['a'])
                ;
        }
        foreach ($e4y as $e4_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C39', $e4_y['a'])
                ;
        }
        foreach ($e4n as $e4_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D39', $e4_n['a'])
                ;
        }
        foreach ($e5y as $e5_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C40', $e5_y['a'])
                ;
        }
        foreach ($e5n as $e5_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D40', $e5_n['a'])
                ;
        }
        foreach ($d1y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C45', $d1_y['a'])
                ;
        }
        foreach ($d1n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D45', $d1_n['a'])
                ;
        }
        foreach ($d2y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C46', $d1_y['a'])
                ;
        }
        foreach ($d2n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D46', $d1_n['a'])
                ;
        }
        foreach ($d3y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C47', $d1_y['a'])
                ;
        }
        foreach ($d3n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D47', $d1_n['a'])
                ;
        }
        foreach ($d4y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C48', $d1_y['a'])
                ;
        }
        foreach ($d4n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D48', $d1_n['a'])
                ;
        }
        foreach ($d5y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C49', $d1_y['a'])
                ;
        }
        foreach ($d5n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D49', $d1_n['a'])
                ;
        }
        foreach ($d6y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C50', $d1_y['a'])
                ;
        }
        foreach ($d6n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D50', $d1_n['a'])
                ;
        }
        foreach ($d7y as $d1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C51', $d1_y['a'])
                ;
        }
        foreach ($d7n as $d1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D51', $d1_n['a'])
                ;
        }
         $row = 63;
         $nomor = 1;
         $data_catatan = $this->M_cbt->catatan_monev()->result_array();
         foreach ($data_catatan as $k_catatan => $v_catatan) {
         $objPHPExcel->getActiveSheet()
             ->setCellValue('B'.(++$row), $nomor++)
             ->setCellValue('C'.($row), $v_catatan['nama'])
             ->setCellValue('D'.($row), $v_catatan['f'])
             ;
         }
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Petugas Monev CBT');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Petugas Monev CBT');
    }


}
?>