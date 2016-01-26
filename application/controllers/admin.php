<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin/login');
    }

    public function check_login(){
        //1. 接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');


        //2. 查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //跳转
        if($row){
            $this->load->view('admin/admin-index');
        }else{
            $this->load->view('admin/login');
        }
    }

    public  function admin_mgr(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all();
//        if($result){
            $data = array(
                'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr', $data);
//        }

    }
    public  function admin_contact(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_message();
//        if($result){
            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-contact', $data);
//        }

    }
    public  function admin_text(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_messages();

            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-text', $data);


    }
    public  function admin_tmanage(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_manage();

            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-tmanage', $data);


    }
    public  function admin_edit(){
        $blog_id = $this->input->get('blog_id');
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_message($blog_id);
            $data = array(
                'blogs' => $result
            );
            $this -> load -> view('admin/admin-edit', $data);


    }


    public  function  delete_admin(){
        $admin_id = $this -> input -> get('admin_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete($admin_id);
        $this -> admin_mgr();
    }
    public  function admin_comm(){
        $blog_id = 1;
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_comm_by_blog_id($blog_id);
            $data = array(
                'comments' => $result
            );
            $this -> load -> view('admin/admin-comm', $data);
    }

    public  function  delete_comm(){
        $comm_id = $this -> input -> get('comm_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_comm($comm_id);
        $this -> admin_comm();
    }

    public  function admin_msg(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_message();
            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-msg', $data);
    }

    public  function  delete_msg(){
        $msg_id = $this -> input -> get('msg_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_msg($msg_id);
        $this -> admin_msg();
    }
    public  function  delete_text(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_text($blog_id);
        $this -> admin_text();
    }
    public  function  delete_tmanage(){
        $comment_id = $this -> input -> get('comment_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_tmanage($comment_id);
        $this -> admin_tmanage();
    }
    public  function  delete_contact(){
        $contact_id = $this -> input -> get('contact_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_contact($contact_id);
        $this -> admin_contact();
    }
    public function comment()
    {
        $username = $this->input->post('name');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $blog_id = $this->input->get('blog_id');
        $this->load->model('admin_model');
        $this->admin_model->save_blog($username,$title,$content,$blog_id);
        $this->admin_text();
    }
     
    public function text_add()
    {
        $this->load->view('admin/admin-textadd');
    }
     public function text_adds()
    {
        $username = $this->input->post('name');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $blog_img = $this->input->post('blog_img');
        $this->load->model('admin_model');
        $this->admin_model->textadd($username,$title,$content,$blog_img);
        $this->admin_text();

    }
    public function addmain()
    {
        $this->load->view('admin/admin-addmain');
    }
     public function addmains()
    {
        $username = $this->input->post('name');
        $password = $this->input->post('password');
        $admin_img = $this->input->post('admin_img');
        $this->load->model('admin_model');
        $this->admin_model->addmain($username,$password,$admin_img);
        $this->admin_mgr();

    }
     

}



















