<?php
class Kalculator
{
    private $a1 = 1, $a2 = 1, $hasil;
    public function tambah()
    {
        $this->hasil = $this->a1 + $this->a2;
        return $this->hasil;
    }
    public function kurang()
    {
        $this->hasil = $this->a1 - $this->a2;
        return $this->hasil;
    }
    public function bagi()
    {
        $this->hasil = $this->a1 / $this->a2;
        return $this->hasil;
    }
    public function kali()
    {
        $this->hasil = $this->a1 * $this->a2;
        return $this->hasil;
    }
}
$hitung = new Kalculator();
echo $hitung->tambah() . "\n";
echo $hitung->kurang() . "\n";
echo $hitung->bagi() . "\n";
echo $hitung->kali() . "\n";
