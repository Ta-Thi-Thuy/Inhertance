<?php
include_once ('Ong1.php');
include_once ('Cha1.php');
include_once ('Con1.php');


$ong = new Ong1("CHAO");
echo 'ONG: '.$ong->Chao().'<br/>';


$cha = new Cha1("HELLO");
echo 'CHA: '.$cha->Chao().'<br/>';


$con = new Con1("CHAO");
echo 'CON: '.$con->Chao();
