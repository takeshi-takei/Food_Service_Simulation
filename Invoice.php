<?php

namespace Invoice;

class Invoice {
    private float $finalPrice;
    private Timestamp $orderTime;
    private int $estimatedTimeMinutes;

    public function __construct(float $finalPrice, Timestamp $orderTime, int $estimatedTimeMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeMinutes = $estimatedTimeMinutes;
    }
}