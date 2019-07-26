public function testImplementa(): void {
        $funcionario = new Funcionario("Jane", "Doe", "victor@dh.com", 500);
        
        $this->assertTrue($funcionario instanceof Pagavel, "A classe Funcionario não implementa a interface Pagavel");
    }

    public function testPagar() : void {
        $funcionario = new Funcionario("Jane", "Doe", "victor@dh.com", 500);
        
        $resul= $funcionario->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método pagar deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "Jane Doe depositou R$ 500", "Era esperado 'Jane Doe depositou R$ 500' e foi recebido '$resul'");
    }