<?php
namespace FactoryMethod\Factory;

#魚肉漢堡
class FishBuger implements BugerProvide
{
    public function prepareIngredient(){
        echo '準備魚肉材料'.'<br>';
    }
    public function cooking(){
        echo '製作魚肉漢堡'.'<br>';
    }
    public function package(){
        echo '包裝魚肉材料'.'<br>';
    }
}