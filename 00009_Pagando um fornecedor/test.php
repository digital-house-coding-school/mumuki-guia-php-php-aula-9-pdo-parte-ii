public function testImplementa(): void {
        $prov = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        
        $this->assertTrue($prov instanceof Pagavel, "A classe FornecedorExterno não implementa Pagavel");
    }
    public function testPagar() : void {
        $prov = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        
        $prov->inserirPagamento(500);
        $prov->inserirPagamento(100);
        $prov->inserirPagamento(1000);
        
        $resul= $prov->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "juan perez recebeu r$1600", " Era esperado 'Juan Perez recebeu R$1600' e foi recebido '$resul'");
    }