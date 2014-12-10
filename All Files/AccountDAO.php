<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountDAO
 *
 * @author Wellesley
 */
class AccountDAO {
    
    private $_mysqli;

    function __construct() {
        
    }

    function __destruct() {
        
    }
    
    public function checkPasswd($user, $password) {
        // put code to access database
        $con = $this->getDBConnection();
        if (empty($user) || empty($password)) {
            return false;
        }
        $result = $con->query("SELECT COUNT(UserID) FROM user where
             Username='$user' AND Password = '$password'");
        $con->close();
        $value = "0";
        while ($row = $result->fetch_row()) {
            $value = $row[0];
            if (((int) $value) == 1) {
                return true;
            }
        }
        return false;
    }
    
    
     public function addAccount($lastname, $firstname, $address, $city, $password, $username, $email, $state) {
        if (empty($lastname) || empty($firstname) || empty($address) ||
                empty($city) || empty($password) || empty($username) ||
                empty($email) || empty($state)) {

            return false;
        } else {
            $con = $this->getDBConnection();
            // we are going to check if an account already exists.
            $result = $con->query("select count(UserID) from user where Username='$username';");
            $row = $result->fetch_row();
            if ($row[0] > 0) {
                // this means that an account already exists.
                $con->close();
                return false;
                
            } else {
                $result2 = $con->query("insert into user (LastName,FirstName,"
                        . "Address,City,Password,Username,Email,State) values ("
                        . "'$lastname','$firstname','$address','$city','$password',"
                        . "'$username','$email','$state');");
                $con->close();

                return $result2;
            }
        }
    }

    public function deleteAccount($username) {
        $con = $this->getDBConnection();
        $result = $con->query("delete from user where Username='$username';");
        $con->close();
        return $result;
    }
    
    
    
}
