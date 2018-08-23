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

			$this->CodeModel->insert_code('voucher', $data);
			redirect('code/index');
		}

		public function openitem() // buka item supaya voucher bisa digunakan
		{
			$ipaddress = $this->input->ip_address();//ngeload ip address
			if($_SERVER['SERVER_ADDR'] == "103.248.57.44" || $_SERVER['SERVER_ADDR'] == "10.10.118.17")//masukin server nya berupa method server dengan kondisi if else
			{
				if($ipaddress == "115.85.78.13" || $ipaddress == "10.11.12.13" || $ipaddress == "10.11.12")// baru kondisi if else dengan ip address 
				{
					$id = $this->session->user_data('id'); // buat variabel id yang mengambil id dengan memakai session
					$useradmin = $this->db->query('select * from voucher where id = "'.$id.'"'); // buat variabel useradmin ambil berdasarkan id 
					if($useradmin->num_rows() == 1) // buat kondisi dri useradmin dengan baris pertama bernilai 1
					{
						$id = $this->url->segment(3); // segment 3 yaitu <php item yang erada di view list
						$cekstatusdulu = $this->db->query('select * status from voucher where status = 1 ')->num_rows(); // cek status yang bernilai 1 saja di table voucher
						if($cekstatusdulu > 1)// buat kondisi yang diatas apakah sudah bener apa belum
						{
							//echo $cekstatusdulu; // buat cek apakah sudah bisa di cek apa belum
							$data = array( // datanya disimpan dalam array
								'status' => 1
							);

							$this->db->where('id', $id);// ambil id				
							$this->db->update('voucher', $data);	// data di update
						}

						redirect('code / list'); // redirect halaman list
					}
					else{
						redirect('code/home'); // ke halaman home
					}
				}
			}
			else{
				redirect('https://jasmine.garena.co.id/haha');
				die();
			}
		}

		public function closeitem()
		{
			$ipaddress = $this->input->ip_address();
			if($_SERVER['SERVER_ADDR'] == "10.11.12" ||$_SERVER['SERVER_ADDR'] == "10.11.122.12" )
			{
				if($ipaddress == "10.12.13" || $ipaddress == "10.12.12" || $ipaddress == "10.13.14")
				{
					$id = $this->session->user_data('id');
					$useradmin = $this->db->query('select * from voucher where id =  "'.$id.'"');
					if($useradmin->num_rows() == 1)
					{
						$id = $this->url->segment(3);
						$data = array(
							'status' => 0
						);
						$this->db->where('id', $id);
						$this->db->update('voucher', $data);
					}
					else{
						redirect('code/list');
					}
				}
				else{
					redirect ('code/home');
				}
			}
			else{
				redirect('https://jasmine.garena.co.id/hoho');
			}
				
		}

		public function update_data()
		{

		}

		public function hapus(){
		if($this->uri->segment(3)) $this->codeModel->delete(array('id'=>$this->uri->segment(3)));
		//kemudian dialihkan ke controller Buku method index
		redirect('code');
	}

}

?>