<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chatbot extends CI_Controller
{

        public function index()
        {
                $this->load->helper('url');
                $this->load->view('Chatbot/index');
        }
}
