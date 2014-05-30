<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Canviarpassword extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
	 
	 $this->user->login($username, $password);
 }
}
