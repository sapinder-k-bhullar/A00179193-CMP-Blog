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

    function Read($postId) {
         $this->model("BlogModel");  
         $posts = $this->BlogModel->getPostById($postId);
         $this->view("template/header", $posts);
         $this->view("blog/posts", $posts);
         $this->view("template/footer");


    }

    function Create() {

    }
}


?>