<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 19:57
 */

class ICMS implements Imposto
{
    /**
     * @param Orcamento $Orcamento
     * @return float|mixed
     */
    public static function calcImposto(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 1.05;
    }
}