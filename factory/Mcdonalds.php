<?php

namespace factory;

class Mcdonalds implements Restaurant
{
    
    private $name = '麥當勞';
    private $menu;
    private $orderPrice = 0;

    public function __construct($menu){
        $this->menu = $menu;

    }
    // #菜單
    public function Menu(){
        return $this->menu;
    }
    #點單一餐點
    public function Order($food){
        $this->orderPrice = $this->orderPrice + $this->menu->$food;
        return $this->menu->$food;
    }
    #點多樣餐點
    public function Orders(... $foods){
        $sum = 0;
        foreach ($foods as $key => $value) {
            $sum = $sum + $this->menu->$value;
        }
        $this->orderPrice = $this->orderPrice + $sum;
        return $sum;
    }
    #結帳價格
    public function Sum(){
         return $this->orderPrice;
    }
}
