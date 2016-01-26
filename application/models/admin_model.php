<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );
        return $this -> db -> get_where('t_admin', $data) -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }
    public function get_comm_by_blog_id($blog_id){
        $data = array(
            'blog_id' => $blog_id
        );
        return $this -> db -> get_where('t_comment',$data) -> result();
    }

    public  function save($admin_name, $admin_pwd){

    }

    public function textadd($username,$title,$content,$blog_img){
      $this -> db -> insert('t_blog', array(
          'author' => $username,
          'title' => $title,
          'content' => $content,
          'blog_img' => $blog_img
      ));
   }
    public function addmain($username,$password,$admin_img){
      $this -> db -> insert('t_admin', array(
          'admin_name' => $username,
          'admin_pwd' => $password,
          'admin_photo' => $admin_img
      ));
   }

    public  function delete($admin_id){
        $this -> db -> delete('t_blog', array('author' => $admin_id));
        $this -> db -> delete('t_admin', array('admin_id' => $admin_id));
    }
    public function get_all_message(){
        return $this -> db -> get('t_message') -> result();
    }
     public function get_all_messages(){
        return $this -> db -> get('t_blog') -> result();
    }
    public function get_all_manage(){
        return $this -> db -> get('t_comment') -> result();
    }
    public function get_message($blog_id){
        $data = array(
            'blog_id'=>$blog_id
        );
        return $this -> db -> get_where('t_blog',$data) -> result();
    }

    public  function delete_comm($comm_id){
        $this -> db -> delete('t_comment', array('comm_id' => $comm_id));
    }

    public  function delete_msg($msg_id){
        $this -> db -> delete('t_message', array('message_id' => $msg_id));
    }
    public  function delete_text($blog_id){
        $this -> db -> delete('t_blog', array('blog_id' => $blog_id));
    }
    public  function delete_contact($contact_id){
        $this -> db -> delete('t_message', array('message_id' => $contact_id));
    }
    public  function delete_tmanage($comment_id){
        $this -> db -> delete('t_comment', array('comment_id' => $comment_id));
    }
    public function save_blog($username,$title,$content,$blog_id){
      $this -> db -> where('blog_id',$blog_id);
      $this -> db -> update('t_blog', array(
          'author' => $username,
          'title' => $title,
          'content' => $content
          

      ));
   }


}



















