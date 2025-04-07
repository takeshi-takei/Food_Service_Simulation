<?php

namespace Food_Service_Simulation\FoodItem;

require_once '/../Food_Service_Simulation/FoodItem/FoodItem.php';
class HawaiianPizza extends FoodItem {
    public function __construct() {
        $name = "HawaiianPizza";
        $description = "we recognize you as a werido as long as you order it.";
        $price = 15;
        $cookingTime = 10;
        parent :: __construct($name, $description, $price, $cookingTime);
    }
}
