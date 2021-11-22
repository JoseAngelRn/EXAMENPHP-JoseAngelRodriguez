<?php
$selector = $_POST["opciones"];
$entradas = $_POST["entradas"];

    $en1 = $entradas["en1"];
    $en2 = $entradas["en2"];
    $en3 = $entradas["en3"];
    $en4 = $entradas["en4"];
    $en5 = $entradas["en5"];



#Quitar el primero
function primero($entradas){
    $res = array_shift($entradas);
    print_r($entradas);
}
#quitar el ultimo
function ultimo($entradas){
    $res = array_pop($entradas);
    print_r($entradas);
}
#Función ordenar
function Ordenar($entradas){
    $res = array_flip($entradas);
        print_r($entradas);
}
#divir array
function divide($entradas){
    $res = array_chunk($entradas, 2);
    print_r($entradas);
}

#SELECTOR
switch ($selector) {
    case 'primero':
        primero($entradas);
        break;
    case 'ultimo':
        ultimo($entradas);
        break;
    case 'Ordenar':
        Ordenar($entradas);
        break;
    case 'divide':
        divide($entradas);
        break;
    default:
        echo "Elija otra opción";
        break;
    }
?>