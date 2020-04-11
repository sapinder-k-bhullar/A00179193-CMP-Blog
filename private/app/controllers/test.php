<?php

class Test extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index () {
        $this->view("template/header");
        //print_r($_SESSION);
        $_auth = isset($_SESSION["username"]);
        if($_auth) {
             $this->view("test/auth");
        } else {
             $this->view("test/noauth");
        }
        //$this->view("test/test");
        $this->view("template/footer");
    } 

    function Login() {
        $this->model("accountmodel");
        $auth = $this->accountmodel->authenticateAccount('simmi08979@gmail.com','55555555');
        if($auth) {
            header("location: /test/");
        } else {
            echo("Not Authenticated!!");
          
            
        }
    }

    function Logout() {
        session_unset();
        session_destroy();
        $_SESSION = Array();
        header("location: /test/");

    }

}

?> 