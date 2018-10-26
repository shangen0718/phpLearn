<?php
namespace FactoryMethod\Factory;

#廚房
class Kitchen
{
    public $BugerFactory;
    public function __construct(BugerFactory $BugerFactory){
        $this->BugerFactory = $BugerFactory;
    }
    public function order(){
        $BugerFactory = $this->BugerFactory->createBuger();
        // 料理食物
        $BugerFactory->prepareIngredient();
        $BugerFactory->cooking();
        $BugerFactory->package();
    }
}