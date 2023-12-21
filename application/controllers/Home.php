<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Modb');
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
		if ($this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}	
	}
	public function index()
	{		
		$data['baso'] = $this->Modb->baso2022();
		$this->template->load('template', 'so2022', $data);
	}	
	public function input()
	{
		$data['depo'] = $this->Modb->getdepo();
		$this->template->load('template', 'inputba', $data);
	}
	public function submitform()
	{
		$tgl = date('Y-m-d H:i:s');	
		$barcode = $this->input->post('barcode');
		$namaasset = $this->input->post('namaasset');
		$merk = $this->input->post('merk');
		$type = $this->input->post('type');
		$user = $this->input->post('user');
		$depo = $this->input->post('depo');
		$lokasi = $this->input->post('lokasi');
		$masterstock = $this->input->post('masterstock');
		$fisikopname = $this->input->post('fisikopname');
		$kondisi = $this->input->post('kondisi');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'tanggal' => $tgl,
			'barcode' => $barcode,
			'namaasset' => $namaasset,
			'merk' => $merk,
			'type' => $type,
			'user' => $user,
			'depo' => $depo,
			'lokasi' => $lokasi,
			'masterstock' => $masterstock,
			'fisikopname' => $fisikopname,
			'kondisi' => $kondisi,
			'keterangan' => $keterangan
		);
		//var_dump($data);
		$this->Modb->checksimpan($barcode, $data);
		redirect(base_url('input'));
	}
	public function approval()
	{
		if($this->session->userdata('nik') === "0100002300"){
			$data['dapproval'] = $this->Modb->dataall();
			$this->template->load('template', 'dataapproval', $data);
		}else{
			redirect(base_url());
		}
		
	}
	public function editrequest()
	{
		
	}
	function getdata()
	{
		$data = $this->Modb->so2021();
		echo json_encode($data);
	}
	function getbarcode()
	{
			
        $barcode = $this->input->post('barcode');
        $data = $this->Modb->get_by_id('so2021', $barcode);
        echo json_encode($data);
    }
    function updaterequest()
    {
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$lokasi = $this->input->post('lokasi');
		$dept = $this->input->post('dept');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$system = $this->input->post('system');
		$status = $this->input->post('status');
		$approval = $this->input->post('approval');
		$data = array(
	        
	        'status' 	=> $this->input->post('status'),
	        'approval'	=> $this->input->post('approval')
		);

        $this->Modb->update($id, $data);
        $this->load->library('email');
		$config = [
			'charset' => 'utf-8',
			'protocol' => "smtp",
			'mailtype'=> "html",
			'smtp_host' => "192.168.15.100",//pengaturan smtp
			'smtp_port' => "25",
			'smtp_timeout' => "5",
			'smtp_user' => "SAR@tvip.co.id",
			'crlf' => "\r\n",
			'newline' => "\r\n",
			'wordwrap' => TRUE
			];
		$this->email->initialize($config);
		$this->email->from($config['smtp_user'], 'System Access Request');
		$this->email->to($email);
		$this->email->cc("infra@tvip.co.id");
		$this->email->subject("Status Pengajuan Akses System ". $system );
		/*$this->email->message("Dear " . $nama . ", <br/><br/>Permintaan Akses dengan: <br/> NIK : " . $nik . "<br/> Nama : " . $nama . "<br/> Depo Asal : " . $lokasi .	"<br/> Dept : " . $dept . "<br/> Jabatan : " . $jabatan . "<br/><br/> Request Access : " . $system . "<br/> Status : <b>" . $status ."</b><br/> Feedback : " . $approval . "<br />");*/
		$this->email->message("Dear " . $nama . ", <br/><br/>Berikut update status pengajuan anda:<br/><br/> Permintaan Akses : " . $system . "<br/> Status : <b>" . $status ."</b><br/> Feedback : " . $approval . "<br /><br/>Terima Kasih.<br/>ICT Dept.");
		$this->email->send(); //send mail
	}
	
}