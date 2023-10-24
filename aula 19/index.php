<?php


$materias = array(
    array("BD",8),
    array("Análise",6),
    array("CC",7),
    array("FrontEnd",5),
    array("ProgMobile",10),
    array("PT",7),
    array("Mat",6),
    array("Hist",8),
    array("Geografia",9),
    array("Quimica",5),
    array("Biologia",9),
    array("Sociologia",10),
    array("Projeto de Vida",10),
    array("EdFinan",8),
    array("Ingles",7),
);

foreach($materias as $materia){
    echo $materia[0]."-".$materia[1]."<br/>";
}





?>