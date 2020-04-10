<?php

class Test extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index () {
        $this->view("template/header");
        $this->view("test/test");
        $this->view("template/footer");
    } 

    function Login() {
        $this->model("usermodel");
        $auth = $this->accountmodel->authenticateUser('simmi08979@gmail.com','55555555');
        if($auth) {
            echo("Authenticated!!");
        } else {
            echo("Not Authenticated!!");
        }
    }

}

?>