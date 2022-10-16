<?PHP
// class parent
    class kebunbunga{
		
		// property class kebunbunga
        public $mawar;
        public $melati;
        private $anggrek;
        private $kamboja;
        protected $halaman;
		
// method pada class kebunbunga
        function __construct($x, $y){
            $this->meja=$x;
            $this->kursi=$y;
        }
// menampiklan isi property
        function jelaskan(){
            echo("kamboja : ".$this->mawar."<BR />");
            echo("anggrek : ".$this->melati."<BR />");
        }
    }
// class turunan atau sub class dari kebun bunga
// kita menghubungkan class dengan syntax extends
	class bungabaru extends kebunbunga{
		
		// property class kebunbunga
		public $asoka;
		public $kenanga;
		
// method pada class bungabaru
		function _constructor($x,$y){
			$this->kenanga=$x;
			$this->asoka=$y;
		}
// menampiklan isi property
		function tampilkan(){
			echo("kenanga : ".$this->kenanga."<BR />");
            echo("asoka : ".$this->asoka."<BR />");
		}
	}
	
	//instansiasi objek kebunbunga	
    $kebunku=new kebunbunga(2, 4);
    $kebunku->mawar=2;
    $kebunku->melati=5;
    $kebunku->jelaskan();
	
	//instansiasi objek bungabaru
	$kebunku=new bungabaru(2, 4);
    $kebunku->asoka=29;
    $kebunku->kenanga=51;
    $kebunku->tampilkan();