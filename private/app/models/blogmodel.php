<?php

class Blogmodel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getAllPosts() {
        $sql = "SELECT slug, title, author, post_date FROM post";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getPostById($postId) {
        $sql = "SELECT `title`, `content`, `author`, `post_date` FROM post WHERE slug = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(Array($postId));
        return $stmt->fetch();
    }

    function createPost($title,$author,$content){
    $slug = (str_replace(" ","-", strtolower($title)).random_int(1000, 999999));
    $sql = "INSERT INTO post(slug, title, content, author) values (?,?,?,?)";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($slug, $title, $content, $author));
    return $slug;


    }
}
?>