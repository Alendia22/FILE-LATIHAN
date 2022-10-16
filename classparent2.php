<?php
		//Nama : Rahmat Wahab Ramadhan NIM : 12201743
    class Persegi{
        public $sisi; //variabel public


        private function keterangan(){//method private
            return "Keliling Persegi : ";
        }

        protected function luasPersegi(){ //method protected
            $luas_persegi = 2 * $this -> sisi;
            return $luas_persegi;
        }

        public function KelilingPersegi(){//method public
            $keliling_persegi = 2 * $this -> luasPersegi();
            return $this -> keterangan().$keliling_persegi;
        }
    }

    class Kotak extends Persegi{
        public function luasKotak(){//method public
            return $this -> luasPersegi() * 2;
        }
    }

    class Balok extends Persegi{
        public $panjang; //variabel public
        public $tinggi;//variabel public

        public function volumeBalok(){//method public
            return $this->$panjang * $this->$sisi * $this->$tinggi; 
        }
    }

    $kubus = new Kotak();
    $kubus->sisi = 5;
    echo "Luas Kubus : ". $kubus->luasKotak();

    $balok = new Balok();
    $balok->panjang = 3;
    $balok->lebar = 4;
    echo "Volume Balok : ". $balok->volumeBalok();