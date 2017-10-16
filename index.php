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
$icms = new CalculaImposto();
echo sprintf(
    "<p>O valor com imposto é: %s </p>
     <p>O valor do ISS é: %s </p>",
    $icms->calcIcms($reforma),
    $icms->calcIss($reforma)
);

