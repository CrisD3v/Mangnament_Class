<?php
    function cGenerator($leng=10){
        $cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $code = " ";

        for ($i=0; $i < $leng ; $i++) { 

            $code .= $cadena[rand(0,35)];

        }
        
        return $code;
    } 

    echo cGenerator(5);

    

?>