<?php

include_once ('Ong1.php');
class Cha1 extends Ong1
{
public function __construct($chao)
{
    parent::__construct($chao);
    return'hello';
}
}