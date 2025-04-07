<?php

use Persons\Person;
use Restaurants\Restaurant;
use Employees\Casher;

class Customer extends Person {

    private array $interestedTastesMap;
    public function __construct(string $name, int $age, string $address, array $interestedTastesMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTastesMap = $interestedTastesMap;
    }

    public function interestedCategories(Restaurant $Restaurant): array {
        $menu = $Restaurant->getMenu();
        
        $matchedCategories = [];

        foreach ($menu as $category) {
            if (array_key_exists($category, $this->interestedTastesMap)) {
                $matchedCategories[] = $category;
            }
        }

        return $matchedCategories;
    }

    public function order(Restaurant $Restaurant): Invoice {
        $category = $this->interestedCategories($Restaurant);

        $casher = $Restaurant->getCasher();
        $casher->generateOrder($category, $Restaurant);
        
    }
}