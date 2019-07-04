Nos bastidores, adicionamos à classe `Pessoa` o seguinte construtor:

```php
public function __construct($nome, $sobrenome, $email) {
  $this->nome = $nome;
  $this->sobrenome = $sobrenome;
  $this->email = $email;
}
```

Embora este construtor seja ideal para os **Estudantes**, queremos que para os **Funcionários** o salário também seja obrigatório ao criar uma instância.

Dado isto, pedimos que você escreva o construtor da classe `Funcionario` que recebe 4 parâmetros (nome, sobrenome, email e salário) ao invés de 3.