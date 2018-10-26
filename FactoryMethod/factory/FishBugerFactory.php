<?php
namespace FactoryMethod\Factory;

#魚肉漢堡
class FishBugerFactory implements BugerFactory
{
    public function createBuger(): BugerProvide{
        return new FishBuger();
    }
}