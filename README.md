# Exemplo Template Method
Implementação básica de template method em PHP

# Criação de uma classe abstrata (Template)

* Nesta classe cria-se todos os métodos necessários para realização da tarefa.
* Métodos que serão iguais para todas as classes derivadas são implementados nessa classe, métodos específicos devem ser declarados como métodos abstratos.
* Na classe template, cria-se um método principal que chama todos os métodos criados na sequencia desejada, este é o método que será chamado para executar a classe, sempre.
* Todos os métodos são chamados neste método principal, inclusive os métodos abstratos.

# Classes concretas
* Todas as classes que implementam o Template extendem a classe abstrata e implementam os métodos abstratos conforme as regras específicas.

# Chamada de execução 
* Cria-se um método que recebe como parâmetro a classe abstrata;
* Este método recebe uma classe concreta e executa o método pai, exemplo

```php

function executaConformidade(RealizarConformidade $conformidade, $contrato) {
    $conformidade->paraOContrato($contrato);
}

echo "Executando conformidade programa 1".PHP_EOL;
$contrato1 = new Contrato('11111', 1);
executaConformidade(new RealizaConformidadePrograma1(), $contrato1);

echo "Executando conformidade programa 2".PHP_EOL;
$contrato2 = new Contrato('22222', 2);
executaConformidade(new RealizaConformidadePrograma2(), $contrato2);

```


