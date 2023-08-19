<?php

namespace TemplateMethodExemplo;

use TemplateMethodExemplo\Models\Contrato;

abstract class RealizarConformidade
{
    final public function paraOContrato($contrato) 
    {
        $this->verificaSeContratoExisteNaBaseDoSiopi($contrato);
        $this->verificaSeParticipantesJaForamBeneficiadosAnteriormente($contrato);
        $this->verificaSeParticipantesEstaoNaListaDoPrograma($contrato);
    }

    protected function verificaSeContratoExisteNaBaseDoSiopi(Contrato $contrato) {
        echo "verificando se contrato existe no siopi e esta contratado.".PHP_EOL;
    }

    protected function verificaSeParticipantesJaForamBeneficiadosAnteriormente(Contrato $contrato) {
        echo "verificando se participantes receberam subsidio anteriormente.".PHP_EOL;
    }

    abstract protected function verificaSeParticipantesEstaoNaListaDoPrograma(Contrato $contrato): void;

}
