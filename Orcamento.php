<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 17:39
 */

class Orcamento
{
    private $valor;

    /**
     * Orcamento constructor.
     */
    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }



}