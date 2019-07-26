interface Pagavel {
  public function pagar();
}


abstract class Pessoa {
  protected $nome;
  protected $sobrenome;
  protected $email;

  public function __construct($nome, $sobrenome, $email) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
  }
  
  public abstract function entrarNoPredio($i);

  public function getNome() {
    return $this->nome;
  }
}
  class FornecedorExterno extends Pessoa implements Pagavel {
  private $pagamentos;
  
  public function __construct($nome, $sobrenome, $email) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->pagamentos = [];
  }
  
  public function getPagamentos() {
    return $this->pagamentos;
  }
  
  public function agregarPagamento($pagamento) {
    $this->pagamentos[] = $pagamento;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
  
  public function pagar() {
    $nome = $this->nome;
    $sobrenome = $this->sobrenome;
    $salario = 0;
    
    foreach ($this->pagamentos as $pagamento) {
      $salario += $pagamento;
    }
     return "O $nome $sobrenome que você depositou R$ $salario";
  }
}

class Funcionario extends Pessoa implements Pagavel {
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
  
  public function pagar() {
     return "O " . $this->nome . " " . $this->sobrenome . " que você depositou R$ " . $this->salario; 
  }

  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  
  public function getSobrenome() {
    return $this->sobrenome;
  }
  
  public function setSobrenome($sobrenome) {
    $this->sobrenome = $sobrenome;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
}