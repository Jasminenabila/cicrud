<?php
class Login extends CI_Controller{
	public function index(){
		$this->load->view('view_login');
	}

	public function process(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		if ($user=='juhi' && $pass=='123') 
		{
			//declaring session
			$this->session->set_userdata(array('user'=>$user));
			$this->load->view('home');
		}
		else{
			$data['error'] = 'Your Account is Invalid';
			$this->load->view('view_login', $data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect("Login");
	}
}


?>