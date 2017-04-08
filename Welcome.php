<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data_['data'] = '0';
		$this->load->view('template/header');
		$this->load->view('template/navigation', $data_);
		$this->load->view('welcome_message', $data_);
		$this->load->view('template/footer');
	}
	
	public function create_acc()			#added new function for creating account
	{
		//echo "reached create_acc()";
		
		$this->load->model('add_user_model');
		if (isset($_POST['user_id'])) 
		{
			$user_name = $_POST['user_id'];
		}

		if (isset($_POST['password'])) 
		{
			$password = $_POST['password'];
		} 
		$data_['data']= $this->add_user_model->addUser($user_name,$password);
		$this->signed_in($data_);
	}
	
	public function sign_out($var="")
	{
		$data_['data'] = '0';
		$this->load->view('template/header');
		$this->load->view('template/navigation', $data_);
		$this->load->view('welcome_message', $data_);
		$this->load->view('template/footer');
	}
	
	public function sign_in($var="")
	{
		$this->load->model('user_model');
		$flg1 = 0;
		$flg2 = 0;
		
		if (isset($_POST['user_id'])) 
		{
			$user_name = $_POST['user_id'];
			$flg1 = 1;
		}

		if (isset($_POST['password'])) 
		{
			$password = $_POST['password'];
			$flg2 = 1;
		}
		if($flg1 == 1 and $flg2 == 1){
			$data_['data'] = $this->user_model->getUser($user_name,$password) ;
			
			if($data_['data'] == '1'){
				$this->signed_in($data_);
			}
			else{
				$this->invalid_acc();
			}
		}
		else{
			$this->sign_out();
		}
		
		
		#$data_['data'] = '1';#['branch'] = 'CSE';
		#else{
			
		#	if ($sem<=8 and $sem >=1 ){
		#		$data['sem'] = $sem;
		#		$this->subject($data['branch'], $sem);
		#	}
		#}
	}
	
	private function invalid_acc(){
		
		$dummy['data']= '2';
		$this->load->view('template/header');
		$this->load->view('template/navigation',$dummy);
		$this->load->view('go_back');
		$this->load->view('template/footer');
	}
	
	public function cse($sem="")
	{
		$data['branch'] = 'CSE';
		
		if ( $sem == ''){
			$this->semester($data);
		}else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	public function ece($sem="")
	{
		$data['branch'] = 'ECE';
		
		if ( $sem == ''){
			$this->semester($data);
		}
		else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	public function eee($sem="")
	{
		$data['branch'] = 'EEE';
		
		if ( $sem == ''){
			$this->semester($data);
		}
		else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	
	
	
	
	private function book()
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('book/book_template',$data);
		$this->load->view('template/footer');
	}
	
	public function subject($branch,$sem)
	{
		$this->load->model('subject_model');
		
		$data['branch'] = $branch;
		$data['semester'] = $sem;
		$data['subjects'] = $this->subject_model->getSubjects($branch,$sem) ;
		
		
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('subject/sub_template',$data);
		$this->load->view('template/footer');
	}
	
	private function semester($data)
	{
		$data_for_nav['data'] = '0';
		$this->load->view('template/header');
		$this->load->view('template/navigation', $data_for_nav);
		$this->load->view('semester/sem_template',$data);
		$this->load->view('template/footer');
	}
	public function signed_in($data)
	{	
		 
		$this->load->view('template/header');
		$this->load->view('template/navigation', $data);
		$this->load->view('welcome_message',$data);
		$this->load->view('template/footer');
	}
	
	public function register_page()
	{	
		$dummy['data']= '2';
		$this->load->view('template/header');
		$this->load->view('template/navigation',$dummy);
		$this->load->view('create_account');
		$this->load->view('template/footer');
	}
}
