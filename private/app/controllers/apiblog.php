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
         $this->view("blog/header", $posts);
         $this->view("blog/posts", $posts);
         $this->view("template/footer");


    }

    function Create() {
         $_auth = isset($_SESSION["username"]);

          if ($_auth) {
               header("location: /apiblog");
               return;
          }


         if($_SERVER["REQUEST_METHOD"] == "POST") {
         
           
         } else {
             echo("Hii");
           
         }
    }
}


?>