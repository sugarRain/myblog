 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {


   public function save($username, $email, $message){
      $this -> db -> insert('t_message', array(
          'name' => $username,
          'email' => $email,
          'content' => $message
      ));
   }

   public  function  get_by_username($username){
      return $this -> db -> get_where('t_message', array(
          'name' => $username
      )) -> row();
   }

}




















