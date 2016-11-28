<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    private $nome,$nasc,$rua,$numero,$bairro,$estado,$cidade,$cep,$email,$login,$senha;
    
    public function __init__($nome,$nasc,$rua,$numero,$bairro,$estado,$cidade,$cep,$email,$login,$senha){
        $this->nome = $nome;
        $this->nasc = $nasc;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    public function setLogin($l) {
        $this->login = $l;
    }
    
    public function setSenha($s) {
        $this->senha = $s;
    }
    
    public function mostrar(){
        echo $this->nome;
        echo $this->login;
    }
    
    public function existeUsuario(){
        $this->db->select('*');
        $this->db->from('Usuario');
        $this->db->where('login', $this->login );
        $this->db->where('senha', $this->senha );
            $query = $this->db->get();
        return $query->num_rows() == 1;
    }
    
    public function cadastrarUsuario($data) {
        return $this->db->insert('Usuario', $data);
    }
    
    public function toArray(){
        $data = array();
        $data["nome"]   = $this->nome;
        $data["login"]  = $this->login;
        $data["senha"]  = $this->senha;
        $data["nasc"]   = $this->nasc;
        $data["rua"]    = $this->rua;
        $data["numero"] = $this->numero;
        $data["bairro"] = $this->bairro;
        $data["estado"] = $this->estado;
        $data["cidade"] = $this->cidade;
        $data["cep"]    = $this->cep;
        $data["email"]  = $this->email;
        return $data;
    }
}

?>