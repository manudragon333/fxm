<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userpages extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('userpages/trade');
    }
    
    public function trade() {
        $this->load->view('userpages/trade');
    }
    
    public function account_history() {
        $this->load->view('userpages/account_history');
    }
    
    

}