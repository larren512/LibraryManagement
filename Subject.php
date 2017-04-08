<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {
	public function books($book_list_id = "")
	{
		$this->load->model('book_model');
		
		if ($book_list_id == ""){
			
			$this->load->view('index.html');
			
		}else {
			
			$data['subject_id'] = $book_list_id ;
			$data['books'] = $this->book_model->getBooks($book_list_id) ;
			
			$this->load->view('template/header');
			$this->load->view('template/navigation');
			$this->load->view('book/book_template.php',$data);
			$this->load->view('template/footer');
	
		}
	}
	
	


}
