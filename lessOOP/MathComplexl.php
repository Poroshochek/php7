<?php
class MathComplexl
{
    public $re, $im;

    function add(MathComplexl $y)
    {
        $this->re += $y->re;
        $this->im += $y->im;
    }

    function __toString()
    {
        return "({$this->re}, {$this->im})";
    }
}