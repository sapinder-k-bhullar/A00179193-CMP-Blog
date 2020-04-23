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
         $sql = "SELECT slug, title, content, author, post_date FROM post WHERE slug = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(Array($postId));
        return $stmt->fetch();
    }

}

?>