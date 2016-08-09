<?php

class AgregacaoCarrinho {
    private $Cliente;
    private $Produtos;
    private $Total;
    
    // no que aqui determinamos que o construtor apenas gere objetos a partir da class AssociacaoCliente. Por isso, vamos utilizar o objeto que criamos através da classe em questão, que é o $thierry.
    function __CONSTRUCT(AssociacaoCliente $Cliente) {
        $this->Cliente = $Cliente;
        $this->Produtos = array();
    }
    
    public function Add(AgregacaoProduto $Produto) {
        // pegamos o produto no getProduto, atribuimos ao array
        $this->Produtos[$Produto->getProduto()] = $Produto;
        // somamos o valor do produto em questão, ao total
        $this->Total += $Produto->getValor();
        // apresentamos a mensagem 
        $this->VerCarrinho($Produto, "adicionou");
    }
    
    public function Remove(AgregacaoProduto $Produto) {
        // ao invés de adicionar, vamos remover um produto do indice
        unset($this->Produtos[$Produto->getProduto()]);
        // subtraimos o valor do produto do total
        $this->Total -= $Produto->getValor();
        // apresentamos a mensagem 
        $this->VerCarrinho($Produto, "removeu");
    }
    
    // note a definição de agregação, antes da declaração dos parametros. Feita a agregação, a função apenas aceita objetos deste
    public function VerCarrinho(AgregacaoProduto $Produto, $Action) {
        // note agora os acessos aos métodos da classe AgregacaoProduto
        echo "Você {$Action} um {$Produto->getNome()} em seu carrinho.<br>Valor Total R$ {$this->Total}<hr>";
    }
    
}
