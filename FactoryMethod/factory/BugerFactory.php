<?php
namespace FactoryMethod\Factory;

#漢堡工廠
interface BugerFactory
{
    public function createBuger(): BugerProvide;
}
