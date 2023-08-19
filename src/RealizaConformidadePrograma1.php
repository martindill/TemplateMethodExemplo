<?php

namespace TemplateMethodExemplo;

use TemplateMethodExemplo\Models\Contrato;

class RealizaConformidadePrograma1 extends RealizarConformidade
{

    protected function verificaSeParticipantesEstaoNaListaDoPrograma(Contrato $contrato): void { 
        echo "O contrato {$contrato->numero} pertence ao programa 1 e esta sendo verificado".PHP_EOL;
    }

}
