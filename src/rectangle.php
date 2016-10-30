<?php
require_once "figclass.php"
class Rectangle extends FigClass {
    public function move ($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}
?>
/**
 * Created by PhpStorm.
 * User: samos
 * Date: 29.10.16
 * Time: 1:44
 */