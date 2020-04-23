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

   

}

?>