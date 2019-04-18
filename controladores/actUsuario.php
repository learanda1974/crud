<?php
include ("../lib/constantes.php");
include ("../lib/db.php");
include ("../clases/Usuario.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$oUsr=new Usuario($usuario, "", $clave);

if($oUsr->Valida()){
    if($oUsr->Modificar()){
        echo "Usuario Actualizado ".$oUsr->getNombre();
    }    
}
else{
    echo "Usuario no existe";
}