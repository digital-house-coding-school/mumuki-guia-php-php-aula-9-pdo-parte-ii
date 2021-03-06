public function testQuantidadeEstudantes(): void {
        $classe = new ReflectionClass('Estudante');
        
        $quantidadeEstudantes = false;
        $eEstatica = false;
        
        
        foreach ($classe->getProperties() as $p) {
            if ($p->name == "quantidadeEstudantes") {
                $quantidadeEstudantes = true;
                $eEstatica = $p->isStatic();
            }
        }
        
        $this->assertTrue($quantidadeEstudantes, "O atributo 'quantidadeEstudantes' não existe");
        
        $this->assertTrue($eEstatica, "O atributo 'quantidadeEstudantes não é estatico'");
        
        $this->assertTrue(Estudante::$quantidadeEstudantes === 0, "O valor inicial de quantidades não é 0");
    }   