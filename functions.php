
<?php
       
       function getCharacter($string): string {
           $lunghezza = strlen($string) - 1;
           $randomNumber = rand(0, $lunghezza);
           return $string[$randomNumber];
       }