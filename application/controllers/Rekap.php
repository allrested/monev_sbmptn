<?php  
class Rekap extends CI_Controller{
public function rekap_peserta()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $data_jadwal3 = $this->M_baru->grapik_peserta()->result_array();
        $data_catatan = $this->M_baru->grapik_peserta_catatan()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Rekap_peserta.xls');
        $objPHPExcel = $this->excel->getobjPhpExcel();
        //$objPHPExcel->setActiveSheetIndex(1);
       
        foreach ($data_jadwal3 as $k_jadwal => $v_jadwal) {
            $jumlah1 = $v_jadwal['1y']+$v_jadwal['1t'];
            $jumlah2 = $v_jadwal['2y']+$v_jadwal['2t'];
            $jumlah3 = $v_jadwal['3y']+$v_jadwal['3t'];
            $jumlah4 = $v_jadwal['4y']+$v_jadwal['4t'];
            $jumlah5 = $v_jadwal['5y']+$v_jadwal['5t'];
            $jumlah6 = $v_jadwal['6y']+$v_jadwal['6t'];
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D6', $v_jadwal['1y'])
                ->setCellValue('D7', $v_jadwal['2y'])
                ->setCellValue('D8', $v_jadwal['3y'])
                ->setCellValue('D9', $v_jadwal['4y'])
                ->setCellValue('D10', $v_jadwal['5y'])
                ->setCellValue('D11', $v_jadwal['6y'])
                ->setCellValue('E6', $v_jadwal['1t'])
                ->setCellValue('E7', $v_jadwal['2t'])
                ->setCellValue('E8', $v_jadwal['3t'])
                ->setCellValue('E9', $v_jadwal['4t'])
                ->setCellValue('E10', $v_jadwal['5t'])
                ->setCellValue('E11', $v_jadwal['6t'])
                ->setCellValue('F6', ($v_jadwal['1y']+$v_jadwal['1t']))
                ->setCellValue('F7', ($v_jadwal['2y']+$v_jadwal['2t']))
                ->setCellValue('F8', ($v_jadwal['3y']+$v_jadwal['3t']))
                ->setCellValue('F9', ($v_jadwal['4y']+$v_jadwal['4t']))
                ->setCellValue('F10', ($v_jadwal['5y']+$v_jadwal['5t']))
                ->setCellValue('F11', ($v_jadwal['6y']+$v_jadwal['6t']))
                ->setCellValue('G6', ($v_jadwal['1y']/$jumlah1*100))
                ->setCellValue('G7', ($v_jadwal['2y']/$jumlah2*100))
                ->setCellValue('G8', ($v_jadwal['3y']/$jumlah3*100))
                ->setCellValue('G9', ($v_jadwal['4y']/$jumlah4*100))
                ->setCellValue('G10', ($v_jadwal['5y']/$jumlah5*100))
                ->setCellValue('G11', ($v_jadwal['6y']/$jumlah6*100))
                ->setCellValue('H6', ($v_jadwal['1t']/$jumlah1*100))
                ->setCellValue('H7', ($v_jadwal['2t']/$jumlah2*100))
                ->setCellValue('H8', ($v_jadwal['3t']/$jumlah3*100))
                ->setCellValue('H9', ($v_jadwal['4t']/$jumlah4*100))
                ->setCellValue('H10', ($v_jadwal['5t']/$jumlah5*100))
                ->setCellValue('H11', ($v_jadwal['6t']/$jumlah6*100))
                ->setCellValue('I6', ($v_jadwal['1y']/$jumlah1*100)+($v_jadwal['1t']/$jumlah1*100))
                ->setCellValue('I7', ($v_jadwal['2y']/$jumlah2*100)+($v_jadwal['2t']/$jumlah2*100))
                ->setCellValue('I8', ($v_jadwal['3y']/$jumlah3*100)+($v_jadwal['3t']/$jumlah3*100))
                ->setCellValue('I9', ($v_jadwal['4y']/$jumlah4*100)+($v_jadwal['4t']/$jumlah4*100))
                ->setCellValue('I10', ($v_jadwal['5y']/$jumlah5*100)+($v_jadwal['5t']/$jumlah5*100))
                ->setCellValue('I11', ($v_jadwal['6y']/$jumlah6*100)+($v_jadwal['6t']/$jumlah6*100))
                ;
        }
        $row = 14;
        $nomor = 1;
        foreach ($data_catatan as $k_catatan => $v_catatan) {
        $objPHPExcel->getActiveSheet()
            ->setCellValue('B'.(++$row), $nomor++)
            ->setCellValue('C'.($row), $v_catatan['peserta_sbm_catatan'])
            ;
        }
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Peserta');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Peserta');
    }
public function rekap_penanggung_jawab()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $data_jadwal3 = $this->M_baru->grapik_penanggung_jawab()->result_array();
        $data_catatan = $this->M_baru->grapik_penanggung_jawab_catatan()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Rekap_penanggung_jawab.xls');
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
            $jumlah11 = $v_jadwal['11y']+$v_jadwal['11n'];
            $jumlah12 = $v_jadwal['12y']+$v_jadwal['12n'];
            $jumlah13 = $v_jadwal['13y']+$v_jadwal['13n'];
            $jumlah14 = $v_jadwal['14y']+$v_jadwal['14n'];
            $jumlah15 = $v_jadwal['15y']+$v_jadwal['15n'];
            $jumlah16 = $v_jadwal['16y']+$v_jadwal['16n'];
            $jumlah17 = $v_jadwal['17y']+$v_jadwal['17n'];
            $jumlah18 = $v_jadwal['18y']+$v_jadwal['18n'];
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
                ->setCellValue('D16', $v_jadwal['11y'])
                ->setCellValue('D17', $v_jadwal['12y'])
                ->setCellValue('D18', $v_jadwal['13y'])
                ->setCellValue('D19', $v_jadwal['14y'])
                ->setCellValue('D20', $v_jadwal['15y'])
                ->setCellValue('D21', $v_jadwal['16y'])
                ->setCellValue('D22', $v_jadwal['17y'])
                ->setCellValue('D23', $v_jadwal['18y'])
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
                ->setCellValue('E16', $v_jadwal['11n'])
                ->setCellValue('E17', $v_jadwal['12n'])
                ->setCellValue('E18', $v_jadwal['13n'])
                ->setCellValue('E19', $v_jadwal['14n'])
                ->setCellValue('E20', $v_jadwal['15n'])
                ->setCellValue('E21', $v_jadwal['16n'])
                ->setCellValue('E22', $v_jadwal['17n'])
                ->setCellValue('E23', $v_jadwal['18n'])
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
                ->setCellValue('F16', ($v_jadwal['11y']+$v_jadwal['11n']))
                ->setCellValue('F17', ($v_jadwal['12y']+$v_jadwal['12n']))
                ->setCellValue('F18', ($v_jadwal['13y']+$v_jadwal['13n']))
                ->setCellValue('F19', ($v_jadwal['14y']+$v_jadwal['14n']))
                ->setCellValue('F20', ($v_jadwal['15y']+$v_jadwal['15n']))
                ->setCellValue('F21', ($v_jadwal['16y']+$v_jadwal['16n']))
                ->setCellValue('F22', ($v_jadwal['17y']+$v_jadwal['17n']))
                ->setCellValue('F23', ($v_jadwal['18y']+$v_jadwal['18n']))
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
                ->setCellValue('G16', ($v_jadwal['11y']/$jumlah11*100))
                ->setCellValue('G17', ($v_jadwal['12y']/$jumlah12*100))
                ->setCellValue('G18', ($v_jadwal['13y']/$jumlah13*100))
                ->setCellValue('G19', ($v_jadwal['14y']/$jumlah14*100))
                ->setCellValue('G20', ($v_jadwal['15y']/$jumlah15*100))
                ->setCellValue('G21', ($v_jadwal['16y']/$jumlah16*100))
                ->setCellValue('G22', ($v_jadwal['17y']/$jumlah17*100))
                ->setCellValue('G23', ($v_jadwal['18y']/$jumlah18*100))
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
                ->setCellValue('H16', ($v_jadwal['11n']/$jumlah11*100))
                ->setCellValue('H17', ($v_jadwal['12n']/$jumlah12*100))
                ->setCellValue('H18', ($v_jadwal['13n']/$jumlah13*100))
                ->setCellValue('H19', ($v_jadwal['14n']/$jumlah14*100))
                ->setCellValue('H20', ($v_jadwal['15n']/$jumlah15*100))
                ->setCellValue('H21', ($v_jadwal['16n']/$jumlah16*100))
                ->setCellValue('H22', ($v_jadwal['17n']/$jumlah17*100))
                ->setCellValue('H23', ($v_jadwal['18n']/$jumlah18*100))
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
                ->setCellValue('I16', ($v_jadwal['11y']/$jumlah11*100)+($v_jadwal['11n']/$jumlah11*100))
                ->setCellValue('I17', ($v_jadwal['12y']/$jumlah12*100)+($v_jadwal['12n']/$jumlah12*100))
                ->setCellValue('I18', ($v_jadwal['13y']/$jumlah13*100)+($v_jadwal['13n']/$jumlah13*100))
                ->setCellValue('I19', ($v_jadwal['14y']/$jumlah14*100)+($v_jadwal['14n']/$jumlah14*100))
                ->setCellValue('I20', ($v_jadwal['15y']/$jumlah15*100)+($v_jadwal['15n']/$jumlah15*100))
                ->setCellValue('I21', ($v_jadwal['16y']/$jumlah16*100)+($v_jadwal['16n']/$jumlah16*100))
                ->setCellValue('I22', ($v_jadwal['17y']/$jumlah17*100)+($v_jadwal['17n']/$jumlah17*100))
                ->setCellValue('I23', ($v_jadwal['18y']/$jumlah18*100)+($v_jadwal['18n']/$jumlah18*100))
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
            ->setCellValue('M'.($row), $v_catatan['11t'])
            ->setCellValue('N'.($row), $v_catatan['12t'])
            ->setCellValue('O'.($row), $v_catatan['13t'])
            ->setCellValue('P'.($row), $v_catatan['14t'])
            ->setCellValue('Q'.($row), $v_catatan['15t'])
            ->setCellValue('R'.($row), $v_catatan['16t'])
            ->setCellValue('S'.($row), $v_catatan['17t'])
            ->setCellValue('T'.($row), $v_catatan['18t'])
            ;
        }
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Penanggung Jawab');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Penanggung Jawab');
    }
public function rekap_monev()
    {
        // √
        ini_set('max_execution_time', 300);
        $this->load->model('M_baru');
        $a1y = $this->M_baru->a1y()->result_array();
        $a1n = $this->M_baru->a1n()->result_array();
        $a2y = $this->M_baru->a2y()->result_array();
        $a2n = $this->M_baru->a2n()->result_array();
        $a3ay = $this->M_baru->a3ay()->result_array();
        $a3an = $this->M_baru->a3an()->result_array();
        $a3by = $this->M_baru->a3ay()->result_array();
        $a3bn = $this->M_baru->a3bn()->result_array();
        $a3cy = $this->M_baru->a3cy()->result_array();
        $a3cn = $this->M_baru->a3cn()->result_array();
        $a3dy = $this->M_baru->a3dy()->result_array();
        $a3dn = $this->M_baru->a3dn()->result_array();
        $a3ey = $this->M_baru->a3ey()->result_array();
        $a3en = $this->M_baru->a3en()->result_array();
        $a3fy = $this->M_baru->a3fy()->result_array();
        $a3fn = $this->M_baru->a3fn()->result_array();
        $a4y = $this->M_baru->a4y()->result_array();
        $a4n = $this->M_baru->a4n()->result_array();
        $a5y = $this->M_baru->a5y()->result_array();
        $a5n = $this->M_baru->a5n()->result_array();
        $b1y = $this->M_baru->b1y()->result_array();
        $b1n = $this->M_baru->b1n()->result_array();
        $b2y = $this->M_baru->b2y()->result_array();
        $b2n = $this->M_baru->b2n()->result_array();
        $b3y = $this->M_baru->b3y()->result_array();
        $b3n = $this->M_baru->b3n()->result_array();
        $b4y = $this->M_baru->b4y()->result_array();
        $b4n = $this->M_baru->b4n()->result_array();
        $c1y = $this->M_baru->c1y()->result_array();
        $c1n = $this->M_baru->c1n()->result_array();
        $c2y = $this->M_baru->c2y()->result_array();
        $c2n = $this->M_baru->c2n()->result_array();
        $c3y = $this->M_baru->c3y()->result_array();
        $c3n = $this->M_baru->c3n()->result_array();
        $c4y = $this->M_baru->c4y()->result_array();
        $c4n = $this->M_baru->c4n()->result_array();
        $c5y = $this->M_baru->c5y()->result_array();
        $c5n = $this->M_baru->c5n()->result_array();
        $c6y = $this->M_baru->c6y()->result_array();
        $c6n = $this->M_baru->c6n()->result_array();
        $d1y = $this->M_baru->d1y()->result_array();
        $d1n = $this->M_baru->d1n()->result_array();
        $ae1y = $this->M_baru->ae1y()->result_array();
        $ae1n = $this->M_baru->ae1n()->result_array();
        $be1y = $this->M_baru->be1y()->result_array();
        $be1n = $this->M_baru->be1n()->result_array();
        $ce1y = $this->M_baru->ce1y()->result_array();
        $ce1n = $this->M_baru->ce1n()->result_array();
        $de1y = $this->M_baru->de1y()->result_array();
        $de1n = $this->M_baru->de1n()->result_array();
        $ee1y = $this->M_baru->ee1y()->result_array();
        $ee1n = $this->M_baru->ee1n()->result_array();
        $aff1y = $this->M_baru->aff1y()->result_array();
        $aff1n = $this->M_baru->aff1n()->result_array();
        $bff1y = $this->M_baru->bff1y()->result_array();
        $bff1n = $this->M_baru->bff1n()->result_array();
        $cff1y = $this->M_baru->cff1y()->result_array();
        $cff1n = $this->M_baru->cff1n()->result_array();
        $dff1y = $this->M_baru->dff1y()->result_array();
        $dff1n = $this->M_baru->dff1n()->result_array();
        $af1 = $this->M_baru->af1()->result_array();
        $bf1 = $this->M_baru->bf1()->result_array();
        $cf1 = $this->M_baru->cf1()->result_array();
        $df1 = $this->M_baru->df1()->result_array();
        $af2 = $this->M_baru->af2()->result_array();
        $bf2 = $this->M_baru->bf2()->result_array();
        $cf2 = $this->M_baru->cf2()->result_array();
        $df2 = $this->M_baru->df2()->result_array();

        $this->load->library(array('Excel' => 'excel'));
        $this->excel->loadFile('assets/format_excel/Inputan_monev.xls');
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
        foreach ($a3fy as $a3sf_y => $a3f_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C11', $a3f_y['a'])
                ;
        }       
        foreach ($a3fn as $as3f_n => $a3f_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D11', $a3f_n['a'])
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
        foreach ($c5y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C27', $c1_y['a'])
                ;
        }       
        foreach ($c5n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D27', $c1_n['a'])
                ;
        }
        foreach ($c6y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C28', $c1_y['a'])
                ;
        }       
        foreach ($c6n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D28', $c1_n['a'])
                ;
        }
        foreach ($d1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C32', $c1_y['a'])
                ;
        }       
        foreach ($d1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D32', $c1_n['a'])
                ;
        }
        foreach ($ae1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C36', $c1_y['a'])
                ;
        }       
        foreach ($ae1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D36', $c1_n['a'])
                ;
        }
        foreach ($be1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C37', $c1_y['a'])
                ;
        }       
        foreach ($be1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D37', $c1_n['a'])
                ;
        }
        foreach ($ce1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C38', $c1_y['a'])
                ;
        }       
        foreach ($ce1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D38', $c1_n['a'])
                ;
        }
        foreach ($de1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C38', $c1_y['a'])
                ;
        }       
        foreach ($de1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D38', $c1_n['a'])
                ;
        }
        foreach ($ee1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C39', $c1_y['a'])
                ;
        }       
        foreach ($ee1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D39', $c1_n['a'])
                ;
        }
        foreach ($aff1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C55', $c1_y['a'])
                ;
        }       
        foreach ($aff1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D55', $c1_n['a'])
                ;
        }
        foreach ($bff1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C56', $c1_y['a'])
                ;
        }       
        foreach ($bff1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D56', $c1_n['a'])
                ;
        }
        foreach ($cff1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C57', $c1_y['a'])
                ;
        }       
        foreach ($cff1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D57', $c1_n['a'])
                ;
        }
        foreach ($dff1y as $c1_y) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C58', $c1_y['a'])
                ;
        }       
        foreach ($dff1n as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('D58', $c1_n['a'])
                ;
        }      
        foreach ($af1 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C44', $c1_n['a'])
                ;
        }      
        foreach ($bf1 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C45', $c1_n['a'])
                ;
        }      
        foreach ($cf1 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C46', $c1_n['a'])
                ;
        }      
        foreach ($df1 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C47', $c1_n['a'])
                ;
        }      
        foreach ($af2 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C49', $c1_n['a'])
                ;
        }      
        foreach ($bf2 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C50', $c1_n['a'])
                ;
        }      
        foreach ($cf2 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C51', $c1_n['a'])
                ;
        }      
        foreach ($df2 as $c1_n) {
            $objPHPExcel->getActiveSheet()
                ->setCellValue('C52', $c1_n['a'])
                ;
        }
         $row = 63;
         $nomor = 1;
         $data_catatan = $this->M_baru->catatan_monev()->result_array();
         foreach ($data_catatan as $k_catatan => $v_catatan) {
         $objPHPExcel->getActiveSheet()
             ->setCellValue('B'.(++$row), $nomor++)
             ->setCellValue('C'.($row), $v_catatan['nama'])
             ->setCellValue('D'.($row), $v_catatan['g'])
             ;
         }
        //$table_range = 'A2:X'.$row;
        //$objPHPExcel->getActiveSheet()->setAutoFilter($table_range);
        $objPHPExcel->getActiveSheet()->setTitle('Inputan Petugas Monev');

        $objPHPExcel->setActiveSheetIndex(0);

        $this->excel->create_file_excel('Inputan Petugas Monev');
    }
}