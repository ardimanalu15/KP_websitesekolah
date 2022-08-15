<?php
class M_siswa extends CI_Model
{

	function get_all_siswa()
	{
		$hsl = $this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}

	function simpan_siswa($nama, $jenkel, $kelas)
	{
		$hsl = $this->db->query("INSERT INTO tbl_siswa (siswa_nama,siswa_jenkel,siswa_kelas_id) VALUES (,'$nama','$jenkel','$kelas')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nama, $jenkel, $kelas)
	{
		$hsl = $this->db->query("INSERT INTO tbl_siswa (siswa_nama,siswa_jenkel,siswa_kelas_id) VALUES ('$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_siswa($kode, $nama, $jenkel, $kelas)
	{
		$hsl = $this->db->query("UPDATE tbl_siswa SET siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas', WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode, $nama, $jenkel, $kelas)
	{
		$hsl = $this->db->query("UPDATE tbl_siswa SET siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa()
	{
		$hsl = $this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}
}
