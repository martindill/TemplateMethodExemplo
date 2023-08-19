<?php

namespace TemplateMethodExemplo\Models;

class Contrato
{

    public $numero;
    public $programa;

    public function __construct($numero, $programa)
    {
        $this->numero = $numero;
        $this->programa = $programa;
    }

}
