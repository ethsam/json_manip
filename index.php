<?php

    $objetSearch = json_decode('{"from":{"date":"2019-05-18"},"to":{"date":"2019-05-25","codePromo":"T"}}'); //json d'origine
    $coderecuperer = "testpromo"; //code promo récupérer
    
    /* tentative de création d'un json avec la valeur code promo modifier */
    $objetSearch = '{"from":{"date":"'.$objetSearch->from->date.'"},"to":{"date":"'.$objetSearch->to->date.'","codePromo":"'.$coderecuperer.'"}}';

    echo json_encode($objetSearch); //encode et affiche

?>


