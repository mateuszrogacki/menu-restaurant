<?php
/**
 * Created by menu-restaurant.
 * User: Mateusz Rogacki
 * Date: 20.02.2017
 * Time: 00:00
 */

namespace Restaurant\Menu\Components;


interface ComponentInterface
{
    /**
     * @param $price
     * @return mixed
     */
    public function setPrice($price);

    /**
     * @return mixed
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);
}