<?php

declare(strict_types=1);

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature = 'cold';

    public function __construct(string $color, float $price, string $temperature = 'cold')
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

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholPercentage;
    }
}

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
//var_dump($duvel);
echo 'This beverage has ' . $duvel->getAlcoholpercentage() . ' % alcohol.';
echo '<br>';
