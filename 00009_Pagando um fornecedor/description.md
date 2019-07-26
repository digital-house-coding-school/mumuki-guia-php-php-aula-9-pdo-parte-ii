Também pagaremos os fornecedores externos. É por isso que a classe `Fornecedor Externo` implementa a interface `Pagavel`.

Por contrato, isso nos obrigará a ter a classe `Fornecedor Externo` definindo e implementando o método `pagar` (que não recebe nenhum parâmetro).

O que o método deveria fazer?

Para este exercício, você simplesmente retornará o texto: "**NOME** **SOBRENOME**  depositou R$**SALÁRIO**", onde **NOME**, **SOBRENOME** e **SALÁRIO** têm que corresponder aos dados da instância.

A diferença para um funcionário é como calcular o **PAGAMENTO**. Nesse caso, o atributo `$pagamentos` é um array . O **PAGAMENTO** será calculado como a soma de todos os valores do array `$pagamentos`