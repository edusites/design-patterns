<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 17:53
 */

require_once ('ICMS.php');
require_once ('ISS.php');

class CalculaImposto{

    /**
     * @param Orcamento $Orcamento
     * @return float|mixed
     */
    /*
     * Note que a medida que novos impostos eram adicionados
     * precisariamos criar um método para cada imposto e isso
     * estava inflando muito a classe, então resolvemos retirar
     * os métodos e conforme o tipo de imposto informado ao método
     * ele terá um cálculo diferente.
     * mas ainda sim não resolve a situação de deixar a classe limpa
     * e se infla a cada método, então vamos retirar a lógica dos
     * calculos e inserir em suas devidas classes por exemplo class
     * ICMS.php terá um método para esta devida finalidade.
    */
    public function calcImposto(Orcamento $Orcamento, $imposto)
    {
        if($imposto === 'ICMS'){
            return ICMS::calcICMS($Orcamento);
            //print_r($Orcamento);
        }else if($imposto == 'ISS'){
            return ISS::calcISS($Orcamento);
        }

    }


}