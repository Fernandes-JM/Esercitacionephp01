<?php

// doppio slash comento su singola riga

    // definiamo di una constante 
    //keyword: define(NOMECONSTANTE, VALORE);
    //per convenzione il nime di una constante e scritta in maiusculo e le parole 
    //separate da un trattino basso "_"
    DEFINE("PI_GRECO,", 3.14);


    //le variablilevengono definite con il dollaro "$"
    //per convenzione il nome di una variabile
    //e fomato nel seguiente modo: $nomeVariabile
    $nomeVariabile;

    /**
     * stringa
     * interi
     * reali
     * boolean
     */
    
    $stringa1 = 'ciao';
    $stringa1 = "mondo";//doppia apici per l'escape dei caracteri

    $stringa3 = '$stringa1 $stringa1';

    $interi = 150;

    $float = 50.115; //numero reale

    $boolean = true;

    $null = null;

    var_dump($interi);