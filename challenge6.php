<?php

declare(strict_types=1);

class Beverage
{
    public const BARNAME = 'Het Vervolg';
    protected string $color;
    protected float $price;
    protected string $temperature = 'cold';
    protected static int $timesServed = 0;

    /**
     * Beverage constructor.
     * @param string $color
     * @param float $price
     * @param string $temperature
     */
    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        self::$timesServed ++;

    }


    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
    public function getBar(): string
    {
        return 'The bar name is ' . self::BARNAME.'.';
    }
    public static function getServed(): string
    {
        return 'The drink was served ' . self::$timesServed.' times.';
    }

}

class Beer extends Beverage
{
    public const BEERNAME = 'Duvel';
    private string $name;
    private float $alcoholPercentage;

//    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
//    {
////        $this->color = $color;
////        $this->price = $price;
////        $this->temperature = $temperature;
//        parent::__
//        $this->name = $name;
//        $this->alcoholPercentage = $alcoholPercentage;
//    }
    /**
     * Beer constructor.
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        parent::__construct($color, $price, $name, $alcoholPercentage, $temperature = 'cold');
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
$duve = new Beer('blond', 3.5, 'Duvel', 8.5);
$duv = new Beer('blond', 3.5, 'Duvel', 8.5);

//var_dump($duvel);
echo $duvel->getServed();
echo '<br>';
echo $duve->getServed();
echo '<br>';
echo $duv->getServed();
echo '<br>';
