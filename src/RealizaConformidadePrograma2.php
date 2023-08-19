<?php

namespace TemplateMethodExemplo;

use TemplateMethodExemplo\Models\Contrato;

class RealizaConformidadePrograma2 extends RealizarConformidade
{

    protected function verificaSeParticipantesEstaoNaListaDoPrograma(Contrato $contrato): void { 
        echo "O contrato {$contrato->numero} pertence ao programa 2 e nao precisa ser verificado".PHP_EOL;
    }

}
