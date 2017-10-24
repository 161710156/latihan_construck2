<?php

require_once 'konstrak.php';

$buku = new buku('Moeslim', 'Sioto S.pd.', 'PT. Tirta Jaya');
echo "Nama buku = ".$buku->get_a().'<br>';
echo "Pencipta buku = ".$buku->get_b().'<br>';
echo "Penerbit buku = ".$buku->get_c().'<br>';
?>