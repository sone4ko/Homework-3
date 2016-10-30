<?php

namespace Project\figure\rat;

class Rectangle extends FigClass {
    public function move ($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    function form () {
        return 'only quadrangles';
    }
}

?>
/**
 * Created by PhpStorm.
 * User: samos
 * Date: 29.10.16
 * Time: 1:44
 */