<?php

class Apiblog extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    function Index () {
        $this->model("BlogModel");
        $post = $this->BlogModel->getAllPosts();
        $input = Array("post"=> $post);
        $this->view("template/header");
        $this->view("blog/index", $input);
        $this->view("template/footer");
    }

    function Read($blogId) {

    }

    function Create() {

    }
}


?>