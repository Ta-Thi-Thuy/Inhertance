<?php
include_once ('Circle1.php');
include_once ('Cylinder1.php');

$circle = new Circle1(2,"black");
echo 'Circle1 area: '. $circle->calculateArea().'<br/>';
echo 'Circle1 color: '. $circle->getColor().'<br/>';
echo 'To String: '. $circle->toString().'<br/>'.'<br>';

$cylinder = new Cylinder1(3,"red",5);
echo 'Cylinder1 area: '. $cylinder->calculateArea().'<br/>';
echo 'Cylinder1 color: '. $cylinder->getColor().'<br/>';

echo 'Cylinder1 volume: '. $cylinder->calculateVolume().'<br/>';
echo 'Cylinder1 color: '. $cylinder->getColor().'<br/>';
echo 'To String: '. $cylinder->toString();
