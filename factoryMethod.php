<?php

#麥當勞
class Mcdonalds
{
    #菜單列表
    public $foodPriceList = array(
        'burger' => 10,
        'fries' => 20,
        'soda' => 30,
    );
    public $orderPrice = 0;
    #菜單
    public function Menu(){
        return $this->foodPriceList;
    }
    #點單一餐點
    public function Order($food){
        $this->orderPrice = $this->orderPrice + $this->foodPriceList[$food];
        return $this->foodPriceList[$food];
    }
    #點多樣餐點
    public function Orders(... $foods){
        $sum = 0;
        foreach ($foods as $key => $value) {
            $sum = $sum + $this->foodPriceList[$value];
        }
        $this->orderPrice = $this->orderPrice + $sum;
        return $sum;
    }
    #結帳價格
    public function Sum(){
         return $this->orderPrice;
    }
}

$mcdonalds = new Mcdonalds();

$menu = $mcdonalds->Menu();
echo '麥當勞餐點';
print_r($menu);

$burgerPrice = $mcdonalds->Order('burger');
echo '點餐-漢堡:價格:';
print_r($burgerPrice);
echo "\n";
$sodaPrice = $mcdonalds->Order('soda');
echo '點餐-汽水:價格:';
print_r($sodaPrice);
echo "\n";

$OrdersPrice = $mcdonalds->Orders('soda','burger','fries');
echo '點多樣餐點-汽水,漢堡,薯條:價格:';
print_r($OrdersPrice);
echo "\n";

$totail = $mcdonalds->Sum();
echo '購物總金額:';
print_r($totail);
echo "\n";

?>