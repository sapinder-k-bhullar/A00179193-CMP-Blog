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
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->model("accountmodel");
            $cl_name = htmlentities($_POST["username"]);
            $cl_pass = htmlentities($_POST["pass"]);
            $auth = $this->accountmodel->authenticateAccount($cl_name, $cl_pass);
            if($auth) {
                header("location: /test/");
            } else {
                echo("Not Authenticated!!");
            }
        } else {
            $this->view("test/login");
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