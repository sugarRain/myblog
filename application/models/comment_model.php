<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {


   public function save($blog_id,$username, $email, $website, $subject){
      $this -> db -> insert('t_comment', array(
          'blog_id' => $blog_id,
          'name' => $username,
          'email' => $email,
          'website' => $website,
          'subject' => $subject,
      ));
   }

   public  function  get_by_username($username){
      return $this -> db -> get_where('t_comment', array(
          'name' => $username
      )) -> row();
   }
   public function get_by_blog_id($id){
      $data = array( 'blog_id' => $id );
      $this -> db ->order_by('add_time','desc');
      return $this -> db -> get_where('t_comment',$data) -> result();
      // var_dump($rs);die;
   }

}