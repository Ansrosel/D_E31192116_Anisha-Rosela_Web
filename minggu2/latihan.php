<?php
class Laptop{
  public $pemilik, $merk;

  public function __construct( $merk, $pemilik){
    $this->pemilik = $pemilik;
    $this->merk = $merk;
  }  

  public function hidupkan_laptop(){
    return "Hidupkan laptop $this->merk punya $this->pemilik\n";
  }

  public function matikan_laptop(){
    return "Matikan laptop $this->merk punya $this->pemilik\n";
  }

  public function restart_laptop(){
    return "Matikan laptop $this->merk punya $this->pemilik, Hidupkan laptop $this->merk punya $this->pemilik\n";
  }
}

$asusA = new Laptop('Asus', 'A'); 
$acerB = new Laptop('Acer', 'B'); 
$lenovoC = new Laptop('Lenovo', 'C'); 

echo($asusA->hidupkan_laptop());
echo($acerB->matikan_laptop());
echo($lenovoC->restart_laptop());
