<?php
// Nama: Alendia, NIM: 12201792
// class parent
class manusia{
 
	// property class manusia
	public $nama_saya;	//method public
 
 	// method pada class manusia
	function berinama($saya){
		$this->nama_saya=$saya;
	}
	
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
	// property class teman
	public $nama_teman; //method public
 
 	// method pada class teman
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}
 
// instansiasi class teman
$alendia = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$alendia->berinama("Alendia");
$alendia->berinamateman("Syifa");
 
// menampilkan isi property
echo "Nama Saya: " . $alendia->nama_saya . "<br/>";
echo "Nama Teman Saya: " . $alendia->nama_teman;
 
?>