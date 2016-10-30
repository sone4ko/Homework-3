<?php

namespace Project\Figure\Rat;

  require_once "Rectangle.php";
  $ret = new Rectangle (15, 17);
  echo "<br />";
  echo $ret ->getX();
  echo "<br />";
  $ret ->setY(5);
  echo $ret->getY();
  echo "<br />";
  echo $ret->move(5, 15);
  echo "<br />";
  echo $ret ->sum();
 ?>

/**
 * Created by PhpStorm.
 * User: samos
 * Date: 29.10.16
 * Time: 1:50
 */