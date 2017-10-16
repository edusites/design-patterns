<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 20:01
 */

class ISS
{
    /**
     * @param Orcamento $Orcamento
     * @return float|mixed
     */
    public static function calcISS(Orcamento $Orcamento){
        return $Orcamento->getValor() * 1.10;
    }
}