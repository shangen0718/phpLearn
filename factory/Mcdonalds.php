<?php

namespace factory;

class Mcdonalds implements Restaurant
{
    
    private $name = '麥當勞';
    private $menu;
    private $orderPrice = 0;

    public function __construct(){
    }
    // #菜單
    public function Menu(){
        $menu = array(
            'fishBuger',
            'chickenBuger',
            'beefBuger'
        );
        $this->menu = $menu;
        return $this->menu;
    }
    #點單一餐點
    public function Order($food){
        if(array_key_exists($food,$this->menu) || in_array($food,$this->menu)){
            if(array_key_exists($food,$this->menu)) return $this->menu[$food];
            if(in_array($food,$this->menu)) return $food;
        }
        // print_r(array_search('fishBuger',$this->menu));exit;
        return '沒有此餐點';
        // $this->orderPrice = $this->orderPrice + $this->menu->$food;
        // return $this->menu->$food;
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
