<?php
class conexion{
var $serv="localhost";
var $usuario="root";
var $contra="";
var $conexi;
function conecta()
{
$s=$this->serv;
$u=$this->usuario;
$c=$this->contra;
$conex=mysql_connect($s,$u,$c);
$this->conexi=$conex;
}

}
$cono= new conexion();
$cono->conecta();
$c=$cono->conexi;
$select=mysql_select_db("webcam",$c);
?>

