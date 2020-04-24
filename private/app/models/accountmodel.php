<?php

class accountmodel extends Model {

    function __construct() {
        parent::__construct();
    }

    function authenticateAccount($username, $password) {
        $cl_name = $username;
        $cl_pass = $password;

        $sql = "SELECT `firstname`, `lastname`, `pass_hash` FROM `userauthors` WHERE `email` = ?";
        $stmt = $this->db->prepare($sql);
        $count = $stmt->execute(Array($cl_name));
        $row = $stmt->fetch();
        $pass_hash = $row[2];
        $is_auth = false;
        if(isset($pass_hash)) {
            $is_auth = password_verify($cl_pass, $pass_hash);
            if($is_auth) {
            
                $_SESSION['firstname'] = $row[0];
                $_SESSION['lastname'] = $row[1];
                $_SESSION['username'] = $cl_name;

                $upd_sql = "UPDATE 'userauthors' SET 'last_login_date' = CURRENT_TIMESTAMP() WHERE 'email'= ? ";
                $upd_stmt = $this->db->prepare($upd_sql);
                $upd_stmt->execute(Array($cl_name));
            }
        }

        return $is_auth;
    }

}

?>