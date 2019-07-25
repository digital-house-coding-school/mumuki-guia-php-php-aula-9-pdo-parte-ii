Observe que, até esse ponto, a classe Pessoa funcionará como uma herança tradicional, herdando os atributos e métodos das classes filhas.

No entanto, a classe Pessoa, sendo abstrata, terá uma particularidade: **Não pode ser instanciada**

Uma característica final das classes abstratas é que elas podem ter **métodos abstratos**

Estes métodos só podem ser definidos em uma classe abstrata e só definem a atribuição da função (nome e parâmetros da mesma). Um método abstrato funciona como um contrato, isto é, as classes filhas serão forçadas a escrever este método, respeitando a atribuição e completando o conteúdo da função.

Para isso, vamos adicionar um método **abstrato** na classe Pessoa chamada `entrarNoPredio`. Esta função **deve receber um parâmetro** que será o meio de identificação.

Por que dizemos que esse método é abstrato?

Os funcionários se identificarão por meio de uma impressão digital, enquanto os alunos a identificarão com um cartão. A implementação desses métodos estará pendente para cada uma dessas classes, mas adicionando o método abstrato, garantiremos que todos tenham que 'entrar no prédio'.