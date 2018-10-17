<?php
ini_set("display_errors", "On");
include_once (__DIR__ . "/autoload.php");

use factory\Foods;
use factory\Mcdonalds;
use factory\McdonaldsFactory;
// use factory\Kfc;

$mcdonaldsFactory = new McdonaldsFactory();
$mcdonalds = $mcdonaldsFactory->createRestaurant(new Foods());
$mcdonaldsMenu = $mcdonalds->Menu();

// var_dump($mcdonaldsMenu);
// print_r($mcdonaldsMenu);
foreach ($mcdonaldsMenu as $key => $value) {
    echo $key."<br>";
    echo $value."<br>";
}
exit;
?>
<!DOCTYPE html>
<html>
<head>
    <title>線上點餐</title>
    <style type="text/css">
        body{
            margin:0;
        }
        h3{
            margin:0;
        }
        #body{
            width: 100vw;
            height: 100vh;
            background-color: gray;
        }
        #menu{
            width: 55%;
            height: 400px;
            margin: auto;
            background-color: cornflowerblue;
        }
        #menu-title{
            padding-top: 80px;
            width: 50%;
            margin: auto;
        }
        #menu-title-h{
            margin: auto;
            text-align: center;
            /*border-style:solid;*/
            /*border-color:yellow;*/
            font-size: 1.6em;
            line-height: 50px;
        }
        #menu-order{
            width: 100%;
            margin: auto;
        }
        .text-center{
            text-align: center;
        }
        #order{
            width: 55%;
            height: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: aquamarine;
        }
    </style>
</head>
<body>
<div id="header"></div>
<div id="body">
    <div id="menu">
        <div id="menu-title">
            <h3 id="menu-title-h">菜單</h3>
        </div>
        <div id="menu-body">
            <table id="menu-order">
                <tr>
                    <!-- <td class="text-center">編號</td> -->
                    <td class="text-center">品名</td>
                    <td class="text-center">價格</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="order">
        <div id="menu-title">
            <h3 id="menu-title-h">訂單</h3>
        </div>
        <div id="menu-body">
            <div id="menu-order">
                <!-- <form action="" method="POST"> -->
                    請輸入你要的餐點:<input type="text" name="order">
                    <!-- <br> -->
                    <button type="submit">結帳</button>
                <!-- </form> -->
            </div>
        </div>
    </div>    
</div>
<div id="footer"></div>
</body>
</html>