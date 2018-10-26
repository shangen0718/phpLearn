<?php
namespace SimpleFactory\Factory;

#漢堡工廠
class BugerFactory
{
    public function createBuger($buger): BugerProvide{
        switch ($buger) {
            case 'fishBuger':
                return new FishBuger();
                break;
            case 'chickenBuger':
                return new ChickenBuger();
                break;
            case 'beefBuger':
                return new BeefBuger();
                break;
        }
    }
}
