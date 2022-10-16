<?php
//parent class
class manusia{

	// property class manusia
	public $nama_saya;  

	// keterangan : bahwa dikoding yang saya buat ada protected dengan identitas $nama_saya

	// method pada class manusia
	function berinama($saya){
		$this->nama_saya=$saya;
		
		// keterangan : bahwa dikoding yang saya buat ada method dengan identitas berinama
	}

}

// clas turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{

	// property class teman
	public $nama_teman;

	//method pada class teman
	function berinamateman($teman){
		$this->nama_teman=$teman;

	}
}

// instansiasi class teman
$taufik = new teman;

//method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$taufik->berinama(" Taufik ");
$taufik->berinamateman(" Andri ");

// menampilkan isi property 
echo "Nama Saya :". $taufik->nama_saya . "<br/>";
echo "Nama Teman Saya :" . $taufik->nama_teman;

?>