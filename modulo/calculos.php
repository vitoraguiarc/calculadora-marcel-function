<?php
/*************************************************************************************
 * Objetivo: Arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * Autor: Vitor Aguiar
 * Data: 04/02/2002
 * Versão: 1.0
 **************************************************************************************/

function operacaoMatematica ($numero1, $numero2, $operacao)
{	
    //Declaração de variaveis locais da função (todas as variaveis recebem os dados do argumento da function)
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $tipoCalculo = (string) $operacao; 
    $result = (double) 0;

    //Processamento do calculo das operações com switch case
    switch ($tipoCalculo) 
    {
        case ('SOMAR'):
            $result = $num1 + $num2;
            break;
        case ('SUBTRAIR'):
            $result = $num1 - $num2;
            break;
        case ('MULTIPLICAR'):
            $result = $num1 * $num2;
            break;
        case ('DIVIDIR'):	
            if($num2 == 0)
                echo(ERRO_DIVISAO_COM_ZERO);
            else
                $result = $num1 / $num2;
            break;		
    }
        
        //number_format - permite ajustar a quantidade de casas decimais realizando o arredondamento
        //$resultado = number_format($resultado,2);
        //round() - permite ajustar a quantidade de casas decimais realizando o arredondamento
        $result = round($result,2);
    
    return $result;
}



?>