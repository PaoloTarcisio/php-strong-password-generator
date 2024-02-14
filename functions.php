<?php
    function generaPsw ($length) {
        $password = "";

        if ($length > 0) {

            $lista = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $min = 0;
            $max = strlen($lista) - 1;

            for ($i=0; $i < $length; $i++) { 
                $carattere = $lista[mt_rand($min, $max)];

                $password .= $carattere;
            }
        }

        return $password;
    }
?>