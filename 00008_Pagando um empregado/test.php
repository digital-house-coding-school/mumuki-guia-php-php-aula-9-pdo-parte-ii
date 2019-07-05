public function testImplementa(): void {
        $funcionario = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $this->assertTrue($funcionario instanceof Pagavel, "A classe Funcionario não implementa a interface Pagavel");
    }

    public function testPagar() : void {
        $funcionario = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $resul= $funcionario->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método pagar deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "o dario sus que você depositou r$ 500", "Era esperado 'o dario sus que você depositou r$ 500' e foi recebido '$resul'");
    }