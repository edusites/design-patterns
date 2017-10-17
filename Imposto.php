<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 21:45
 */
interface Imposto{

    /**
     * @param Orcamento $Orcamento
     * @return mixed
     */
    public static function calcImposto(Orcamento $Orcamento);


}