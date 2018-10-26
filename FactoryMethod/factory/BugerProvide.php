<?php
namespace FactoryMethod\Factory;

#漢堡工廠介面
interface BugerProvide
{
    #準備材料
    public function prepareIngredient();
    #做漢堡
    public function cooking();
    #包起來
    public function package();
}