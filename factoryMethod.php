<?php
/*
菜單要有品項
然後要多一個優惠組合
只有正確輸入才會印金額
品項 或 品名
然後試著用簡單工廠 讓我可以決定去麥當勞還是肯德基用餐
菜單內容可以先一樣放個標題識別

*/
#餐點
class foods
{
    public $burger = 10;
    public $fries = 20;
    public $soda = 30;
    public $packageA = 50;
    // public $fries;
    // public $soda;
}
#麥當勞
class Mcdonalds
{
    #菜單列表
    public $name = '麥當勞';
    public $foodPriceList;
    public $orderPrice = 0;

    public function __construct($foodPriceList){
        $this->foodPriceList = $foodPriceList;

    }
    #菜單
    public function Menu(){
        return $this->foodPriceList;
    }
    #點單一餐點
    public function Order($food){
        $this->orderPrice = $this->orderPrice + $this->foodPriceList->$food;
        return $this->foodPriceList->$food;
    }
    #點多樣餐點
    public function Orders(... $foods){
        $sum = 0;
        foreach ($foods as $key => $value) {
            $sum = $sum + $this->foodPriceList->$value;
        }
        $this->orderPrice = $this->orderPrice + $sum;
        return $sum;
    }
    #結帳價格
    public function Sum(){
         return $this->orderPrice;
    }
}
#肯德基
class KFC
{
    #菜單列表
    public $name = '肯德基';
    public $foodPriceList;
    public $orderPrice = 0;

    public function __construct($foodPriceList){
        $this->foodPriceList = $foodPriceList;

    }
    #菜單
    public function Menu(){
        return $this->foodPriceList;
    }
    #點單一餐點
    public function Order($food){
        $this->orderPrice = $this->orderPrice + $this->foodPriceList->$food;
        return $this->foodPriceList->$food;
    }
    #點多樣餐點
    public function Orders(... $foods){
        $sum = 0;
        foreach ($foods as $key => $value) {
            $sum = $sum + $this->foodPriceList->$value;
        }
        $this->orderPrice = $this->orderPrice + $sum;
        return $sum;
    }
    #結帳價格
    public function Sum(){
         return $this->orderPrice;
    }
}

class SimpleFactory
{
    public function createRestaurant($restaurant)
    {
        return new $restaurant(new foods());
    }
}
$simpleFactory = new SimpleFactory();
$mcdonalds = $simpleFactory->createRestaurant('Mcdonalds');
$mcdonaldsMenu = $mcdonalds->Menu();

$kfc = $simpleFactory->createRestaurant('KFC');
$kfcMenu = $kfc->Menu();
if($_POST){
    // print_r($_POST);
    $order = $_POST['order'];
    $restaurant = $_POST['restaurant'];

    $simpleFactory = new SimpleFactory();
    $restaurant = $simpleFactory->createRestaurant($restaurant);
    $orderPrice = $restaurant->Order($order);
    // $totail = $mcdonalds->Sum();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
</head>
<body>
<table>

    <tbody>
        <tr><td>菜單</td></tr>
        <tr>
            <td>品名</td>
            <td>價格</td>
        </tr>
        <tr>
            <td>麥當勞</td>
        </tr>
        <?php foreach ($mcdonaldsMenu as $key => $value) {?>
        <tr>
            <td><?=$key;?></td>
            <td><?=$value;?></td>
        </tr>
        <?php }?>
        <tr>
            <td>肯德基</td>
        </tr>
        <?php foreach ($kfcMenu as $key => $value) {?>
        <tr>
            <td><?=$key;?></td>
            <td><?=$value;?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
<form action="" method="POST">
    選擇購買餐點的店家:
    <select name="restaurant">
        <option value="Mcdonalds">麥當勞</option>
        <option value="KFC">肯德基</option>
    </select>
    <br>
    請輸入你要的餐點:<input type="text" name="order">
    <br>
    <button type="submit">結帳</button>
</form>
<br>
<?php
if($_POST && !is_null($orderPrice)){
    echo '你在'.$restaurant->name.'的訂單: ';

    echo '餐點:'.$order.',價格:'.$orderPrice;
}
    
?>
</body>
</html>