<?php
class M_admin extends CI_Model{

  //CRUD Member
  function tambah_member($table,$dataMember){
    $this->db->insert($table, $dataMember);
  }
  function getAllMember(){
    $dataMember = $this->db->query("SELECT * FROM member");
		return $dataMember;
  }
  function getMember($table,$where){
    return $this->db->get_where($table,$where);
  }
  function total_member(){
    $this->db->from('member');
    $total_member = $this->db->count_all_results();
    return $total_member;
  }
  function lunas(){
    $this->db->count_all_results('member');
    $this->db->where('status', 'Aktif');
    $this->db->from('member');
    return $this->db->count_all_results();
  }
  function belum_lunas(){
    $this->db->count_all_results('member');
    $this->db->like('status', 'Tidak Aktif');
    $this->db->from('member');
    return $this->db->count_all_results();
  }
  function update_member($table,$dataMember,$id_member){
    $this->db->where('id_member', $id_member);
    $this->db->update($table, $dataMember);
  }
  function hapus_member($table,$where){
    $this->db->delete($table,$where);
  }

  //CRUD Paket
  function tambah_paket($table,$dataPaket){
    $this->db->insert($table, $dataPaket);
  }
  function getAllPackage(){
    $dataPaket = $this->db->query("SELECT * FROM paket");
		return $dataPaket;
  }
  function getPaket($table,$where){
    return $this->db->get_where($table,$where);
  }
  function update_paket($table,$dataPaket,$id_paket){
    $this->db->where('id_paket', $id_paket);
    $this->db->update($table, $dataPaket);
  }
  function hapus_paket($table,$where){
    $this->db->delete($table,$where);
  }

  //CRUD Administrasi
  function tambah_administrasi($table,$dataAdministrasi){
    $this->db->insert($table, $dataAdministrasi);
  }

  function getAllAdministrasi(){
    $dataAdministrasi = $this->db->query("SELECT
      administrasi.id_member,member.nama_member,
      administrasi.id_administrasi, administrasi.jatuh_tempo,
      administrasi.tgl_pembayaran, administrasi.status
      FROM administrasi
      JOIN member
      ON administrasi.id_member = member.id_member");
		return $dataAdministrasi;
  }
  function getAdministrasi($table,$id_administrasi){
    $dataAdministrasi = $this->db->query("SELECT
      member.nama_member,
      administrasi.id_administrasi,administrasi.id_member,
      administrasi.bulan, administrasi.jatuh_tempo,
      administrasi.tgl_pembayaran, administrasi.status
      FROM administrasi
      JOIN member
      ON administrasi.id_member = member.id_member
      WHERE id_administrasi = $id_administrasi
    ");
    return $dataAdministrasi;
  }
    //belum
  function jatuh_tempo($id_member){
    $dataAdministrasi = $this->db->query("SELECT
      MAX('jatuh_tempo') FROM administrasi
      WHERE id_member = $id_member AND status = 'Lunas'
    ");
    return $dataAdministrasi;
  }
  //CRUD Income
  //blum
  function getAllIncome(){
    $dataIncome = $this->db->query("SELECT CONCAT('Bulan ',MONTH(tgl_pembayaran),' Tahun ',YEAR(tgl_pembayaran)) AS tahun_bulan, COUNT(*) AS jumlah_bulanan
    FROM administrasi WHERE status='Lunas'
    GROUP BY YEAR(tgl_pembayaran),MONTH(tgl_pembayaran)");
    return $dataIncome;
  }
  function update_income(){
    $MemberLunas = $this->db->query("SELECT
      COUNT(status) FROM administrasi
      WHERE status = 'Lunas' AND bulan = ''
    ");
  }
}
