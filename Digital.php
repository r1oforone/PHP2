<?php

spl_autoload_register(function ($className) {
    include_once "$className.php";
});

class Digital extends Good
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
        return ($this->getPrice() / 2) * $this->getCount();
    }

    public function order()
    {
        return "{$this->getName()} типа {$this->getType()} в количестве {$this->getCount()} шт. стоит {$this->getPrice()}.<hr> 
 Итоговая стоимость составляет {$this->finalCost()}";

    }
}
$obj = new Digital("Подписка", 200, "Digital", 3);
echo $obj->order();