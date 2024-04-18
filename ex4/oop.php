
<?php
    class Car{

        // properties 
        private $brand ;
        private $color ;
        public $vehicleType = "car";

        //Constructor

        public function __construct($brand,$color = "none")
        {
            $this->brand = $brand;
            $this->color = $color;
        }

        public function getCarInfo(){
            return "Brand: " . $this->brand . ", Color: ". $this->color;
        }
    }

    $car1 = new Car("Volvo","green");
    $car2 = new Car("BMW");
    $car3 = new Car("Toyota","yellow");
    
    echo "car1 is :";
    echo $car1->vehicleType; //公開才能呼叫
    echo "<br>";
    echo $car1->getCarInfo();

    echo "<br>";
    echo "car2 is :";
    echo "<br>";
    echo $car2->getCarInfo();

    echo "<br>";
    echo "car3 is :";
    echo "<br>";
    echo $car3->getCarInfo();
?>