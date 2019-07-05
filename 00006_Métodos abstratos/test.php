 public function testEntrarNoPredio(): void {
        $oRefl = new ReflectionClass ("Pessoa");
        
        $methods = $oRefl->getMethods();
        
        $temMetodo = false;
        
        foreach ($methods as $method) {
            if ($method->name === "entrarNoPredio") {
            $temMetodo = true;
            }
        }
        
        $this->assertTrue($temMetodo, "O método entrarNoPredio não existe");
        
        $r = new ReflectionMethod("Pessoa", "entrarNoPredio");
        
        $this->assertTrue($r->isAbstract(), "O método entrarNoPredio não é abstrato");
        
        $this->assertTrue(count($r->getParameters()) === 1, "O método entrarNoPredio deve receber um parâmetro");
    }