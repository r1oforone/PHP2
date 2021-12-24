<?php
spl_autoload_register(function ($className) {
    include_once "$className.php";
});

class Weight extends Good
{

    public function __construct($name, $price, $type, $count)
    {
        parent::__construct($name, $price, $type);
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }


    public function finalCost()
    {
        return $this->getPrice() * $this->getCount();
    }

    public function order()
    {
        return "{$this->getName()} типа {$this->getType()} весом {$this->getCount()} кг. стоит {$this->getPrice()}.<hr> 
 Итоговая стоимость составляет {$this->finalCost()}";

    }
}
$obj = new Weight("Рис", 200, "Weight", 15);
echo $obj->order();