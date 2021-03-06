<?php

class blog extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    function Index () {
        $this->model("BlogModel");
        $posts = $this->BlogModel->getAllPosts();
        $input = Array("post"=> $posts);
        $this->view("template/header");
        $this->view("blog/index", $input);
        $this->view("template/footer");
    }

    function Read($postId) {
         $this->model("BlogModel");  
         $post = $this->BlogModel->getPostById($postId);
         $this->view("blog/header", $post);
         $this->view("blog/posts", $post);
         $this->view("template/footer");


    }

    function Create() {
         $_auth = isset($_SESSION["username"]);

        
          if (!$_auth) {
               header("location: /blog");
               return;
          }


         if($_SERVER["REQUEST_METHOD"] == "POST") {
              $title = $_POST["title"];
              $author = $_SESSION["username"];
              $content = $_POST["content"];
              $this->model("BlogModel");
              $slug=$this->BlogModel->createPost($title,$author,$content);

             header("location: /blog/read" . $slug);

         
           
         } else {
            $this->view("template/header");
            $this->view("blog/create");
            $this->view("template/footer");
           
         }
    }


}


?>
