<?php
namespace Delegation\Factory;

#牛肉漢堡
class BeefBuger implements BugerProvide
{
    public function prepareIngredient(){
        echo '準備牛肉材料'.'<br>';
    }
    public function cooking(){
        echo '製作牛肉漢堡'.'<br>';
    }
    public function package(){
        echo '包裝牛肉材料'.'<br>';
    }
}