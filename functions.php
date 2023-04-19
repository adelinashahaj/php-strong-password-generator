
<?php
       
       function getCharacter($string): string {
           $lunghezza = strlen($string) - 1;
           $randomNumber = rand(0, $lunghezza);
           return $string[$randomNumber];
       }

       function generaStringaRandom($lunghezza) {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ()=?^*.;,-_#@][><';
        $stringaRandom = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $stringaRandom;
    }