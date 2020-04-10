<?php

class Test extends Model {

    function __construct() {
        parent::__construct();
    }

    function authanticateAccount($username, $password) {
        $cln_name = htmlentities($username);
        $cln_pass = htmlentities($password);

        $sql = "SELECT 'firstname','lastname', 'passwordHash' FROM 'authors' WHERE emailId = ?";
        $stmt = $this->db->prepare($sql);
        $count = $stmt->execute(Array($cln_name));
        $row = $stmt->fetch();
        $passwordHash = $row[2];
        $is_auth = false;
        if(isset($passwordHash)) {
            $is_auth = password_verify($cln_pass, $passwordHash);
            if($is_auth) {
                $_SESSION['firstname'] = $row[0];
                $_SESSION['lastname'] = $row[1];
                $_SESSION['username'] = $cln_name;

                $update_sql = "UPDATE 'authors' SET 'lastLoginDate' = CURRENT_TIMESTAMP() WHERE 'emailId'=?";
                $upd_stmt = $this->db->prepare($update_sql);
                $upd_stmt->execute(Array($cln_name));
            }
        }

        return $is_auth;
    }

}

?>