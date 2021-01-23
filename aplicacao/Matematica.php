<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Matematica
 *
 * @author davi
 */
class Matematica {
   
    public function soma($valor1, $valor2){
        
        return ($valor1+$valor2);
    }
    
    public function subtracao($valor1,$valor2){
        
        return ($valor1-$valor2);
    }
    
    public function multiplicacao($fator,$produto){
        return ($fator * $produto);
    }
    
    public function divisao($dividendo,$divisor){
        
        if($divisor <= 0 ){
            throw new Exception('Divisor não pode ser menor ou igual a zero.');
        }
        
        return ($dividendo/$divisor);
    }
}

