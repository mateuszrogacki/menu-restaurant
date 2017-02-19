<?php
/**
 * Created by menu-restaurant.
 * User: Mateusz Rogacki
 * Date: 20.02.2017
 * Time: 00:00
 */

namespace Restaurant\Menu\Components;


abstract class ComponentAbstract implements ComponentInterface
{
    private $price = 0;
    private $name = '';

    /**
     * @param $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}