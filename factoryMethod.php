<?php
/*
網頁一打開 會看到菜單 單點價目表
有一個輸入框
可以讓人點餐
還有一個結帳按鈕
然後有一個可以看到print的text field
*/
#餐點
class foods
{
    public $burger = 10;
    public $fries = 20;
    public $soda = 30;
}
#麥當勞
class Mcdonalds
{
    #菜單列表
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

$foods = new foods();
$mcdonalds = new Mcdonalds(new foods());

$menu = $mcdonalds->Menu();

if($_POST){
    $order = $_POST['order'];
    $orderPrice = $mcdonalds->Order($order);
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
            <td>品項</td>
            <td>價格</td>
        </tr>
        <?php foreach ($menu as $key => $value) {?>
        <tr>
            <td><?=$key;?></td>
            <td><?=$value;?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
<form action="" method="POST">
    請輸入你要的餐點:<input type="text" name="order">
    <br>
    <button type="submit">結帳</button>
</form>
<br>
<?php
if($_POST){
    echo '你的訂單:';

    echo '餐點:'.$order.',價格:'.$orderPrice;
}
    
?>
</body>
</html>