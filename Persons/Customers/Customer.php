<?php

use Persons\Person;
use Restaurants\Restaurant;

abstract class Customer extends Person {

    public function interstedCategories(Restaurant $Restaurant): array {
        return True
    }

    public function order(): Invoice {

    }
}