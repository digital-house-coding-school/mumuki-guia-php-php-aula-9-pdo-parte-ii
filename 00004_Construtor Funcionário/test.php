public function testFuncionario(): void {
        $empregado = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $nome = $empregado->getNome();
        
        $sobrenome = $empregado->getSobrenome();
        
        $email = $empregado->getEmail();
        
        $salario = $empregado->getSalario();
        
        $this->assertTrue($nome === "Dario", "O construtor não está atribuindo o nombre");
        
        $this->assertTrue($sobrenome === "Sus", "O construtor não está atribuindo o sobrenome");
        
        $this->assertTrue($email === "dario@dh.com", "O construtor não está atribuindo o email");
        
        $this->assertTrue($salario === 500, "O construtor não está atribuindo o salario");
    }