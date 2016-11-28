<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    private $id, $nome, $preco, $imagem;
    
    public function __init__($id, $nome, $preco, $imagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function __construtct(){
    
        parent::__construct();
    }
    public function pegarTodos(){
        return $this->db->get('bolo')->result();
        }
    public function pegar($id){
        $this->db->where('id', $id);
        return $this->db->get('bolo')->row();
    }
    }
?>

