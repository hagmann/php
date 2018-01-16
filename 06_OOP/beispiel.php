<?php
/**
 * hagmann internet agentur gmbh
 * Muracher 5 | 6235 Winikon
 *
 * User: simon.hagmann
 * Date: 16.01.2018
 * Time: 11:34
 */


class Auto {
    protected $color;
    protected $brand;

    /**
     * Auto constructor.
     * @param $color
     * @param $brand
     */
    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


}



$auto = new Auto('rot', 'VW');

echo $auto->getBrand();
echo $auto->getColor();