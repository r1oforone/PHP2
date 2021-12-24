<?php
spl_autoload_register(function ($className) {
    include_once "$className.php";
});
class Physical extends Good {

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

    public function order(){
        return "{$this->getName()} типа {$this->getType()} в количестве {$this->getPrice()} шт. стоит {$this->count}.<hr> 
 Итоговая стоимость составляет {$this->finalCost()}";

    }
}

$obj = new Physical("Телефон", 200, "Physical", 3);
echo $obj->order();
