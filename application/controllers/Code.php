<?php
class Code extends CI_Controller{
		//buat atribut alert
		// private alert = "";

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('CodeModel');

		} 

		public function index(){
			$data['code'] = $this->CodeModel->all();
			$this->load->view('list', $data);
		}

		public function view_tambah()
		{
			$this->load->view('home');
		}

		// private function template($content, $data=null){
		// 	$data['content'] = $this->load->view($content, $data, true);
		// 	$this->load->view('template', $data);
		// }

		// private function alert($open_tag=null,$close_tag=null,$data=null){ 
		// //method ini untuk membuat alert yang dapat digunakan pada method lain
		// 	if($data!=null) $data = $open_tag.$data.$close_tag;
		// 	return $data;
		// //contoh : $this->alert('<h1>','</h1>','Hello world'); Output : <h1>Hello World</h1>
		// }

		public function action_tambah()
		{
			$redeemcode = $this->input->post('redeemcode');
			// echo "masuk";
			// echo $redeemcode;
			// die();
			$data = array (
				'redeemcode' => $redeemcode,
				'status' => 0
			);

			$this->CodeModel->insert_code('pbnclp2018_voucher', $data);
			redirect('code/index');
		}

		public function openitem() // buka item supaya voucher bisa digunakan
		{
			$id = $this->uri->segment(3); // segment 3 yaitu <php item yang erada di view list
			$cekstatusdulu = $this->db->query('select status from pbnclp2018_voucher where status = 1 ')->num_rows(); // cek status yang bernilai 1 saja di table voucher
			//  echo $cekstatusdulu;
			// die();
					
					if($cekstatusdulu < 1)// buat kondisi yang diatas apakah sudah bener apa belum
					{
						//echo $cekstatusdulu; // buat cek apakah sudah bisa di cek apa belum
						$data = array( // datanya disimpan dalam array
							'status' => 1
						);

						$this->db->where('id', $id);// ambil id				
						$this->db->update('pbnclp2018_voucher', $data);
						redirect("Code/index");// data di updat
					}
					else{
						redirect("Code/index");
					}
		}

		public function closeitem()
		{
			//if($user_admin->num_rows() == 1){
			$id = $this->uri->segment(3);
			$data = array(
				'status' => 0
				);
				$this->db->where('id', $id);
				$this->db->update('pbnclp2018_voucher', $data);
					redirect('Code/index');
					// } 
					// else 
					// {
					// redirect('Code/index');
					// }
		
	}

		public function delete($id)
		{
			$this->load->model("CodeModel");
			$this->CodeModel->deletecode($id);
			redirect('Code/index');
		}
	}

?>