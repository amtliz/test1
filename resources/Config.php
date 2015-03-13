<?php

/**
 * @author Rolando Arriaza <rolignu90@gmail.com>
 * @copyright (c) 2015, Rolignu
 * @version 1.0
 * @access public
 * 
 * SCRIPT CONFIG EN EL CUAL SE EJECUTA TODAS LAS CONFIGURACIONES
 * DE LA BASES DE DATOS EN DADO CASO EXISTA DE FORMA RELATIVA
 * 
 * 
 */

$CONFIG_ = array(
    
    "DB_MYSQL" =>[
         "classname" => '',//tipo de la clase
	 'driver' => "mysql",//driver de conexion , defecto mysql
	 'persistent' => false,//datos persistentes falso
	 'host' => "mundocontables.com",//hosting
	 'user' => "lieison2014", //usuario
	 'password' => "lieison2015",//password de la base de datos si es requerido
	 'database' => "bddtest", //base de datos a utilizar
         'port' => "3306", //puerto de la base de datos si es requerido
	 'prefix' => false, //uso de prefijos defecto falso
	 'encoding' => 'utf8',//codificacion utf-8 segun normalizaciones
	 'timezone' => 'UTC',//zona horaria
	 'cacheMetadata' => true,//uso de metadatos
         'prefix'=> "lieisoft_"
    ]
      
)



?>



