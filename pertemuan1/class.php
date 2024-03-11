<?php
    class Motor
    {
        //property
        public $knalpot = 1;
        public $sepiomn = 2;
        public $velg = 'palang';
        public $ban = 'batlax';

        //method
        public function Jalan()
        {
            echo "motor sudah berjalan yang memiliki knalpot sebanyak ", $this->knalpot, "<br>";
        }
        public function Rem()
        {
            echo "motor berhenti nih <br>";
        }
        public function Mogok()
        {
            echo "motor mogok cek bensin<br>";
        }
    }
    //instansiasi => objek
    $rxking = new Motor();
    $rxking->Jalan();
    $rxking->Rem();
    $rxking->Mogok();

    $vario = new Motor();
    $vario->Jalan();
    $vario->Rem();
    $vario->Mogok();
?>