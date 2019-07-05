public function testQuantidadeEstudantes(): void {
        $classe = new ReflectionClass('Estudante');
        
        $temQuantidade = false;
        $eEstatica = false;
        
        foreach ($classe->getProperties() as $p) {
            if ($p->name == "quantidadeEstudantes") {
                $temQuantidade = true;
                $eEstatica = $p->isStatic();
            }
        }
        
        $this->assertTrue($temQuantidade, "O atributo 'quantidadeEstudantes' não existe");
        
        $this->assertTrue($eEstatica, "O atributo 'quantidadeEstudantes não é estatico'");
        
        $this->assertTrue(Estudante::$quantiadeEstudantes === 0, "O valor inicial de quantidades não é 0");
    }   