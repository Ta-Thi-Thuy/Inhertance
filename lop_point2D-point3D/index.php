<?php
include_once ('Point3D.php');
include_once ('Point2D.php');

$point2D = new Point2D(2,3);
echo 'Point2D: '.$point2D->toString().'<br/>';
echo 'Point2D: '.$point2D->getXY().'<br/>';

$point3D = new Point3D(4,5,6);
echo 'Point3D: '.$point3D->toString().'<br/>';
echo 'Point3D: '.$point3D->getXYZ();
