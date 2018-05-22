<?php
class C_admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
  }
  function index(){
    $data['total_member'] = $this->m_admin->total_member();
    $data['lunas'] = $this->m_admin->lunas();
    $data['belum_lunas'] = $this->m_admin->belum_lunas();
    $this->load->view('dashboard',$data);
  }

  //CRUD Member
  function tambah_member(){
    $nama_member = $this->input->post('nama_member');
    $email = $this->input->post('email');
    $nik = $this->input->post('nik');
    $no_hp = $this->input->post('no_hp');
    $pekerjaan = $this->input->post('pekerjaan');
    $alamat = $this->input->post('alamat');
    $kota_lahir = $this->input->post('kota_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $no_kamar = $this->input->post('no_kamar');
    $tgl_gabung = $this->input->post('tgl_gabung');
    $dataMember = array (
      'nama_member' => $nama_member,
      'email' => $email,
      'nik' => $nik,
      'no_hp' => $no_hp,
      'pekerjaan' => $pekerjaan,
      'alamat' => $alamat,
      'kota_lahir' => $kota_lahir,
      'tgl_lahir' => $tgl_lahir,
      'no_kamar' => $no_kamar,
      'tgl_gabung' => $tgl_gabung,
      'password' => '-',
      'foto' => '-',
      'status' => 'Tidak Aktif'
    );
    $this->m_admin->tambah_member('member',$dataMember);
    echo "<script>alert('Member Baru Berhasil Ditambahkan!');</script>";
    redirect(c_admin);
  }
  function member(){
    $data['dataMember'] = $this->m_admin->getAllMember()->result();
    $this->load->view('member_a',$data);
  }
  function view_edit_member($id_member){
    $where = array('id_member' => $id_member);
    $data['dataMember'] = $this->m_admin->getMember('member',$where)->result_array();
    $this->load->view('edit_member_a',$data);
  }
  function edit_member(){
    $id_member = $this->input->post('id_member');
    $nama_member = $this->input->post('nama_member');
    $email = $this->input->post('email');
    $nik = $this->input->post('nik');
    $no_hp = $this->input->post('no_hp');
    $pekerjaan = $this->input->post('pekerjaan');
    $alamat = $this->input->post('alamat');
    $kota_lahir = $this->input->post('kota_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $no_kamar = $this->input->post('no_kamar');
    $tgl_gabung = $this->input->post('tgl_gabung');
    $status = $this->input->post('status');
    $dataMember = array (
      'nama_member' => $nama_member,
      'email' => $email,
      'nik' => $nik,
      'no_hp' => $no_hp,
      'pekerjaan' => $pekerjaan,
      'alamat' => $alamat,
      'kota_lahir' => $kota_lahir,
      'tgl_lahir' => $tgl_lahir,
      'no_kamar' => $no_kamar,
      'tgl_gabung' => $tgl_gabung,
      'status' => $status
    );
    $this->m_admin->update_member('member',$dataMember,$id_member);
    echo "<script>alert('Member Berhasil di Edit!');</script>";
    $this->member();
  }
  function hapus_member($id_member){
    $where = array('id_member' => $id_member);
    $this->m_admin->hapus_member('member',$where);
    redirect(c_admin);
  }

  //CRUD Paket
  function tambah_paket(){
    $nama = $this->input->post('nama');
    $tgl_datang = $this->input->post('tgl_datang');
    $status = 'Belum Diambil';
    $dataPaket = array(
      'nama' => $nama,
      'tgl_datang' => $tgl_datang,
      'status' => $status
    );
    $this->m_admin->tambah_paket('paket',$dataPaket);
    echo "<script>alert('Paket Berhasil Ditambahkan!');</script>";
    $this->package();
  }
  function package(){
    $data['dataPaket'] = $this->m_admin->getAllPackage()->result();
    $this->load->view('package_a',$data);
  }
  function v_edit_paket($id_paket){
    $where = array('id_paket' => $id_paket);
    $data['dataPaket'] = $this->m_admin->getPaket('paket',$where)->result_array();
    $this->load->view('edit_paket_a',$data);
  }
  function edit_paket(){
    $id_paket = $this->input->post('id_paket');
    $nama = $this->input->post('nama');
    $tgl_datang = $this->input->post('tgl_datang');
    $tgl_pengambilan = $this->input->post('tgl_pengambilan');
    $status = $this->input->post('status');
    $dataPaket = array(
      'nama' => $nama,
      'tgl_datang' => $tgl_datang,
      'tgl_pengambilan' => $tgl_pengambilan,
      'status' => $status
    );
    $this->m_admin->update_paket('paket',$dataPaket,$id_paket);
    echo "<script>alert('Paket Berhasil di Edit!');</script>";
    $this->package();
  }
  function hapus_paket($id_paket){
    $where = array('id_paket' => $id_paket);
    $this->m_admin->hapus_paket('paket',$where);
    $this->package();
  }

  //CRUD Administrasi
  function administrasi(){
    $data['dataAdministrasi'] = $this->m_admin->getAllAdministrasi()->result();
    $data['dataMember'] = $this->m_admin->getAllMember()->result();
    $this->load->view('administrasi_a',$data);
  }
  function v_edit_administrasi($id_administrasi){
    $where = $id_administrasi;
    $data['dataAdministrasi'] = $this->m_admin->getAdministrasi('administrasi',$where)->result_array();
    $this->load->view('edit_administrasi_a',$data);
  }
    //belum
  function tambah_administrasi(){
    $id_member = $this->input->post('id_member');
    $tgl_pembayaran = $this->input->post('tgl_pembayaran');
    $status = 'Lunas';
    // $tempo_lalu = $this->m_admin->jatuh_tempo($id_member);
    // $jatuh_tempo = date('d F Y',strtotime('+1 month',strtotime($tempo_lalu)));
    $dataAdministrasi = array(
      'id_member' => $id_member,
      'tgl_pembayaran' => $tgl_pembayaran,
      // 'jatuh_tempo' => $jatuh_tempo,
      'status' => $status
    );
    $this->m_admin->tambah_administrasi('administrasi',$dataAdministrasi);
    echo "<script>alert('Pembayaran Telah Disimpan!');</script>";
    $this->administrasi();
  }
    //belum
  function edit_administrasi(){
    $id_administrasi = $this->input->post('id_administrasi');
    $jatuh_tempo = $this->input->post('jatuh_tempo');
    $tgl_pembayaran = $this->input->post('tgl_pembayaran');
    $status = $this->input->post('status');
    $dataPaket = array(
      'nama' => $nama,
      'tgl_datang' => $tgl_datang,
      'tgl_pengambilan' => $tgl_pengambilan,
      'status' => $status
    );
    $this->m_admin->update_administrasi('administrasi',$dataPaket,$id_administrasi);
    echo "<script>alert('Paket Berhasil di Edit!');</script>";
    $this->package();
  }

  //CRUD Income

  function income(){
    $data['pemasukan'] = $this->m_admin->getAllIncome()->result();
    $data['getMember'] = $this->m_admin->total_member();
    $this->load->view('income_a',$data);
  }
  
  function update_income(){
    $data['dataIncome'] = $this->m_admin->updateIncome();
  }

  function logout(){
		$this->session->sess_destroy();
		redirect(base_url('c_user'));
	}
}
