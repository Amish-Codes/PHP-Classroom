<?php

class Demo
{
    public $col = " aqua";
    public function call() {
        echo $this->col;
    }
}

$imax = new Demo();
$imaxpro = new Demo();

//$imax ->col="red";
echo $imax ->col;
echo $imaxpro ->col="blue";
echo $imaxpro -> col;
