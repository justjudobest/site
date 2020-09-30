<?php
class Sneakers
{
    public $brand;
    public $color;

        function __construct($brand,$color)
        {
            $this->brand = $brand;
            $this->color = $color;
        }
    function get_Class_info()
    {
        echo "Класс Sneakers описывает бренд и цвет кроссовок<hr> <br />";
    }
        function get_info()
        {
            echo "Название бренда: $this->brand <br> Цвет: $this->color <br>";

        }
        function get_client()
        {
            echo "Пример<br>";
        }

}


class man extends Sneakers
{
    public $nickname;
    public $age;

    function __construct($nickname,$age, $brand, $color )
    {
        parent::__construct($brand, $color);
        $this->nickname = $nickname;
        $this->age = $age;
    }
    function get_info()
    {
        echo "Имя: $this->nickname <br> Возраст: $this->age <br> Название бренда: $this->brand <br> Цвет: $this->color <br>";
    }
}

class magazine extends Sneakers
{
    public $price;
    public $Foot_size;
    function __construct($Foot_size,$price)

    {
        parent::__construct($this->brand ='Reebok', $this->color = 'Green');
        $this->Foot_size = $Foot_size;
        $this->price= $price;
    }
    function get_info()
    {
        echo "Название бренда: $this->brand <br> Цвет: $this->color <br> Размер: $this->Foot_size <br> Цена: $this->price <br>";
    }

}
$client2 = new Sneakers('adidas', 'black');
$client2->get_client();
$client2->get_info();
$client2->get_Class_info();


$client1 = new man('Вася', '30', 'nike', 'red');
$client1->get_client();
$client1->get_info();
$client1->get_Class_info();


$client = new magazine('41', '100$');
$client->get_client();
$client->get_info();
$client->get_Class_info();

