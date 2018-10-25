<?php
namespace SimpleFactory\Factory;

#雞肉漢堡
class ChickenBuger implements BugerProvide
{
    public function prepareIngredient(){
        echo '準備雞肉材料'.'<br>';
    }
    public function cooking(){
        echo '製作雞肉漢堡'.'<br>';
    }
    public function package(){
        echo '包裝雞肉材料'.'<br>';
    }
}