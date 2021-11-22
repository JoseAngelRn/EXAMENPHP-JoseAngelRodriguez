<?php
#Recogidad e variables
$num = $_POST["Numero"];
$selector = $_POST["operacion"];
$aleatorio = $_POST["opcion2"];

#FUNCIONES
function decabin($num){
    $res = decbin($num);
    print "El nuevo número es: ".$res."</br>";
}

function decaoct($num){
    $res = decoct($num);
    print "El nuevo número es: ".$res."</br>";
}

function decahex($num){
    $res = dechex($num);
    print "El nuevo número es: ".$res."</br>";
}

function binadec($num){
    $res = bindec($num);
    print "El nuevo número es: ".$res."</br>";
}

function octadec($num){
    $res = octdec($num);
    print "El nuevo número es: ".$res."</br>";
}

function hexadec($num){
    $res = hexdec($num);
    print "El nuevo número es: ".$res."</br>";
}

function aleaatorio($aleatorio){
    $res = rand(0, 2048);
    print "El número aleatorio que ha tocado es: ".$res."<br>";
}

switch ($selector) {
    case 'decbin':
        decabin($num);
        break;
    case 'decoct':
        decaoct($num);
        break;
    case 'dechex':
        decahex($num);
        break;
    case 'bindec':
        binadec($num);
        break;
    case 'octdec':
        octadec($num);
        break;
    case 'hexdec':
        hexadec($num);
        break;
    default:
    echo "Elija otra selección";
        break;
    }
?>
 