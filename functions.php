<?php 

$lunghezza = $_GET["lunghezza"];

function randomPassword($lunghezza) {

    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz$%&/_()';

    if( $lunghezza <= 0){
        return "Inserisci i campi";
    } else{
        return substr(str_shuffle($data), 0, $lunghezza );
    }
}

?>