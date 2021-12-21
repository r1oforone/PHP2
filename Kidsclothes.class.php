<?php
include "Clothes.class.php";
class KidsClothes extends Clothes {
    public function __construct($title, $price, $gender, $age)
    {
        //Наследуется конструктор родительского класса и добавляется возраст.
        parent::__construct($title, $price, $gender);
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    public function info()
    {

        echo "{$this->getTitle()} стоит {$this->getPrice()} y.e для детей в возрасте {$this->age} лет.<hr>";
    }
}

$jeans = new KidsClothes("Jeans", "50", "male", 13);
$jeans->info();
