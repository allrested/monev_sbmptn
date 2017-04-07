<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."libraries/PHPExcel/PHPExcel.php";

class Excel extends PHPExcel
{
	// private $objPHPExcel;
	//

	private $loadFile;
	private $objPHPExcel;

    public function __construct()
    {
    	parent::__construct();
        $this->_ci = get_instance();

        log_message('debug', 'Template Class Initialized');
    }

    public function loadFile($file)
    {
    	$this->loadFile = $file;
    }

    public function getobjPhpExcel($properties = array())
    {
		/** Error reporting */
		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);
		date_default_timezone_set('Asia/Jakarta');

		define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

		if(isset($this->loadFile))
		{
			//read file from path
			$objPHPExcel = PHPExcel_IOFactory::load($this->loadFile);
		}
		else
		{
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();
		}

		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Creator")
									 ->setLastModifiedBy("Last Modified")
									 ->setTitle("Title")
									 ->setSubject("Subject")
									 ->setDescription("Deskripsi.")
									 ->setKeywords("Keywords")
									 ->setCategory("Category");

		if(isset($properties['creator']))
			$objPHPExcel->getProperties()->setCreator($properties['creator']);
		if(isset($properties['last-modified']))
			$objPHPExcel->getProperties()->setLastModifiedBy($properties['last-modified']);
		if(isset($properties['title']))
			$objPHPExcel->getProperties()->setTitle($properties['title']);
		if(isset($properties['subject']))
			$objPHPExcel->getProperties()->setSubject($properties['subject']);
		if(isset($properties['description']))
			$objPHPExcel->getProperties()->setDescription($properties['description']);
		if(isset($properties['keywords']))
			$objPHPExcel->getProperties()->setKeywords($properties['keywords']);
		if(isset($properties['category']))
			$objPHPExcel->getProperties()->setCategory($properties['category']);

		//	$objPHPExcel->getSecurity()->setLockWindows(true);
		//	$objPHPExcel->getSecurity()->setLockStructure(true);
		//	$objPHPExcel->getSecurity()->setWorkbookPassword("SETWORKBOOKPASSWORD");

		$objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(20);

		$this->objPHPExcel = $objPHPExcel;
		return $objPHPExcel;
    }

	public function create_file_excel($filename)
	{
		// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		header('Content-Disposition: attachment;filename="'.url_title($filename).'.xlsx"');

		header('Cache-Control: max-age=0');

		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// // If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 23 Jul 2015 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');

		exit;
	}

	public function setBorder($range)
	{
		$this->objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$this->objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$this->objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$this->objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
	}

}
