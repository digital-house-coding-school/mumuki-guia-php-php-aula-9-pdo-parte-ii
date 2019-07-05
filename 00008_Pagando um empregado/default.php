class Funcionario extends Pessoa {
  private $salario;
  
  public function __construct($nome, $sobrenome, $email, $salario) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->salario = $salario;
  }
  
  public function getSalario() {
    return $this->salario;
  }
  
  public function setSalario($salario) {
    $this->salario = $salario;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
}