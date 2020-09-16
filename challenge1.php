<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature = 'cold';

    public function __construct(string $color, float $price, string $temperature = 'Cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
}

$cola = new Beverage('black', 2);
echo $cola->getInfo('cold', 'black');
