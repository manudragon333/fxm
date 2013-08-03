<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userpages extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('userpages/homenew');
    }
    
    public function trade() {
        $this->load->view('userpages/trade');
    }
    
    public function account_history() {
        $this->load->view('userpages/account_history');
    }
    
    /*
     * NEW START
     */
    
    
    public function design() {
        $this->load->view('userpages/design');
    }
    
    public function homenew() {
        $this->load->view('userpages/homenew');
    }

    public function depositnew() {
        $this->load->view('userpages/depositnew');
    }

    public function depositnew_form() {
        $this->load->view('userpages/depositnew_form');
    }

    public function withdrawalnew() {
        $this->load->view('userpages/withdrawalnew');
    }
    
    public function withdrawalnew_form() {
        $this->load->view('userpages/withdrawalnew_form');
    }

    public function trading_history() {
        $this->load->view('userpages/trading_history');
    }
    
    public function open_positions() {
        $this->load->view('userpages/open_positions');
    }
    
    public function deposits_withdrawls() {
        $this->load->view('userpages/deposits_withdrawls');
    }
    
    public function change_leverage() {
        $this->load->view('userpages/change_leverage');
    }
    
    public function internal_transfer() {
        $this->load->view('userpages/internal_transfer');
    }

    public function validation_documents() {
        $this->load->view('userpages/validation_documents');
    }

    public function additional_documents() {
        $this->load->view('userpages/additional_documents');
    }
    
    public function trading_signals() {
        $this->load->view('userpages/trading_signals');
    }
    
    public function support_request() {
        $this->load->view('userpages/support_request');
    }
    
    
    
    public function upload_documents_handler(){
        // error_reporting(E_ALL | E_STRICT);
        $uploadOptions=array(
            'max_file_size'=>(1 * 1024 * 1024),
            'accept_file_types'=>'/.(gif|jpe?g|png|pdf|doc|docx|ppt|pptx|xls|xlsx|csv|zip)$/i'
        );
        $this->load->library('JQ_UploadHandler',$uploadOptions);
        // $upload_handler = new UploadHandler();
    }
    
    

}