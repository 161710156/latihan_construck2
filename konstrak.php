<?php
class buku{

public $judul, $pencipta, $penerbit;

public function __construct($judul, $pencipta, $penerbit)
{
	$this->judul = $judul;
	$this->pencipta = $pencipta;
	$this->penerbit = $penerbit;
}

public function get_a()
{
	return $this->judul;
}
public function get_b()
{
	return $this->pencipta;
}
public function get_c()
{
	return $this->penerbit;
}

}
?>