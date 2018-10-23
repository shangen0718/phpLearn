<?php

namespace factory;

class McdonaldsFactory implements RestaurantFactory
{
    public function createRestaurant(){
        return new Mcdonalds();
    }
}
