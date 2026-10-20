<?php

class Funcionario {
    public $id;
    public $nome;
    public $sobrenome;
    private $salario;
    public $setor;
    public $cracha;
    public const CPF = 3233232323;
    
    public function obterSalario(){
        echo $this->salario;
    }
    public function setarSalario($salario){
        $this->salario = $salario;
    }
    public static function funcaoEstatica(){
        echo "Função Estatica <br>";
    }
}

 $funcionario = new Funcionario();
 echo Funcionario::funcaoEstatica();
