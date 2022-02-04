<?php
    /***********************************************
     * Obejetivo: Arquivo responsável por reunir e padronizar todas as variaveis e constantes do projeto que serão utilizadas em todo projeto
     * Autor: Vitor
     * Data: 04/02/2022
     * Versão: 1.0
     ***********************************************/

    //Constantes do projeto
    //Modo 01 de criar uma constante com define
    define ('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas")</script>');
    //Modo 02 de criar uma constante com const
    const ERRO_MSG_OPERACAO_CALCULO = '<script>alert("Favor escolher uma operação válida")</script>';
    const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script>alert("Não é possível realizar calculos com dados não numéricos!");</script>';
    const ERRO_DIVISAO_COM_ZERO = '<script> alert("Não é possíver realizar uma divisão onde o divisor é igual a 0")</script>'; 

?>