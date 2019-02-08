<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function log()
    {
        
        $this->load->view('login/index');
        
    }
    public function index()
    {
        //tampung masukkan form
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->session->set_userdata('user',$user);



        if($user == 'admin' && $pass == '123'){
            $date['username'] = $user;
            $date['password'] = $pass;
           //buat sessoion
            //redirect 
            $this->load->view('login/admin_page', $date);            
           //redirect('c_login/admin_page','refresh');
        }
        else{
            $this->load->view('c_login/');
        }
    }
    public function admin_page(){
        $this->load->view('login/admin_page');
        
    }
    public function logout(){
        $this->session->unset_userdata(array('username' => ''));
        
        $this->load->view('login/index');
        
    }

}

/* End of file Controllername.php */



?>