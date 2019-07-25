Acontece que, se olharmos um pouco mais para o nosso diagrama de classes, existem 3 classes que herdam da classe Pessoa:

> 1. Aluno
> 2. Empregado
> 3. Fornecedor externo

Neste caso, em nosso sistema, você terá que indicar que todos os finais do mês, tanto os funcionários quanto os fornecedores externos, pagarão seu salário!

Como não é uma responsabilidade de **todas as pessoas**, implementaremos uma interface `Pagavel` com o método `pagar`. Em seguida, cada uma das classes (Funcionario e Fornecedor Externo) implementará esse método de maneiras diferentes.

Seu trabalho então, neste exercício é:

Escreva a interface `Pagavel` que possui um método `pagar` que não recebe nenhum parâmetro.