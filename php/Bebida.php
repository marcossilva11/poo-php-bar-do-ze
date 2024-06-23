<?php
class Bebida{
    private $nome;
    private $preco; 
    private $bebida;
    private $promo;

    //Relativo ao nome
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    //Relativo ao preço
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }

    //Relativo a Bebida
    public function getBebida(){
        return $this->bebida;
    }
    public function setBebida($b){
        $this->bebida = $b;
    }

    // relativo a promoção

    public function getPromo(){
        return $this->promo;
    }
    public function setPromo($p){
        $this->promo = $p;
    }

    public function VerificarPreco(){
        if($this->getPromo()){
            echo "<p>".$this->getNome()."Corre que ta em promoção!!! dona de casa<p>";
        }else{
            echo "<p>".$this->getNome()."O preço se encontra normal";
        }
    }

    public function MostrarBebida(){
        if($this->getBebida() == "Vinho"){
            echo "<p>Nome: ".$this->getNome()."</p>";
            echo "<p>Preço: ".$this->getPreco()."</p>";
            echo "<p>Promoção: ".$this->getPromo()."</p>";
            echo "<p>Safra: ".$this->getSafra()."</p>";
            echo "<p>Tipo: ".$this->getTipo()."</p>";
        }elseif($this->getBebida() == "Suco"){
            echo "<p>Nome: ".$this->getNome()."</p>";
            echo "<p>Preço: ".$this->getPreco()."</p>";
            echo "<p>Promoção: ".$this->getPromo()."</p>";
            echo "<p>Sabor: ".$this->getSabor()."</p>";
        }elseif($this->getBebida() == "Refrigerante"){
            echo "<p>Nome: ".$this->getNome()."</p>";
            echo "<p>Preço: ".$this->getPreco()."</p>";
            echo "<p>Promoção: ".$this->getPromo()."</p>";
            echo "<p>Retornável: ".$this->getRetornavel()."</p>";
        }
    }

}
?>