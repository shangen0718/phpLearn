<?php
namespace FactoryMethod\Factory;

#雞肉漢堡
class ChickenBugerFactory implements BugerFactory
{
    public function createBuger(): BugerProvide{
        return new ChickenBuger();
    }
}