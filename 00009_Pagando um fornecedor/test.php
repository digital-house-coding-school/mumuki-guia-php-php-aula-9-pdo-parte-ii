public function testImplementa(): void {
        $prov = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        
        $this->assertTrue($prov instanceof Pagavel, "A classe FornecedorExterno não implementa Pagavel");
    }

    public function testPagar() : void {
        $prov = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        
        $prov->pagar(500);
        $prov->pagar(100);
        $prov->pagar(1000);
        
        $resul= $prov->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "juan perez depositou r$ 1600", " Era esperado 'Juan Perez que você depositou R$ 1600' e foi recebido '$resul'");
    }