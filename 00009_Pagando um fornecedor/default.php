class FornecedorExterno extends Pessoa {
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
  
  public function inserirPagamento($pagamento) {
    $this->pagamentos[] = $pagamento;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
}