<?php 
class M_baru extends CI_Model{

	function catatan_monev()
	{
		$q = $this->db->query('SELECT * FROM petugas_monev left join t_user on petugas_monev.update_id = t_user.kode');
		return $q;
	}
	function grapik_peserta_catatan()
	{
		$this->db->select('*');
		$q = $this->db->get('peserta_sbm');
		return $q;
	}
	function grapik_penanggung_jawab_catatan()
	{
		$this->db->select('*');
		$q = $this->db->get('penanggung_jawab');
		return $q;
	}
	function grapik_peserta()
	{
		$this->db->select('sum(1y) as 1y');
		$this->db->select('sum(1t) as 1t');
		$this->db->select('sum(2y) as 2y');
		$this->db->select('sum(2t) as 2t');
		$this->db->select('sum(3y) as 3y');
		$this->db->select('sum(3t) as 3t');
		$this->db->select('sum(4y) as 4y');
		$this->db->select('sum(4t) as 4t');
		$this->db->select('sum(5y) as 5y');
		$this->db->select('sum(5t) as 5t');
		$this->db->select('sum(6y) as 6y');
		$this->db->select('sum(6t) as 6t');
		$q = $this->db->get('peserta_sbm');
		return $q;
	}
	function grapik_penanggung_jawab()
	{
		$this->db->select('sum(1y) as 1y');
		$this->db->select('sum(1n) as 1n');
		$this->db->select('sum(2y) as 2y');
		$this->db->select('sum(2n) as 2n');
		$this->db->select('sum(3y) as 3y');
		$this->db->select('sum(3n) as 3n');
		$this->db->select('sum(4y) as 4y');
		$this->db->select('sum(4n) as 4n');
		$this->db->select('sum(5y) as 5y');
		$this->db->select('sum(5n) as 5n');
		$this->db->select('sum(6y) as 6y');
		$this->db->select('sum(6n) as 6n');
		$this->db->select('sum(7y) as 7y');
		$this->db->select('sum(7n) as 7n');
		$this->db->select('sum(8y) as 8y');
		$this->db->select('sum(8n) as 8n');
		$this->db->select('sum(9y) as 9y');
		$this->db->select('sum(9n) as 9n');
		$this->db->select('sum(10y) as 10y');
		$this->db->select('sum(10n) as 10n');
		$this->db->select('sum(11y) as 11y');
		$this->db->select('sum(11n) as 11n');
		$this->db->select('sum(12y) as 12y');
		$this->db->select('sum(12n) as 12n');
		$this->db->select('sum(13y) as 13y');
		$this->db->select('sum(13n) as 13n');
		$this->db->select('sum(14y) as 14y');
		$this->db->select('sum(14n) as 14n');
		$this->db->select('sum(15y) as 15y');
		$this->db->select('sum(15n) as 15n');
		$this->db->select('sum(16y) as 16y');
		$this->db->select('sum(16n) as 16n');
		$this->db->select('sum(17y) as 17y');
		$this->db->select('sum(17n) as 17n');
		$this->db->select('sum(18y) as 18y');
		$this->db->select('sum(18n) as 18n');
		$q = $this->db->get('penanggung_jawab');
		return $q;
	}
	function checkupdate_penanggung_jawab()
  { 

    $idsb = $this->session->userdata('logged_in');
    if ($idsb == TRUE)
    {
    $id = $idsb['kode'];
    $query = $this->db->query
         ('SELECT * FROM penanggung_jawab left join t_user on penanggung_jawab.update_id = t_user.kode where t_user.kode = '.$id);
    if($query -> num_rows() > 0)
        {
         return $query->result();
        }     
  }
}

	function checkupdate_peserta()
  		{ 

    $idsb = $this->session->userdata('logged_in');
    if ($idsb == TRUE)
    {
    $id = $idsb['kode'];
    $query = $this->db->query
         ('SELECT * FROM peserta_sbm left join t_user on peserta_sbm.update_id = t_user.kode where t_user.kode = '.$id);
    if($query -> num_rows() > 0)
        {
         return $query->result();
        }
       
    
  	}
  }
	function checkupdate_monev()
  		{ 

    $idsb = $this->session->userdata('logged_in');
    if ($idsb == TRUE)
    {
    $id = $idsb['kode'];
    $query = $this->db->query
         ('SELECT * FROM petugas_monev left join t_user on petugas_monev.update_id = t_user.kode where t_user.kode = '.$id);
    if($query -> num_rows() > 0)
        {
         return $query->result();
        }
       
    
  	}
		}
	function simpan_peserta($user)
	{
		$data = array(
			'update_id' => $user,
			'1y' => $this -> input -> post('1y'),
			'1t' => $this -> input -> post('1t'),
			'2y' => $this -> input -> post('2y'),
			'2t' => $this -> input -> post('2t'),
			'3y' => $this -> input -> post('3y'),
			'3t' => $this -> input -> post('3t'),
			'4y' => $this -> input -> post('4y'),
			'4t' => $this -> input -> post('4t'),
			'5y' => $this -> input -> post('5y'),
			'5t' => $this -> input -> post('5t'),
			'6y' => $this -> input -> post('6y'),
			'6t' => $this -> input -> post('6t'),
			'peserta_sbm_catatan' => $this -> input -> post('catatan')
		);
		$this -> db -> insert ('peserta_sbm',$data);
	}
	function update_peserta($user)
	{
		$data = array(
			'1y' => $this -> input -> post('1y'),
			'1t' => $this -> input -> post('1t'),
			'2y' => $this -> input -> post('2y'),
			'2t' => $this -> input -> post('2t'),
			'3y' => $this -> input -> post('3y'),
			'3t' => $this -> input -> post('3t'),
			'4y' => $this -> input -> post('4y'),
			'4t' => $this -> input -> post('4t'),
			'5y' => $this -> input -> post('5y'),
			'5t' => $this -> input -> post('5t'),
			'6y' => $this -> input -> post('6y'),
			'6t' => $this -> input -> post('6t'),
			'peserta_sbm_catatan' => $this -> input -> post('catatan')
		);
		$this->db->where('update_id',$user);
		$this -> db -> update ('peserta_sbm',$data);	
	}
	function get_peserta_peruser($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('peserta_sbm');
		return $q;
	
	}
	function get_penanggung_jawab_peruser($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('penanggung_jawab');
		return $q;
	}
	function get_monev($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('petugas_monev');
		return $q;
	}
	function simpan_petugas_monev($user)
	{
		$data = array(
					'update_id' => $user,
					'a1' => $this->input->post('a1'),
					'a1t' => $this->input->post('a1t'),
					'a2' => $this->input->post('a2'),
					'a2t' => $this->input->post('a2t'),
					'a3a' => $this->input->post('a3a'),
					'a3at' => $this->input->post('a3at'),
					'a3b' => $this->input->post('a3b'),
					'a3bt' => $this->input->post('a3bt'),
					'a3c' => $this->input->post('a3c'),
					'a3ct' => $this->input->post('a3ct'),
					'a3d' => $this->input->post('a3d'),
					'a3dt' => $this->input->post('a3dt'),
					'a3e' => $this->input->post('a3e'),
					'a3et' => $this->input->post('a3et'),
					'a3f' => $this->input->post('a3f'),
					'a3ft' => $this->input->post('a3ft'),
					'a4' => $this->input->post('a4'),
					'a4t' => $this->input->post('a4t'),
					'a5' => $this->input->post('a5'),
					'a5t' => $this->input->post('a5t'),
					'b1' => $this->input->post('b1'),
					'b1t' => $this->input->post('b1t'),
					'b2' => $this->input->post('b2'),
					'b2t' => $this->input->post('b2t'),
					'b3' => $this->input->post('b3'),
					'b3t' => $this->input->post('b3t'),
					'b4' => $this->input->post('b4'),
					'b4t' => $this->input->post('b4t'),
					'c1' => $this->input->post('c1'),
					'c1t' => $this->input->post('c1t'),
					'c2' => $this->input->post('c2'),
					'c2t' => $this->input->post('c2t'),
					'c3' => $this->input->post('c3'),
					'c3t' => $this->input->post('c3t'),
					'c4' => $this->input->post('c4'),
					'c4t' => $this->input->post('c4t'),
					'c5' => $this->input->post('c5'),
					'c5t' => $this->input->post('c5t'),
					'c6' => $this->input->post('c6'),
					'c6t' => $this->input->post('c6t'),
					'd1' => $this->input->post('d1'),
					'ae1' => $this->input->post('ae1'),
					'ae1t' => $this->input->post('ae1t'),
					'be1' => $this->input->post('be1'),
					'be1t' => $this->input->post('be1t'),
					'ce1' => $this->input->post('ce1'),
					'ce1t' => $this->input->post('ce1t'),
					'de1' => $this->input->post('de1'),
					'de1t' => $this->input->post('de1t'),
					'd1t' => $this->input->post('d1t'),
					'af1' => $this->input->post('af1'),
					'bf1' => $this->input->post('bf1'),
					'cf1' => $this->input->post('cf1'),
					'df1' => $this->input->post('df1'),
					'af2' => $this->input->post('af2'),
					'bf2' => $this->input->post('bf2'),
					'cf2' => $this->input->post('cf2'),
					'df2' => $this->input->post('df2'),
					'aff1' => $this->input->post('aff1'),
					'bff1' => $this->input->post('bff1'),
					'cff1' => $this->input->post('cff1'),
					'dff1' => $this->input->post('dff1'),
					'ff2' => $this->input->post('ff2'),
					'ff3' => $this->input->post('ff3'),
					'g' => $this->input->post('g'),
					);
		$this->db->insert('petugas_monev',$data);
	}
	function update_petugas_monev($user)
	{
		$data = array(
					//'update_id' => $user,
					'a1' => $this->input->post('a1'),
					'a1t' => $this->input->post('a1t'),
					'a2' => $this->input->post('a2'),
					'a2t' => $this->input->post('a2t'),
					'a3a' => $this->input->post('a3a'),
					'a3at' => $this->input->post('a3at'),
					'a3b' => $this->input->post('a3b'),
					'a3bt' => $this->input->post('a3bt'),
					'a3c' => $this->input->post('a3c'),
					'a3ct' => $this->input->post('a3ct'),
					'a3d' => $this->input->post('a3d'),
					'a3dt' => $this->input->post('a3dt'),
					'a3e' => $this->input->post('a3e'),
					'a3et' => $this->input->post('a3et'),
					'a3f' => $this->input->post('a3f'),
					'a3ft' => $this->input->post('a3ft'),
					'a4' => $this->input->post('a4'),
					'a4t' => $this->input->post('a4t'),
					'a5' => $this->input->post('a5'),
					'a5t' => $this->input->post('a5t'),
					'b1' => $this->input->post('b1'),
					'b1t' => $this->input->post('b1t'),
					'b2' => $this->input->post('b2'),
					'b2t' => $this->input->post('b2t'),
					'b3' => $this->input->post('b3'),
					'b3t' => $this->input->post('b3t'),
					'b4' => $this->input->post('b4'),
					'b4t' => $this->input->post('b4t'),
					'c1' => $this->input->post('c1'),
					'c1t' => $this->input->post('c1t'),
					'c2' => $this->input->post('c2'),
					'c2t' => $this->input->post('c2t'),
					'c3' => $this->input->post('c3'),
					'c3t' => $this->input->post('c3t'),
					'c4' => $this->input->post('c4'),
					'c4t' => $this->input->post('c4t'),
					'c5' => $this->input->post('c5'),
					'c5t' => $this->input->post('c5t'),
					'c6' => $this->input->post('c6'),
					'c6t' => $this->input->post('c6t'),
					'd1' => $this->input->post('d1'),
					'ae1' => $this->input->post('ae1'),
					'ae1t' => $this->input->post('ae1t'),
					'be1' => $this->input->post('be1'),
					'be1t' => $this->input->post('be1t'),
					'ce1' => $this->input->post('ce1'),
					'ce1t' => $this->input->post('ce1t'),
					'de1' => $this->input->post('de1'),
					'de1t' => $this->input->post('de1t'),
					'ee1' => $this->input->post('ee1'),
					'eet' => $this->input->post('ee1t'),
					'd1t' => $this->input->post('d1t'),
					'af1' => $this->input->post('af1'),
					'bf1' => $this->input->post('bf1'),
					'cf1' => $this->input->post('cf1'),
					'df1' => $this->input->post('df1'),
					'af2' => $this->input->post('af2'),
					'bf2' => $this->input->post('bf2'),
					'cf2' => $this->input->post('cf2'),
					'df2' => $this->input->post('df2'),
					'aff1' => $this->input->post('aff1'),
					'bff1' => $this->input->post('bff1'),
					'cff1' => $this->input->post('cff1'),
					'dff1' => $this->input->post('dff1'),
					'ff2' => $this->input->post('ff2'),
					'ff3' => $this->input->post('ff3'),
					'g' => $this->input->post('g'),
					);
		$this->db->where('update_id',$user);
		$this->db->update('petugas_monev',$data);
	}
	
	function simpan_penanggung_jawab($user)
	{
		$data = array(
					'update_id' => $user ,
					'1y' => $this->input->post('1y') ,
					
					'ee1' => $this->input->post('ee1'),
					'eet' => $this->input->post('ee1t'),
					'2y' => $this->input->post('2y') ,
					'3y' => $this->input->post('3y') ,
					'4y' => $this->input->post('4y') ,
					'5y' => $this->input->post('5y') ,
					'6y' => $this->input->post('6y') ,
					'7y' => $this->input->post('7y') ,
					'8y' => $this->input->post('8y') ,
					'9y' => $this->input->post('9y') ,
					'10y' => $this->input->post('10y') ,
					'11y' => $this->input->post('11y') ,
					'12y' => $this->input->post('12y') ,
					'13y' => $this->input->post('13y') ,
					'14y' => $this->input->post('14y') ,
					'15y' => $this->input->post('15y') ,
					'16y' => $this->input->post('16y') ,
					'17y' => $this->input->post('17y') ,
					'18y' => $this->input->post('18y') ,
					'1t' => $this->input->post('1t') ,
					'1n' => $this->input->post('1n') ,
					'2t' => $this->input->post('2t') ,
					'2n' => $this->input->post('2n') ,
					'3t' => $this->input->post('3t') ,
					'3n' => $this->input->post('3n') ,
					'4t' => $this->input->post('4t') ,
					'4n' => $this->input->post('4n') ,
					'5t' => $this->input->post('5t') ,
					'5n' => $this->input->post('5n') ,
					'6t' => $this->input->post('6t') ,
					'6n' => $this->input->post('6n') ,
					'7t' => $this->input->post('7t') ,
					'7n' => $this->input->post('7n') ,
					'8t' => $this->input->post('8t') ,
					'8n' => $this->input->post('8n') ,
					'9t' => $this->input->post('9t') ,
					'9n' => $this->input->post('9n') ,
					'10t' => $this->input->post('10t') ,
					'10n' => $this->input->post('10n') ,
					'11t' => $this->input->post('11t') ,
					'11n' => $this->input->post('11n') ,
					'12t' => $this->input->post('12t') ,
					'12n' => $this->input->post('12n') ,
					'13t' => $this->input->post('13t') ,
					'13n' => $this->input->post('13n') ,
					'14t' => $this->input->post('14t') ,
					'14n' => $this->input->post('14n') ,
					'15t' => $this->input->post('15t') ,
					'15n' => $this->input->post('15n') ,
					'16t' => $this->input->post('16t') ,
					'16n' => $this->input->post('16n') ,
					'17t' => $this->input->post('17t') ,
					'17n' => $this->input->post('17n') ,
					'18t' => $this->input->post('18t') ,
					'18n' => $this->input->post('18n') ,
					 );
		$this->db->insert('penanggung_jawab',$data);
	}
	function update_penanggung_jawab($user)
	{
		$data = array(
					'1y' => $this->input->post('1y') ,
					'2y' => $this->input->post('2y') ,
					'3y' => $this->input->post('3y') ,
					'4y' => $this->input->post('4y') ,
					'5y' => $this->input->post('5y') ,
					'6y' => $this->input->post('6y') ,
					'7y' => $this->input->post('7y') ,
					'8y' => $this->input->post('8y') ,
					'9y' => $this->input->post('9y') ,
					'10y' => $this->input->post('10y') ,
					'11y' => $this->input->post('11y') ,
					'12y' => $this->input->post('12y') ,
					'13y' => $this->input->post('13y') ,
					'14y' => $this->input->post('14y') ,
					'15y' => $this->input->post('15y') ,
					'16y' => $this->input->post('16y') ,
					'17y' => $this->input->post('17y') ,
					'18y' => $this->input->post('18y') ,
					'1t' => $this->input->post('1t') ,
					'1n' => $this->input->post('1n') ,
					'2t' => $this->input->post('2t') ,
					'2n' => $this->input->post('2n') ,
					'3t' => $this->input->post('3t') ,
					'3n' => $this->input->post('3n') ,
					'4t' => $this->input->post('4t') ,
					'4n' => $this->input->post('4n') ,
					'5t' => $this->input->post('5t') ,
					'5n' => $this->input->post('5n') ,
					'6t' => $this->input->post('6t') ,
					'6n' => $this->input->post('6n') ,
					'7t' => $this->input->post('7t') ,
					'7n' => $this->input->post('7n') ,
					'8t' => $this->input->post('8t') ,
					'8n' => $this->input->post('8n') ,
					'9t' => $this->input->post('9t') ,
					'9n' => $this->input->post('9n') ,
					'10t' => $this->input->post('10t') ,
					'10n' => $this->input->post('10n') ,
					'11t' => $this->input->post('11t') ,
					'11n' => $this->input->post('11n') ,
					'12t' => $this->input->post('12t') ,
					'12n' => $this->input->post('12n') ,
					'13t' => $this->input->post('13t') ,
					'13n' => $this->input->post('13n') ,
					'14t' => $this->input->post('14t') ,
					'14n' => $this->input->post('14n') ,
					'15t' => $this->input->post('15t') ,
					'15n' => $this->input->post('15n') ,
					'16t' => $this->input->post('16t') ,
					'16n' => $this->input->post('16n') ,
					'17t' => $this->input->post('17t') ,
					'17n' => $this->input->post('17n') ,
					'18t' => $this->input->post('18t') ,
					'18n' => $this->input->post('18n') ,
					 );
		$this->db->where('update_id',$user);
		$this->db->update('penanggung_jawab',$data);
	}

 //monev
	function a1y()
	{
		$q = $this->db->query("select count(a1) as a from petugas_monev where a1 = 1");
		return $q;
	}
	function a1n()
	{
		$q = $this->db->query("select count(a1) as a from petugas_monev where a1 = 0");
		return $q;
	}
	function a2y()
	{
		$q = $this->db->query("select count(a2) as a from petugas_monev where a2 = 1");
		return $q;
	}
	function a2n()
	{
		$q = $this->db->query("select count(a2) as a from petugas_monev where a2 = 0");
		return $q;
	}
	function a3ay()
	{
		$q = $this->db->query("select count(a3a) as a from petugas_monev where a3a = 1");
		return $q;
	}
	function a3an()
	{
		$q = $this->db->query("select count(a3a) as a from petugas_monev where a3a = 0");
		return $q;
	}
	function a3by()
	{
		$q = $this->db->query("select count(a3b) as a from petugas_monev where a3b = 1");
		return $q;
	}
	function a3bn()
	{
		$q = $this->db->query("select count(a3b) as a from petugas_monev where a3b = 0");
		return $q;
	}
	function a3cy()
	{
		$q = $this->db->query("select count(a3c) as a from petugas_monev where a3c = 1");
		return $q;
	}
	function a3cn()
	{
		$q = $this->db->query("select count(a3c) as a from petugas_monev where a3c = 0");
		return $q;
	}
	function a3dy()
	{
		$q = $this->db->query("select count(a3d) as a from petugas_monev where a3d = 1");
		return $q;
	}
	function a3dn()
	{
		$q = $this->db->query("select count(a3d) as a from petugas_monev where a3d = 0");
		return $q;
	}
	function a3ey()
	{
		$q = $this->db->query("select count(a3e) as a from petugas_monev where a3e = 1");
		return $q;
	}
	function a3en()
	{
		$q = $this->db->query("select count(a3e) as a from petugas_monev where a3e = 0");
		return $q;
	}
	function a3fy()
	{
		$q = $this->db->query("select count(a3f) as a from petugas_monev where a3f = 1");
		return $q;
	}
	function a3fn()
	{
		$q = $this->db->query("select count(a3f) as a from petugas_monev where a3f = 0");
		return $q;
	}
	function a4y()
	{
		$q = $this->db->query("select count(a4) as a from petugas_monev where a4 = 1");
		return $q;
	}
	function a4n()
	{
		$q = $this->db->query("select count(a4) as a from petugas_monev where a4 = 0");
		return $q;
	}
	function a5y()
	{
		$q = $this->db->query("select count(a5) as a from petugas_monev where a5 = 1");
		return $q;
	}
	function a5n()
	{
		$q = $this->db->query("select count(a5) as a from petugas_monev where a5 = 0");
		return $q;
	}
	function b1y()
	{
		$q = $this->db->query("select count(b1) as a from petugas_monev where b1 = 1");
		return $q;
	}
	function b1n()
	{
		$q = $this->db->query("select count(b1) as a from petugas_monev where b1 = 0");
		return $q;
	}
	function b2y()
	{
		$q = $this->db->query("select count(b2) as a from petugas_monev where b2 = 1");
		return $q;
	}
	function b2n()
	{
		$q = $this->db->query("select count(b2) as a from petugas_monev where b2 = 0");
		return $q;
	}
	function b3y()
	{
		$q = $this->db->query("select count(b3) as a from petugas_monev where b3 = 1");
		return $q;
	}
	function b3n()
	{
		$q = $this->db->query("select count(b3) as a from petugas_monev where b3 = 0");
		return $q;
	}
	function b4y()
	{
		$q = $this->db->query("select count(b4) as a from petugas_monev where b4 = 1");
		return $q;
	}
	function b4n()
	{
		$q = $this->db->query("select count(b4) as a from petugas_monev where b4 = 0");
		return $q;
	}
	function c1y()
	{
		$q = $this->db->query("select count(c1) as a from petugas_monev where c1 = 1");
		return $q;
	}
	function c1n()
	{
		$q = $this->db->query("select count(c1) as a from petugas_monev where c1 = 0");
		return $q;
	}
	function c2y()
	{
		$q = $this->db->query("select count(c2) as a from petugas_monev where c2 = 1");
		return $q;
	}
	function c2n()
	{
		$q = $this->db->query("select count(c2) as a from petugas_monev where c2 = 0");
		return $q;
	}
	function c3y()
	{
		$q = $this->db->query("select count(c3) as a from petugas_monev where c3 = 1");
		return $q;
	}
	function c3n()
	{
		$q = $this->db->query("select count(c3) as a from petugas_monev where c3 = 0");
		return $q;
	}
	function c4y()
	{
		$q = $this->db->query("select count(c4) as a from petugas_monev where c4 = 1");
		return $q;
	}
	function c4n()
	{
		$q = $this->db->query("select count(c4) as a from petugas_monev where c4 = 0");
		return $q;
	}
	function c5y()
	{
		$q = $this->db->query("select count(c5) as a from petugas_monev where c5 = 1");
		return $q;
	}
	function c5n()
	{
		$q = $this->db->query("select count(c5) as a from petugas_monev where c5 = 0");
		return $q;
	}
	function c6y()
	{
		$q = $this->db->query("select count(c6) as a from petugas_monev where c6 = 1");
		return $q;
	}
	function c6n()
	{
		$q = $this->db->query("select count(c6) as a from petugas_monev where c6 = 0");
		return $q;
	}
	function d1y()
	{
		$q = $this->db->query("select count(d1) as a from petugas_monev where d1 = 1");
		return $q;
	}
	function d1n()
	{
		$q = $this->db->query("select count(d1) as a from petugas_monev where d1 = 0");
		return $q;
	}
	function ae1y()
	{
		$q = $this->db->query("select count(ae1) as a from petugas_monev where ae1 = 1");
		return $q;
	}
	function ae1n()
	{
		$q = $this->db->query("select count(ae1) as a from petugas_monev where ae1 = 0");
		return $q;
	}
	function be1y()
	{
		$q = $this->db->query("select count(be1) as a from petugas_monev where be1 = 1");
		return $q;
	}
	function be1n()
	{
		$q = $this->db->query("select count(be1) as a from petugas_monev where be1 = 0");
		return $q;
	}
	function ce1y()
	{
		$q = $this->db->query("select count(ce1) as a from petugas_monev where ce1 = 1");
		return $q;
	}
	function ce1n()
	{
		$q = $this->db->query("select count(ce1) as a from petugas_monev where ce1 = 0");
		return $q;
	}
	function de1y()
	{
		$q = $this->db->query("select count(de1) as a from petugas_monev where de1 = 1");
		return $q;
	}
	function de1n()
	{
		$q = $this->db->query("select count(de1) as a from petugas_monev where de1 = 0");
		return $q;
	}
	function ee1y()
	{
		$q = $this->db->query("select count(ee1) as a from petugas_monev where ee1 = 1");
		return $q;
	}
	function ee1n()
	{
		$q = $this->db->query("select count(ee1) as a from petugas_monev where ee1 = 0");
		return $q;
	}
	function aff1y()
	{
		$q = $this->db->query("select count(aff1) as a from petugas_monev where aff1 = 1");
		return $q;
	}
	function aff1n()
	{
		$q = $this->db->query("select count(aff1) as a from petugas_monev where aff1 = 0");
		return $q;
	}
	function bff1y()
	{
		$q = $this->db->query("select count(bff1) as a from petugas_monev where bff1 = 1");
		return $q;
	}
	function bff1n()
	{
		$q = $this->db->query("select count(bff1) as a from petugas_monev where bff1 = 0");
		return $q;
	}
	function cff1y()
	{
		$q = $this->db->query("select count(cff1) as a from petugas_monev where cff1 = 1");
		return $q;
	}
	function cff1n()
	{
		$q = $this->db->query("select count(cff1) as a from petugas_monev where cff1 = 0");
		return $q;
	}
	function dff1y()
	{
		$q = $this->db->query("select count(dff1) as a from petugas_monev where dff1 = 1");
		return $q;
	}
	function dff1n()
	{
		$q = $this->db->query("select count(dff1) as a from petugas_monev where dff1 = 0");
		return $q;
	}
	function af1()
	{
		$q = $this->db->query("select sum(af1) as a from petugas_monev");
		return $q;
	}
	function bf1()
	{
		$q = $this->db->query("select sum(bf1) as a from petugas_monev");
		return $q;
	}
	function cf1()
	{
		$q = $this->db->query("select sum(cf1) as a from petugas_monev");
		return $q;
	}
	function df1()
	{
		$q = $this->db->query("select sum(df1) as a from petugas_monev");
		return $q;
	}
	function af2()
	{
		$q = $this->db->query("select sum(af2) as a from petugas_monev");
		return $q;
	}
	function bf2()
	{
		$q = $this->db->query("select sum(bf2) as a from petugas_monev");
		return $q;
	}
	function cf2()
	{
		$q = $this->db->query("select sum(cf2) as a from petugas_monev");
		return $q;
	}
	function df2()
	{
		$q = $this->db->query("select sum(df2) as a from petugas_monev");
		return $q;
	}
 }?>