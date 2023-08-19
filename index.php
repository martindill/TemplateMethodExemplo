<?php

use TemplateMethodExemplo\Models\Contrato;
use TemplateMethodExemplo\RealizaConformidadePrograma1;
use TemplateMethodExemplo\RealizaConformidadePrograma2;
use TemplateMethodExemplo\RealizarConformidade;

require 'vendor/autoload.php';

function executaConformidade(RealizarConformidade $conformidade, $contrato) {
    $conformidade->paraOContrato($contrato);
}

echo "Executando conformidade programa 1".PHP_EOL;
$contrato1 = new Contrato('11111', 1);
executaConformidade(new RealizaConformidadePrograma1(), $contrato1);

echo "Executando conformidade programa 2".PHP_EOL;
$contrato2 = new Contrato('22222', 2);
executaConformidade(new RealizaConformidadePrograma2(), $contrato2);