<?php
/**
 * Created by menu-restaurant.
 * User: Mateusz Rogacki
 * Date: 20.02.2017
 * Time: 00:00
 */

namespace Restaurant\Menu\Dish;


use Restaurant\Menu\Components\ComponentInterface;

abstract class DishAbstract
{
    private $dishName = '';
    private $components = array();

    public function __construct($dishName)
    {
        $this->dishName = $dishName;
    }

    /**
     * @return int
     */
    public function price()
    {
        $totalPrice = 0;

        foreach($this->components as $component)
        {
            $totalPrice += $component->getPrice();
        }

        return $totalPrice;
    }

    /**
     * @return array
     */
    public function getComponents()
    {
        $components = array();

        foreach($this->components as $component)
        {
            $components[] = $component;
        }

        return $components;
    }

    /**
     * @param ComponentInterface $component
     */
    public function addComponent(ComponentInterface $component)
    {
        $this->components[] = $component;
    }

    /**
     * @param $name
     */
    public function removeComponent($name)
    {
        foreach($this->components as $component)
        {
            if($component->getName() == $name)
            {
                unset($component);
                break;
            }
        }
    }
}