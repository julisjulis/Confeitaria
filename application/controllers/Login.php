<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function formulario(){
        $this->load->view('entrar');
    }
    
    public function cadastrar(){
        $this->load->view('cadastrar');
        
        if(!empty($_POST['nome'])) {
            $this->load->model('UserModel','user');
            $nome = $this->input->post("nome");
            $nasc =  $this->input->post("dia").$this->input->post("mes").$this->input->post("ano");
            $rua =  $this->input->post("rua");
            $numero =  $this->input->post("numero");
            $bairro =  $this->input->post("bairro");
            $estado =  $this->input->post("estado");
            $cidade =  $this->input->post("cidade");
            $cep =  $this->input->post("cep").$this->input->post("cep2");
            $email =  $this->input->post("email");
            $login = $this->input->post("login");
            $senha = $this->input->post("senha");
            
            $this->user->__init__($nome,$nasc,$rua,$numero,$bairro,$estado,$cidade,$cep,$email,$login,$senha);
            
            $data = $this->user->toArray();
    
            $b = $this->user->cadastrarUsuario($data);
            if($b == 1){
                //PAGINA INICIAL
                //header("location: /index.php/controller/metodo");
                header("location: /");
            }
        }
    }
    
    public function cadastro(){
        
    }
    
    public function logar(){
        
        $this->load->view('entrar');
        
        if(!empty($_POST['uname']) && !empty($_POST['psw'])) {
            $login = $this->input->post("uname");
            $senha = $this->input->post("psw");
            
            $this->load->model('UserModel','user');
            
            $this->user->setLogin($login);
            $this->user->setSenha($senha);
            
            if ( $this->user->existeUsuario() ){
                $this->session->set_userdata("_LOGIN",$login);
                header("location: /index.php/confeitaria/pedidos");
            }else{
                echo "Erro de autenticacao";
            }
        }
        
    }
    
    public function sair(){
        $this->session->unset_userdata('_LOGIN');
        header("location: /");
    }
}
?>