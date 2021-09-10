<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["WELCOME ", "TO ", "SHOE ", "SHOP"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $merk,
            $jenis,
            $harga;

  // contruktor
  function __construct ($merk, $jenis, $harga) {
    $this->merk = $merk;
    $this->jenis = $jenis;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Produk Sepatu : Merk : {$this->merk} | jenis : {$this->jenis} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function Warna (){
        echo "<hr>Produk yang tersedia";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 12, $dua = 45, $tiga = 22, $empat = 31, $lima = 66;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Adidas <br> Nike <br> Puma <br> Joma <br> Evos";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Adidas,Nike,Puma,Joma", "Evos", 3000000);
$produk2 = new Produk2("Puma Venom", "Adidas Predator", 12000000);
$produk2 -> Warna();
Stok::staticMethod();
echo " Produk Adidas Terjual : " . Terjual::$satu;
echo "<br> Untuk Produk Nike Terjual : " . Terjual::$dua;
echo "<br> Untuk Produk Puma Terjual : " . Terjual::$tiga;
echo "<br> Untuk Produk Juma Terjual : " . Terjual::$empat;
echo "<br> Untuk Produk Evos Terjual : " . Terjual::$lima;
echo "<hr>";