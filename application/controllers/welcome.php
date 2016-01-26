<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	public function single()
	{	
		$blog_id = $this -> input -> get('blog_id');
		$this -> load -> model('blog_model');
		$this -> load -> model('comment_model');
		$result1 = $this -> blog_model -> get_single_by_blog_id($blog_id);
		$result2 = $this -> comment_model -> get_by_blog_id($blog_id);

		$data = array(
			'blogs' => $result1,
			'comments' => $result2
		);
		$this -> load -> view('single',$data);
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function message()
	{
		$username = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		
		if($username == '' || $email == '' || $message == ''){
			echo 'fail';
		}else{
			$this->load->model('message_model');
			$this->message_model->save($username,$email,$message);
			echo 'success';
		}
	}
	public function comment()
	{
		$username = $this->input->post('name');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$subject = $this->input->post('subject');
		$blog_id = $this->input->get('blog_id');
		$this->load->model('comment_model');
		$this->comment_model->save($blog_id,$username,$email,$website,$subject);
		$this->single();
	}
	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
			'data' => $result,
			'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */