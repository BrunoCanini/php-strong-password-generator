<?php 

$lunghezza = $_GET["lunghezza"];

function randomPassword($lunghezza) {

    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz$%&/_()';

    if( $lunghezza <= 0){
        return "Nessun parametro valido inserito";
    } else{
        return substr(str_shuffle($data), 0, $lunghezza );
    }
}

?>