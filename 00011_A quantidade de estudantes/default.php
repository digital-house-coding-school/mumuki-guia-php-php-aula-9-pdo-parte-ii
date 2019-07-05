class Estudante extends Pessoa {
  private $eGraduado = false;
  
  public function eGraduado() {
    return $this->eGraduado;
  }
  
  public function terminarCurso() {
    $this->eGraduado = true;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  } 
}   