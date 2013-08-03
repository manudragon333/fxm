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
    
    public function design() {
        $this->load->view('userpages/design');
    }
    
    public function homenew() {
        $this->load->view('userpages/homenew');
    }

    public function depositnew() {
        $this->load->view('userpages/depositnew');
    }

    public function depositnew_text() {
        $this->load->view('userpages/depositnew_text');
    }

    public function withdrawalnew() {
        $this->load->view('userpages/withdrawalnew');
    }
    
    public function withdrawalnewform() {
        $this->load->view('userpages/withdrawalnewform');
    }

    public function report_fundsnew() {
        $this->load->view('userpages/report_fundsnew');
    }

    public function report_tradenew() {
        $this->load->view('userpages/report_tradenew');
    }

    public function upload_documents() {
        $this->load->view('userpages/upload_documents');
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