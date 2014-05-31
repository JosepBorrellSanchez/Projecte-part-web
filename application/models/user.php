<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('ID, user_login, user_pass');
   $this -> db -> from('wp_users');
   $this -> db -> where('user_login', $username);
   $this -> db -> where('user_pass', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}


