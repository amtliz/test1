<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author Dev
 */



class loginController extends MysqlConection  {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function comparar($user) {
        $query="SELECT count(*) as contador from usuario where usuario like '$user'";
        $result = parent::RawQuery($query);
        if ($result[0]['contador'] == 1) {
            return true;
        } else
            return false;
    }
    
    public function correcto($usuario, $password){
        $query="SELECT u.usuario, u.password FROM usuario as u WHERE u.usuario='$usuario' AND u.password='$password'";
        $result = parent::RawQuery($query);
        if (count($result)>=1){
        session_start();
        $_SESSION['user']=$result[0];
        }
    
     }
}

?>