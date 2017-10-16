<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 17:53
 */

class CalculaImposto{

    public function calcIcms(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 1.05;
        //print_r($Orcamento);
    }

    public function calcIss(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 1.10;
    }

}