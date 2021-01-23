<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatematicaTest
 *
 * @author davi
 */
class MatematicaTest extends PHPUnit_Framework_TestCase{
 
    private static $dividendo;
    
    private static $divisor;
    
    private static $fator;
    
    private static $produto;
    
    public static function setUpBeforeClass(){
        //Esse método vai ser executado antes de todos os métodos dessa classe.
        self::$divisor = 10;
        self::$dividendo = 2;
        self::$fator = 45;
        self::$produto = 23;
        
        //aqui vc pode inserir dados no banco de dados que serão usados em todos os testes dessa classe
    }
    
  
    
    public function testSoma(){
        $matematica = new Matematica();
        $resultado = $matematica->soma(25, 45);
        
        $this->assertEquals($resultado,70);
        
    }
    
    
   
    
    public static function tearDownAfterClass(){
        //Esse método vai ser executado depois de todos os testes dessa classe.
        
        //aqui vc pode destruir todos os dados no banco de dados que foram usados em todos os testes dessa classe.
    }
    
}

