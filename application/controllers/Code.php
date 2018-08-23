<?php
class Code extends CI_Controller{
		//buat atribut alert
		private alert = "";

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('codeModel');

		} 

		public function index(){
			$data = ['semua'] = $this->codeModel->all();
			$this->template('list', $data);
		}

		private function template($content, $data=null){
			$data['content'] = $this->load->view($content, $data, true);
			$this->load->view('template', $data);
		}

		private function alert($open_tag=null,$close_tag=null,$data=null){ 
		//method ini untuk membuat alert yang dapat digunakan pada method lain
			if($data!=null) $data = $open_tag.$data.$close_tag;
			return $data;
		//contoh : $this->alert('<h1>','</h1>','Hello world'); Output : <h1>Hello World</h1>
		}

		public function form(){
		//jika form disubmit
			if($this->input->post('simpan')){
			//masukkan data POST ke dalam variabel $array
			$array = array(
					'id'=>$this->input->post('id'),
					'redeemcode'=>$this->input->post('redeemcode'),
					'status'=>$this->input->post('status'),
			);
			//jika id nya kosong ( melakukan insert data baru )
			if($this->input->post('id')==''){
				//panggil method insert pada Model codeModel
				if($this->codeModel->insert($array)){
					//jika berhasil insert
					$this->alert = $this->alert("<p class='alert alert-success'>","</p>","Sukses Menyimpan"); 
				}else{
					//jika gagal insert
					$this->alert = $this->alert("<p class='alert alert-danger'>","</p>","Gagal Menyimpan");
				}
				// jika id nya tidak kosong ( melakukan update data )
			}else{
				//panggil method update pada Model codeModel
				if($this->codeModel->update($array,array('id'=>$this->input->post('id')))){
					//jika berhasil update
					$this->alert = $this->alert("<p class='alert alert-success'>","</p>","Sukses Menyimpan"); 
				}else{
					//jika gagal update
					$this->alert = $this->alert("<p class='alert alert-danger'>","</p>","Gagal Menyimpan");					
				}
			}
		}

		//memanggil method getWhere pada model codeModel untuk memanggil data buku sesuai id
		//jika id kosong, maka nilai balik (return value) nya NULL
		//id diambil dari URL SEGMENT 3
		$data['satu'] = $this->codeModel->getWhere(array('id'=>$this->uri->segment(3)))->row_array();
		//masukkan data alert hasil proses
		$data['alert'] = $this->alert;
		//memanggil method template
		$this->template('form',$data);
	}

		public function hapus(){
		//jika telah diset URI SEGMENT 3 (id buku) maka hapus data sesuai id yang diset
		//dengan memanggil method model bukuModel
		if($this->uri->segment(3)) $this->codeModel->delete(array('id'=>$this->uri->segment(3)));
		//kemudian dialihkan ke controller Buku method index
		redirect('code');
	}

}

?>