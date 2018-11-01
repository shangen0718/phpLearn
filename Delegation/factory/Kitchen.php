<?php
namespace Delegation\Factory;

#廚房
class Kitchen 
{
    public $BugerProvide;
    public function __construct (BugerProvide $BugerProvide){
        $this->BugerProvide = $BugerProvide;
    }
    public function prepareIngredient(){
        return $this->BugerProvide->prepareIngredient();
    }
    public function cooking(){
        return $this->BugerProvide->cooking();
    }
    public function package(){
        return $this->BugerProvide->package();
    }
}