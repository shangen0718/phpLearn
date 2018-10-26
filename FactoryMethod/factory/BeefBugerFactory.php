<?php
namespace FactoryMethod\Factory;

#牛肉漢堡
class BeefBugerFactory implements BugerFactory
{
    public function createBuger(): BugerProvide{
        return new BeefBuger();
    }
}