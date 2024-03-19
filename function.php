<?php
    // creo una funzione per generare casualmente una password
    function generatePassword($length){
        // inserisco i caratteri possibili per creare la password in una variabile stringa
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=";
        // dichiaro la variabile password come una stringa vuota da popolare in seguito
        $password = " ";
        for($i = 0; $i < $length; $i++){
            // aggiungo un carattere casuale dalla stringa characters a password
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;

    }    
?>