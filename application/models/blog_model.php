<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        return $this -> db -> get() -> result();
    }

   public function get_by_page($page){
       $this -> db -> select("*");
       $this -> db -> from('t_blog blog');
       $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
       $this -> db -> limit(6, $page);
       $this -> db ->order_by('blog_id');
       return $this -> db -> get() -> result();
   }
    public function get_single_by_blog_id($id){
      $data = array( 'blog_id' => $id );
      $this -> db -> select("*");
      $this -> db -> from('t_blog blog');
      $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
      $this -> db -> where('blog.blog_id',$id);
      return $this -> db -> get() -> result();
    }

}



















