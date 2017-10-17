<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 17:53
 */


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
     * Agora vamos eliminar cada if e ao invés de passar uma
     * String para comparação vamos passar o próprio objeto em si
     * que executa o seu método que tem o nome generico propositamente
     * para ser executado e retornado o Imposto de cada finalidade.
     * Assim a classe que contém toda a lógica fica limpa com apenas
     * uma linha mesmos que novos impostos forem necessários, e isola
     * a lógica de diferentes tipos de impostos para classes especificas
     * a este tipo de cálculo.
    */
    public function calcImposto(Orcamento $Orcamento, Imposto $imposto)
    {
        return $imposto::calcImposto($Orcamento);

    }


}