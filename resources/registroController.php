<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registroController
 *
 * @author Dev
 */
class registroController extends MysqlConection {
    //put your code here
     public function __construct() {
        parent::__construct();
    }
   
     public function setUser($usuario, $password){
        return parent::Insert("usuario",array("usuario"=>$usuario , "password"=>$password));
     }
    
}
