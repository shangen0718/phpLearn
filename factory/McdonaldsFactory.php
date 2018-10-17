<?php

namespace factory;

class McdonaldsFactory implements RestaurantFactory
{
    public function createRestaurant($menu){
        return new Mcdonalds($menu);
    }
}
