<?php
class M_dashboard extends CI_Model
{
	function belumupdate()
	{
		$q = $this->db->query("select kode,nama  from t_user left join t_1 on t_1.update_id = t_user.kode where t_1.update_id is null");
		return $q;
	}
	function sudahupdate()
	{
		$q = $this->db->query("select kode,nama,masukan_terpenting.biaya as biaya from t_user left join t_1 on t_1.update_id = t_user.kode left join masukan_terpenting on masukan_terpenting.update_id = t_user.kode where t_1.update_id = kode");
		return $q;
	}
	function totalbelumupdate()
	{
		$q = $this->db->query("select count(kode) as kode  from t_user left join t_1 on t_1.update_id = t_user.kode where t_1.update_id is null");
		return $q;
	}
	function totalsudahupdate()
	{
		$q = $this->db->query("select count(kode) as kode  from t_user left join t_1 on t_1.update_id = t_user.kode where t_1.update_id = kode");
		return $q;
	}
	function tott1()
	{
		$q = $this->db->query("select sum(mengundang_kepsek),sum(mengundang_guru),sum(mengundang_siswa),sum(mengundang_jum),sum(mengundang_lok), sum(mengunjungi_kepsek), sum(mengunjungi_guru), sum(mengunjungi_siswa), sum(mengunjungi_lok), sum(media_jum), sum(media_kepsek), sum(media_guru), sum(media_siswa), sum(media_jum), sum(media_lok), sum(leaflet_kepsek), sum(leaflet_guru), sum(leaflet_siswa), sum(leaflet_lok),sum(baliho_lok),sum(baliho_kepsek),sum(baliho_guru),sum(baliho_siswa),sum(tv_kepsek),sum(tv_guru),sum(tv_siswa),sum(tv_lok),sum(radio_kepsek),sum(radio_guru),sum(radio_siswa),sum(radio_lok) from t_1");
		return $q;
	}
	function tott2tidakjelaskepsek()
	{
		$q = $this->db->query("select sum(status_kepsek) from t_2 where status_kepsek = 1"); return $q;
	}
	function tott2kurangkepsek()
	{
		$q = $this->db->query("select sum(status_kepsek)from t_2 where status_kepsek = 2"); return $q;
	}
	function tott2cukupkepsek()
	{
		$q = $this->db->query("select sum(status_kepsek) from t_2 where status_kepsek = 3"); return $q;
	}
	function tott2jelaskepsek()
	{
		$q = $this->db->query("select sum(status_kepsek) from t_2 where status_kepsek = 4"); return $q;
	}
	function tott2sangatjelaskepsek()
	{
		$q = $this->db->query("select sum(status_kepsek) from t_2 where status_kepsek = 5"); return $q;
	}
	function tott2tidakjelasgurubk()
	{
		$q = $this->db->query("select sum(status_gurubk) from t_2 where status_gurubk = 1"); return $q;
	}
	function tott2kuranggurubk()
	{
		$q = $this->db->query("select sum(status_gurubk)from t_2 where status_gurubk = 2"); return $q;
	}
	function tott2cukupgurubk()
	{
		$q = $this->db->query("select sum(status_gurubk) from t_2 where status_gurubk = 3"); return $q;
	}
	function tott2jelasgurubk()
	{
		$q = $this->db->query("select sum(status_gurubk) from t_2 where status_gurubk = 4"); return $q;
	}
	function tott2sangatjelasgurubk()
	{
		$q = $this->db->query("select sum(status_gurubk) from t_2 where status_gurubk = 5"); return $q;
	}
	function tott2tidakjelassiswa()
	{
		$q = $this->db->query("select sum(status_siswa) from t_2 where status_siswa = 1"); return $q;
	}
	function tott2kurangsiswa()
	{
		$q = $this->db->query("select sum(status_siswa)from t_2 where status_siswa = 2"); return $q;
	}
	function tott2cukupsiswa()
	{
		$q = $this->db->query("select sum(status_siswa) from t_2 where status_siswa = 3"); return $q;
	}
	function tott2jelassiswa()
	{
		$q = $this->db->query("select sum(status_siswa) from t_2 where status_siswa = 4"); return $q;
	}
	function tott2sangatjelassiswa()
	{
		$q = $this->db->query("select sum(status_siswa) from t_2 where status_siswa = 5"); return $q;
	}
	function tott2tidakjelasortu()
	{
		$q = $this->db->query("select sum(status_ortu) from t_2 where status_ortu = 1"); return $q;
	}
	function tott2kurangortu()
	{
		$q = $this->db->query("select sum(status_ortu)from t_2 where status_ortu = 2"); return $q;
	}
	function tott2cukuportu()
	{
		$q = $this->db->query("select sum(status_ortu) from t_2 where status_ortu = 3"); return $q;
	}
	function tott2jelasortu()
	{
		$q = $this->db->query("select sum(status_ortu) from t_2 where status_ortu = 4"); return $q;
	}
	function tott2sangatjelasortu()
	{
		$q = $this->db->query("select sum(status_ortu) from t_2 where status_ortu = 5"); return $q;
	}

	
	function totadahelpdesk()
	{
		$q = $this->db->query("select COALESCE(count(status_helpdesk),0) as sum from t_3 where status_helpdesk = 1");
		return $q;
	}
	function tottidakadahelpdesk()
	{
		$q = $this->db->query("select COALESCE(count(status_helpdesk),0) as sum from t_3 where status_helpdesk = 0");
		return $q;
	}
	function totadatelpon()
	{
		$q = $this->db->query("select COALESCE(count(status_telpon),0) as sum from t_3 where status_telpon = 1");
		return $q;
	}
	function tottidakadatelpon()
	{
		$q = $this->db->query("select COALESCE(count(status_telpon),0) as sum from t_3 where status_telpon = 0");
		return $q;
	}
	function totadasms()
	{
		$q = $this->db->query("select COALESCE(count(status_sms),0) as sum from t_3 where status_sms = 1");
		return $q;
	}
	function tottidakadasms()
	{
		$q = $this->db->query("select COALESCE(count(status_sms),0) as sum from t_3 where status_sms = 0");
		return $q;
	}
	function totadatwitter()
	{
		$q = $this->db->query("select COALESCE(count(status_twitter),0) as sum from t_3 where status_twitter = 1");
		return $q;
	}
	function tottidakadatwitter()
	{
		$q = $this->db->query("select COALESCE(count(status_twitter),0) as sum from t_3 where status_twitter = 0");
		return $q;
	}
	function totadafb()
	{
		$q = $this->db->query("select COALESCE(count(status_fb),0) as sum from t_3 where status_fb = 1");
		return $q;
	}
	function tottidakadafb()
	{
		$q = $this->db->query("select COALESCE(count(status_fb),0) as sum from t_3 where status_fb = 0");
		return $q;
	}
	function isi()
	{
		$q = $this->db->query("SELECT * FROM masukan_terpenting left join t_user on masukan_terpenting.update_id = t_user.kode order by masukan_terpenting.id desc");
		return $q;
	}
	
	
}