<?php
abstract class Good
{



    abstract function finalCost();
    abstract function order();

    public function __construct($name, $price, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}