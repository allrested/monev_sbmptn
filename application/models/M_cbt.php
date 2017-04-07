<?php 
class M_cbt extends CI_Model{
	function catatan_monev()
	{
		$q = $this->db->query('SELECT * FROM cbt_petugas_monev left join t_user on cbt_petugas_monev.update_id = t_user.kode');
		return $q;
	}
	function get_peserta_peruser($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('cbt_peserta_sbm');
		return $q;
	
	}
	function get_penanggung_jawab_peruser($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('cbt_penanggung_jawab');
		return $q;
	}
	function get_monev($user)
	{
		$this->db->where('update_id',$user);
		$q = $this->db->get('cbt_petugas_monev');
		return $q;
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
			'7y' => $this -> input -> post('7y'),
			'7t' => $this -> input -> post('7t'),
			'8y' => $this -> input -> post('8y'),
			'8t' => $this -> input -> post('8t'),
		);
		$this -> db -> insert ('cbt_peserta_sbm',$data);
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
			'7y' => $this -> input -> post('7y'),
			'7t' => $this -> input -> post('7t'),
			'8y' => $this -> input -> post('8y'),
			'8t' => $this -> input -> post('8t'),
		);
		$this->db->where('update_id',$user);
		$this -> db -> update ('cbt_peserta_sbm',$data);
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
					'd1' => $this->input->post('d1'),
					'd2' => $this->input->post('d2'),
					'd3' => $this->input->post('d3'),
					'd4' => $this->input->post('d4'),
					'd5' => $this->input->post('d5'),
					'd5t' => $this->input->post('d5t'),
					'd6' => $this->input->post('d6'),
					'd6t' => $this->input->post('d6t'),
					'd7' => $this->input->post('d7'),
					'd7t' => $this->input->post('d7t'),
					'd5t' => $this->input->post('d5t'),
					'd3t' => $this->input->post('d3t'),
					'd4t' => $this->input->post('d4t'),
					'd2t' => $this->input->post('d2t'),
					'd1t' => $this->input->post('d1t'),
					'e1' => $this->input->post('e1'),
					'e2' => $this->input->post('e2'),
					'e3' => $this->input->post('e3'),
					'e4' => $this->input->post('e4'),
					'e5' => $this->input->post('e5'),
					'e1t' => $this->input->post('e1t'),
					'e5t' => $this->input->post('e5t'),
					'e3t' => $this->input->post('e3t'),
					'e4t' => $this->input->post('e4t'),
					'e2t' => $this->input->post('e2t'),
					'f' => $this->input->post('f'),
					);
		$this->db->insert('cbt_petugas_monev',$data);
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
					'd1' => $this->input->post('d1'),
					'd2' => $this->input->post('d2'),
					'd3' => $this->input->post('d3'),
					'd4' => $this->input->post('d4'),
					'd5' => $this->input->post('d5'),
					'd5t' => $this->input->post('d5t'),
					'd6' => $this->input->post('d6'),
					'd6t' => $this->input->post('d6t'),
					'd7' => $this->input->post('d7'),
					'd7t' => $this->input->post('d7t'),
					'd5t' => $this->input->post('d5t'),
					'd3t' => $this->input->post('d3t'),
					'd4t' => $this->input->post('d4t'),
					'd2t' => $this->input->post('d2t'),
					'e1' => $this->input->post('e1'),
					'e2' => $this->input->post('e2'),
					'e3' => $this->input->post('e3'),
					'e4' => $this->input->post('e4'),
					'e5' => $this->input->post('e5'),
					'e1t' => $this->input->post('e1t'),
					'e5t' => $this->input->post('e5t'),
					'e3t' => $this->input->post('e3t'),
					'e4t' => $this->input->post('e4t'),
					'e2t' => $this->input->post('e2t'),
					'f' => $this->input->post('f'),
					);
		$this->db->where('update_id',$user);
		$this->db->update('cbt_petugas_monev',$data);
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
					 );

		$this->db->where('update_id',$user);
		$this->db->update('cbt_penanggung_jawab',$data);
	}
	function simpan_penanggung_jawab($user)
	{
		$data = array(
					'update_id' => $user ,
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
					 );
		$this->db->insert('cbt_penanggung_jawab',$data);
	}


	function checkupdate_penanggung_jawab()
  	{ 

	    $idsb = $this->session->userdata('logged_in');
	    if ($idsb == TRUE)
	    {
		    $id = $idsb['kode'];
		    $query = $this->db->query('SELECT * FROM cbt_penanggung_jawab left join t_user on cbt_penanggung_jawab.update_id = t_user.kode where t_user.kode = '.$id);
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
		    $query = $this->db->query('SELECT * FROM cbt_peserta_sbm left join t_user on cbt_peserta_sbm.update_id = t_user.kode where t_user.kode = '.$id);
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
			         ('SELECT * FROM cbt_petugas_monev left join t_user on cbt_petugas_monev.update_id = t_user.kode where t_user.kode = '.$id);
			    if($query -> num_rows() > 0)
			        {
			         return $query->result();
			        }
			       
		 	   
	  		}
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
		$this->db->select('sum(7y) as 7y');
		$this->db->select('sum(7t) as 7t');
		$this->db->select('sum(8y) as 8y');
		$this->db->select('sum(8t) as 8t');
		$q = $this->db->get('cbt_peserta_sbm');
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
		$q = $this->db->get('penanggung_jawab');
		return $q;
	}
	function grapik_penanggung_jawab_catatan()
	{
		$this->db->select('*');
		$q = $this->db->get('cbt_penanggung_jawab');
		return $q;
	}
	 //monev
	function a1y()
	{
		$q = $this->db->query("select count(a1) as a from cbt_petugas_monev where a1 = 1");
		return $q;
	}
	function a1n()
	{
		$q = $this->db->query("select count(a1) as a from cbt_petugas_monev where a1 = 0");
		return $q;
	}
	function a2y()
	{
		$q = $this->db->query("select count(a2) as a from cbt_petugas_monev where a2 = 1");
		return $q;
	}
	function a2n()
	{
		$q = $this->db->query("select count(a2) as a from cbt_petugas_monev where a2 = 0");
		return $q;
	}
	function a3ay()
	{
		$q = $this->db->query("select count(a3a) as a from cbt_petugas_monev where a3a = 1");
		return $q;
	}
	function a3an()
	{
		$q = $this->db->query("select count(a3a) as a from cbt_petugas_monev where a3a = 0");
		return $q;
	}
	function a3by()
	{
		$q = $this->db->query("select count(a3b) as a from cbt_petugas_monev where a3b = 1");
		return $q;
	}
	function a3bn()
	{
		$q = $this->db->query("select count(a3b) as a from cbt_petugas_monev where a3b = 0");
		return $q;
	}
	function a3cy()
	{
		$q = $this->db->query("select count(a3c) as a from cbt_petugas_monev where a3c = 1");
		return $q;
	}
	function a3cn()
	{
		$q = $this->db->query("select count(a3c) as a from cbt_petugas_monev where a3c = 0");
		return $q;
	}
	function a3dy()
	{
		$q = $this->db->query("select count(a3d) as a from cbt_petugas_monev where a3d = 1");
		return $q;
	}
	function a3dn()
	{
		$q = $this->db->query("select count(a3d) as a from cbt_petugas_monev where a3d = 0");
		return $q;
	}
	function a3ey()
	{
		$q = $this->db->query("select count(a3e) as a from cbt_petugas_monev where a3e = 1");
		return $q;
	}
	function a3en()
	{
		$q = $this->db->query("select count(a3e) as a from cbt_petugas_monev where a3e = 0");
		return $q;
	}
	function a4y()
	{
		$q = $this->db->query("select count(a4) as a from cbt_petugas_monev where a4 = 1");
		return $q;
	}
	function a4n()
	{
		$q = $this->db->query("select count(a4) as a from cbt_petugas_monev where a4 = 0");
		return $q;
	}
	function a5y()
	{
		$q = $this->db->query("select count(a5) as a from cbt_petugas_monev where a5 = 1");
		return $q;
	}
	function a5n()
	{
		$q = $this->db->query("select count(a5) as a from cbt_petugas_monev where a5 = 0");
		return $q;
	}
	function b1y()
	{
		$q = $this->db->query("select count(b1) as a from cbt_petugas_monev where b1 = 1");
		return $q;
	}
	function b1n()
	{
		$q = $this->db->query("select count(b1) as a from cbt_petugas_monev where b1 = 0");
		return $q;
	}
	function b2y()
	{
		$q = $this->db->query("select count(b2) as a from cbt_petugas_monev where b2 = 1");
		return $q;
	}
	function b2n()
	{
		$q = $this->db->query("select count(b2) as a from cbt_petugas_monev where b2 = 0");
		return $q;
	}
	function b3y()
	{
		$q = $this->db->query("select count(b3) as a from cbt_petugas_monev where b3 = 1");
		return $q;
	}
	function b3n()
	{
		$q = $this->db->query("select count(b3) as a from cbt_petugas_monev where b3 = 0");
		return $q;
	}
	function b4y()
	{
		$q = $this->db->query("select count(b4) as a from cbt_petugas_monev where b4 = 1");
		return $q;
	}
	function b4n()
	{
		$q = $this->db->query("select count(b4) as a from cbt_petugas_monev where b4 = 0");
		return $q;
	}
	function c1y()
	{
		$q = $this->db->query("select count(c1) as a from cbt_petugas_monev where c1 = 1");
		return $q;
	}
	function c1n()
	{
		$q = $this->db->query("select count(c1) as a from cbt_petugas_monev where c1 = 0");
		return $q;
	}
	function c2y()
	{
		$q = $this->db->query("select count(c2) as a from cbt_petugas_monev where c2 = 1");
		return $q;
	}
	function c2n()
	{
		$q = $this->db->query("select count(c2) as a from cbt_petugas_monev where c2 = 0");
		return $q;
	}
	function c3y()
	{
		$q = $this->db->query("select count(c3) as a from cbt_petugas_monev where c3 = 1");
		return $q;
	}
	function c3n()
	{
		$q = $this->db->query("select count(c3) as a from cbt_petugas_monev where c3 = 0");
		return $q;
	}
	function c4y()
	{
		$q = $this->db->query("select count(c4) as a from cbt_petugas_monev where c4 = 1");
		return $q;
	}
	function c4n()
	{
		$q = $this->db->query("select count(c4) as a from cbt_petugas_monev where c4 = 0");
		return $q;
	}
	
	function d1y()
	{
		$q = $this->db->query("select count(d1) as a from cbt_petugas_monev where d1 = 1");
		return $q;
	}
	function d1n()
	{
		$q = $this->db->query("select count(d1) as a from cbt_petugas_monev where d1 = 0");
		return $q;
	}
	function d2y()
	{
		$q = $this->db->query("select count(d2) as a from cbt_petugas_monev where d2 = 1");
		return $q;
	}
	function d2n()
	{
		$q = $this->db->query("select count(d2) as a from cbt_petugas_monev where d2 = 0");
		return $q;
	}
	function d3y()
	{
		$q = $this->db->query("select count(d3) as a from cbt_petugas_monev where d3 = 1");
		return $q;
	}
	function d3n()
	{
		$q = $this->db->query("select count(d3) as a from cbt_petugas_monev where d3 = 0");
		return $q;
	}
	function d4y()
	{
		$q = $this->db->query("select count(d4) as a from cbt_petugas_monev where d4 = 1");
		return $q;
	}
	function d4n()
	{
		$q = $this->db->query("select count(d4) as a from cbt_petugas_monev where d4 = 0");
		return $q;
	}
	function d5y()
	{
		$q = $this->db->query("select count(d5) as a from cbt_petugas_monev where d5 = 1");
		return $q;
	}
	function d5n()
	{
		$q = $this->db->query("select count(d5) as a from cbt_petugas_monev where d5 = 0");
		return $q;
	}
	function d6y()
	{
		$q = $this->db->query("select count(d6) as a from cbt_petugas_monev where d6 = 1");
		return $q;
	}
	function d6n()
	{
		$q = $this->db->query("select count(d6) as a from cbt_petugas_monev where d6 = 0");
		return $q;
	}
	function d7y()
	{
		$q = $this->db->query("select count(d7) as a from cbt_petugas_monev where d7 = 1");
		return $q;
	}
	function d7n()
	{
		$q = $this->db->query("select count(d7) as a from cbt_petugas_monev where d7 = 0");
		return $q;
	}
	
	function e1y()
	{
		$q = $this->db->query("select count(e1) as a from cbt_petugas_monev where e1 = 1");
		return $q;
	}
	function e1n()
	{
		$q = $this->db->query("select count(e1) as a from cbt_petugas_monev where e1 = 0");
		return $q;
	}
	function e2y()
	{
		$q = $this->db->query("select count(e2) as a from cbt_petugas_monev where e2 = 1");
		return $q;
	}
	function e2n()
	{
		$q = $this->db->query("select count(e2) as a from cbt_petugas_monev where e2 = 0");
		return $q;
	}
	function e3y()
	{
		$q = $this->db->query("select count(e3) as a from cbt_petugas_monev where e3 = 1");
		return $q;
	}
	function e3n()
	{
		$q = $this->db->query("select count(e3) as a from cbt_petugas_monev where e3 = 0");
		return $q;
	}
	function e4y()
	{
		$q = $this->db->query("select count(e4) as a from cbt_petugas_monev where e4 = 1");
		return $q;
	}
	function e4n()
	{
		$q = $this->db->query("select count(e4) as a from cbt_petugas_monev where e4 = 0");
		return $q;
	}
	function e5y()
	{
		$q = $this->db->query("select count(e5) as a from cbt_petugas_monev where e5 = 1");
		return $q;
	}
	function e5n()
	{
		$q = $this->db->query("select count(e5) as a from cbt_petugas_monev where e5 = 0");
		return $q;
	}
	} ?>