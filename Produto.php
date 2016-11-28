<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    private class Produto extends CI_Controller{
        public function index($index = 0){
            $data['result'] = $this->bolo->pegarTodos();
            $this->load->view('pedidos', $data);
        }
    }
?>