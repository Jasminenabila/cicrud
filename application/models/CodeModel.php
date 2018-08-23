<?php
class CodeModel extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function all(){
		return $this->db->get('code');
	}

	public function getWhere($where){
		$this->db->where($where);

	}

	public function insert($data){
		// melakukan insert ke tabel code
		return $this->db->insert('code',$data);
	}
	public function update($data,$where){
		//melakukan update ke tabel code
		$this->db->where($where);
		return $this->db->update('code',$data);
	}
	public function delete($where){
		//menghapus data pada tabel code sesuai kriteria
		return $this->db->delete('code',$where);
	}
}