<?php
class Kendaraan
{
    public $jenis_kendaraan;
    public $jumlah_roda;
    public $merk;
    public $bahan_bakar;
    public $harga;
    public $tahun_pembuatan;
    public function CekSubsidi()
    {
        if ($this->bahan_bakar == 'premium' && $this->tahun_pembuatan <= 2005) {
            return 'Ya';
        } else {
            return 'Tidak';
        }
    }
    public function hargaSecond()
    {
        $this->harga = 20;
        $this->tahun_pembuatan = 2011;
        if ($this->tahun_pembuatan > 2010) {
            return $this->harga - (20 / 100 * $this->harga);
        } elseif ($this->tahun_pembuatan >= 2005 && $this->tahun_pembuatan <= 2010) {
            return $this->harga - (30 / 100 * $this->harga);
        } elseif ($this->tahun_pembuatan < 2005) {
            return $this->harga - (40 / 100 * $this->harga);
        }
    }
}
