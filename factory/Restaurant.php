<?php
namespace factory;

#餐廳
interface Restaurant
{
    public function Menu();
    public function Order($food);
    // public function Orders(... $foods);
    public function Sum();
}
