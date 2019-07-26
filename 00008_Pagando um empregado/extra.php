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
  
  public function getNome() {
    return $this->nome;
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