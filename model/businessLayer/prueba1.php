<?php

function __autoload($nombre_clase) {
    include 'Class_'.$nombre_clase . '.php';
}
$sergio =new Persona("090wrwec","Gonzalez","Sergio");
echo $sergio-> getNombre();
?>