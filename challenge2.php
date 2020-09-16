<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature = 'cold';

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
    public string $name;
    public float $alcoholPercentage;

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
$cola = new Beverage('black', 2);
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
//var_dump($duvel);
echo $duvel->getAlcoholpercentage();
echo '<br>';
echo $duvel->alcoholPercentage;
echo '<br>';
echo $cola->alcoholPercentage;
