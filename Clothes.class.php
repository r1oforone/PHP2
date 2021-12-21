<?php
include "Outer.php";


class Clothes
{
    private $title;
    private $price;
    private $gender;

    //Конструктор класса запускается при создании объекта.
    //Он используется для инициализации свойств класса.
    function __construct($title, $price, $gender){
        $this->title = $title;
        $this->price = $price;
        $this->gender = $gender;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    function info(){
        //Методы, которые выполняют что-либо
        // без привязки к конкретному объекту - это статические методы

        //Двоеточие - обращение к внешнему методу по имени класса.
        echo "{$this->title} стоит {$this->price} y.e <hr>";
        echo "{$this->title} со скидкой стоит ".Outer::test($this)." y.e <hr>";
    }
}

$clothe3 = new Clothes("Jeans", 110, "male");
$clothe3->info();
