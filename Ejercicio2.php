<?php
#RECOGIDA DE DATOS
$text1 = $_POST["texto1"];
$text2 = $_POST["texto2"];
$text3 = $_POST["texto3"];
$selector = $_POST["operacion"];

#FUNCIÓN CONVERTIR A MAYÚSCULAS
function mayusculas($text1){
    $res = strtoupper($text1);
        print "El texto en mayúsculas queda así: ".$res."</br>";
}
#FUNCIÓN DESORDENAR
function desordenar($text1){
    $res = str_shuffle($text1);
        print "El texto desordenado es: ".$res."</br>";
}
#FUNCIÓN METER EN ARRAY
function convertir($text1){
    $res = str_split($text1);
        print_r ($res);
}
#FUNCIÓN CONTAR CARACTERES
function cuentacaracteres($text1){
    $res = strlen($text1);
        print "El número de caracteres es: ".$res."</br>";
}
#FUNCIÓN REEMPLAZAR
function reemplazar($text3,$text2,$text1){
    $res = str_replace($text3,$text2,$text1);
        print "El nuevo texto es: ".$res."</br>";
}


switch ($selector) {
    case 'mayusculas':
        mayusculas($text1);
        break;
    case 'desordenar':
        desordenar($text1);
        break;
    case 'convertir':
        convertir($text1);
        break;
    case 'cuentacaracteres':
        cuentacaracteres($text1);
        break;
    case 'reemplazar':
        reemplazar($text3,$text2,$text1);
        break;
    default:
    echo "Elija otra selección";
        break;
}

?>