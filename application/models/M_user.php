<?php
class M_user extends CI_Model
{
  function login($username, $password)
  {
     $this -> db -> select('*');
     $this -> db -> from('t_user');
     $this -> db -> where('kode', $username);
     $this -> db -> where('password', $password);
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
  }


  function get1($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','t_user.kode = update_id');
    $this->db->where('t_1.update_id',$user);
    $q = $this->db->get('t_1');
    return $q;
  }
  function get2($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('t_2');
    return $q;
  }
  function get3($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('t_3');
    return $q;
  }
  function get4($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('t_4');
    return $q;
  }
  function get5($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('t_5');
    return $q;
  }
  function getdaftar($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('pendaftaran');
    return $q;
  }
  function getmasuk($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('masukan_terpenting');
    return $q;
  }
  function getporto($user)
  {
    $this->db->select('*');
    $this->db->join('t_user','kode = update_id');
    $this->db->where('update_id',$user);
    $q = $this->db->get('portofolio');
    return $q;
  }

  function checkupdate()
  { 

    $idsb = $this->session->userdata('logged_in');
    if ($idsb == TRUE)
    {
    $id = $idsb['kode'];
    $query = $this->db->query
         ('SELECT * FROM t_1 left join t_user on t_1.update_id = t_user.kode where t_user.kode = '.$id);
    if($query -> num_rows() > 0)
        {
         return $query->result();
        }
        else
    {
      return false;
    }
  }
  }
  function getfile($user)
  {
  $this->db->where('update_id',$user);
  $q = $this->db->get('t_file');
  return $q;
  }
}
?>