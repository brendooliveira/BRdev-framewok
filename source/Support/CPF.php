<?php

namespace Source\Support;

class CPF{


    public static function validador($cpf){
        $cpf = preg_replace('/\D/','', $cpf);

        if(strlen($cpf) != 11){
            return false;
        }

        $cpfValidacao = substr($cpf,0,9);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);

       
        return $cpfValidacao == $cpf;
    }

    public static function calcularDigitoVerificador($base){
        $tamanho = strlen($base);
        $multiplicador = $tamanho + 1;

        //SOMA
        $soma = 0;

        for($i = 0; $i < $tamanho; $i++){
            $soma += $base[$i] * $multiplicador;
            $multiplicador--;
        }

        $resto = $soma % 11;

        return $resto > 1 ? 11 - $resto : 0;
    }
}