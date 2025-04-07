<?php

namespace Food_Service_Simulation\FoodItem;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price, int $cookingTime) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price; 
        $this->cookingTime = $cookingTime;

    }
    
    public static function getCategory(): string {
        return static::class;
    }
}