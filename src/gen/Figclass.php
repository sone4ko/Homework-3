<?php

namespace Project\figure\gen;

  abstract class FigClass
  {
    protected $x;
    protected $y;

      /**
       * FigClass constructor.
       * @param $x
       * @param $y
       */
      public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
      echo "Создан объект с параметрами $x и $y";
    }

    /**
     * @return mixed
     */
    public function getX()
    {
      return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
      return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
      $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
      $this->y = $y;
    }
    abstract public function move ($x, $y);
    public function sum() {
      $sum = $this->x + $this->y;
      return $sum;
    }

  }
?>
