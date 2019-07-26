public function testFimDeMes(): void {
        $prov1 = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        $prov1->inserirPagamento(100);
        $prov1->inserirPagamento(200);
        
        $prov2 = new FornecedorExterno("Sara", "Sanchez", "sara@sara.com");
        
        $prov2->inserirPagamento(2000);
        $prov2->inserirPagamento(4000);
        $prov2->inserirPagamento(200);
        
        $emp1 = new Funcionario("Dario","Silva","dario@dh.com",500);
        
        $emp2 = new Funcionario("Ale","Viv","alejandro@dh.com", 600);
        
        $pagamentos = [$prov1, $prov2, $emp1, $emp2];
        
        $resuls = fimDeMes($pagamentos);
        
        $this->assertTrue(is_array($resuls), "A função não retorna um array!");
        
        $this->assertTrue(count($resuls) === 4, "A função não retorna a quantidade de elementos esperada no array");
        
        $funciona = $resuls[0] === 'O Juan Perez que você depositou R$ 300' && $resuls[1] === 'O Sara Sanchez que você depositou R$ 6200' && $resuls[2] === 'O Dario Silva que você depositou R$ 500' && $resuls[3] === 'O Ale Viv que você depositou R$ 600';
        
        $this->assertTrue($funciona, $resuls);
    }