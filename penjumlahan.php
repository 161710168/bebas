<?php 
class penjumlah
{
	public $bil1 , $bil2 ;
	public function set_penjumlah ($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1 ; 
		$this->bil2 = $bilangan2 ;
	}
	public function get_penjumlah ()
	{
		return $this->bil1 + $this->bil2 ;
	}
	public function get_pengurangan ()
	{
		return $this->bil1 - $this->bil2 ;
	}
	public function get_perkalian ()
	{
	return $this->bil1 * $this->bil2 ;
	}
	public function get_pembagian ()
	{
		return $this->bil1 / $this->bil2 ;
	}
 }

class orang {
public $nama ;
public $tempat ;
public $kelas ;
public $status ;
public $hobi ; 

	public function __construct ($nama,$tempat,$kelas,$status,$hobi)		{
		
		$this->nama = $nama ;
		$this->tempat = $tempat ;
		$this->kelas = $kelas ;
		$this->status = $status ;
		$this->hobi = $hobi ;

	}
	public function get_nama ()
	{
		return $this->nama ;
	}
	public function get_tempat ()
	{
		return $this->tempat ;
	}
	public function get_kelas ()
	{
		return $this->kelas ;
	}
	public function get_status ()
	{
		return $this->status ;
	}
	public function get_hobi ()
	{
		return $this->hobi ;
	}
}
?>