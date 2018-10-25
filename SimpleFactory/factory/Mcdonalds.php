<?php

namespace SimpleFactory\Factory;

class Mcdonalds 
{
    private $bugerFactory;

    public function __construct($bugerFactory){
        $this->bugerFactory = $bugerFactory;
    }
    #點單一餐點
    public function Order($food){
        $this->bugerFactory($food)->prepareIngredient();
        $this->bugerFactory($food)->cooking();
        $this->bugerFactory($food)->package();
    }
}
