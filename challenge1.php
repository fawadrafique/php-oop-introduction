<?php

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature = 'Cold';

    public function __construct(string $color, float $price, string $temperature = 'Cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo(string $temperature, string $color): string
    {
        return 'This beverage is ' . $temperature . 'and ' . $color . '.';
    }
}

$cola = new Beverage('black', 2);
echo ($cola);
