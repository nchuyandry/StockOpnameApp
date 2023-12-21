<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modb extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
	}
	public function login($data)
	{
		//$query = $this->db2->query("SELECT tbl_karyawan_struktur.*, tbl_jabatan_karyawan.jabatan_karyawan FROM  tbl_karyawan_struktur  RIGHT JOIN  tbl_jabatan_karyawan ON no_jabatan_karyawan  =  tbl_karyawan_struktur.jabatan_struktur  WHERE  tbl_karyawan_struktur.nik_baru = '".$data."'");
		$this->db2->select('*, tbl_jabatan_karyawan.jabatan_karyawan');
		$this->db2->from('tbl_karyawan_struktur');
		$this->db2->join('tbl_jabatan_karyawan', 'tbl_jabatan_karyawan.no_jabatan_karyawan  =  tbl_karyawan_struktur.jabatan_struktur' );
		$this->db2->where($data);
		$query = $this->db2->get();
		return $query;
	}
	function getdepo()
	{
		$query = $this->db->get('depo');
		return $query->result();
	}
	
	public function baso2022()
	{
		$query = $this->db->order_by('tanggal','DESC')->get('so2022');
		return $query->result();
	}
	public function checksimpan($barcode, $data)
	{
		$this->db->where('barcode',$barcode);
		$query = $this->db->get('so2022');
		$num = $query->num_rows();
		if($num > 0){
			$this->session->set_flashdata('error', 'Data Already exist!');
		}else{
			$this->db->insert('so2022',$data);
			$this->session->set_flashdata('saved', 'Data Inserted');
		}
	}
	public function simpan($data)
	{
		$this->db->insert('so2022', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('t_request', $data);
	}
	public function ticketperson()
	{
		$pic = $this->session->userdata('name');
		$query = $this->db->where('pic', $pic)->get('ticket');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}
	}
	public function so2021()
	{
		$query = $this->db->get('so2021');
		return $query->result();
		/*if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}*/
	}
	public function get_by_id($table,$barcode)
	{
		return $this->db->get_where($table, array('BARCODE' => $barcode))->row();
    }
}