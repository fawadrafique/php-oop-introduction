<?php

declare(strict_types=1);

class Beverage
{
    public const BARNAME = 'Het Vervolg';
    protected string $color;
    protected float $price;
    protected string $temperature = 'cold';

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }


    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
    public function getBar(): string
    {
        return 'The bar name is ' . self::BARNAME.'.';
    }

}

class Beer extends Beverage
{
    public const BEERNAME = 'Duvel';
    private float $alcoholPercentage;

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
    public function getBeer(): string
    {
        return 'The beer name is ' . self::BEERNAME.'.';
    }
}
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
var_dump($duvel);
echo $duvel->getBar();
echo '<br>';
echo $duvel->getBeer();
echo '<br>';
echo Beverage::BARNAME;
echo '<br>';
echo Beer::BEERNAME;
