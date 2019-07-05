public function testAbstrata(): void {
        $pessoa = new ReflectionClass('Pessoa');
        
        $this->assertTrue($pessoa->isAbstract(), "A classe Pessoa não é abstrata");
    }