<?php
class Food {
    private $name;
    private $price;
    public function show_price() {
        return $this->price;
    }
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }   
}
class Animal {
    private $name;
    private $height;
    private $weight;
    public function show_height() {
        return $this->height;
    }
    public function __construct(string $name, int $height, int $weight) {
            $this->name = $name; 
            $this->height = $height;
            $this->weight = $weight;
    }     
}
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);
print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';
print_r($food->show_price());
echo '<br>';
print_r($animal->show_height());
echo '<br>';

?>