<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 20:01
 */

class ISS implements Imposto
{
    /**
     * @param Orcamento $Orcamento
     * @return float|mixed
     */
    /*
     * Agora padronizamos o método de calculo de imposto
     * para cada classe para um nome generico para que seja
     * possível na classe CalculaImposto chama-las
    */
    public static function calcImposto(Orcamento $Orcamento){
        return $Orcamento->getValor() * 1.10;
    }
}