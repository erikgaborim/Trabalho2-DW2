<?php
    Class LoginController Extends Controller{
        public function login(){
            
            $dados = array();

            if(!isset($_COOKIE['erro'])){
                setcookie('email');
            }
            $this->view("login", $dados);
        }

        public function logar(){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $model = new Usuario();
            $usuario = $model->getByEmail($email);

            if($usuario == null){
                setcookie("erro", "E-mail não encontrado! Tente novamente.");
                setcookie("email", $email);
                $this->redirect("login/login");
            }else{
                if(md5($senha) != $usuario['senha']){
                    setcookie("erro", "Senha não encontrada! Tente novamente.");
                    setcookie("email", $email);
                    $this->redirect("login/login");
                }else{
                    setcookie("erro");
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['id_usuario'] = $usuario['id'];
                    $this->redirect("/");
                }
            }
        }

        public function logout(){
            if(!isset($_SESSION)){
                session_start();
            }
            session_destroy();
            $this->redirect("login/login");
        }
    }
?>