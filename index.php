<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 16/10/17
 * Time: 17:57
 */

require "./Orcamento.php";
require "./CalculaImposto.php";

$reforma = new Orcamento(500);
$imposto = new CalculaImposto();
echo sprintf(
    "<p>O valor com ICMS é: %s </p>
     <p>O valor do ISS é: %s </p>",
    $imposto->calcImposto($reforma,'ICMS'),
    $imposto->calcImposto($reforma, 'ISS')
);

