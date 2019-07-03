Bom!

Tendo já escrito a classe Pessoa, vamos ser um pouco mais específicos.

O que realmente acontece é que no sistema da Digital House haverá **Estudantes** e **Funcionários**

Todos terão nome associado, sobrenome e e-mail, o que os torna excelentes candidatos para serem classes que herdam de pessoa, no entanto, os alunos e funcionários terão suas próprias características.

Dado isso, seu objetivo é:

> 1. Criar a classe `Funcionario` que herda da classe `Pessoa` que vai adicionar o atributo **salário** junto com os métodos `getSalario` e` setSalario`

> 2. Criar a classe `Aluno` que herda da classe `Pessoa` e adicione o atributo **graduado** que será um booleano indicando se o aluno terminou o curso ou não. Por padrão, este atributo deve indicar false (pode ser indicado por padrão no atributo ou pelo construtor)

> 3. Adicione o método `eGraduado` na classe `Aluno` que retorna o valor do atributo **graduado** (note que quando o atributo é booleano é normal que o getter comece com o verbo "é" (ou em Inglês "is") em vez de usar a palavra "get")

> 4. Adicione o método `terminarCurso` que modifica o atributo **graduado** para **TRUE**