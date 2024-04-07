<?php
// I've decided to separate different parts of this task bc there will be too much of spaghetti 😂

echo '<h1>OOP Page!</h1>';

// interfaces
interface SecurityMeasures
{
    public function safeReverseGear();
}

class Car
{
    private static int $numOfInstances = 0;

    // Static method
    // Method to get number of Car or its inheritances objects
    public static function howMuchObjectsAreThere(): int
    {
        return self::$numOfInstances;
    }

    public string $manufacturer;
    protected int $wheels = 4;
    private bool $hasProblems = true;

    // constructor
    public function __construct($manufacturer)
    {
        self::$numOfInstances++;
        $this->manufacturer = $manufacturer;
    }

    public function getNumberOfWheels(): int
    {
        return $this->wheels;
    }

    public function doesCarHaveProblems(): string
    {
        return $this->hasProblems ? 'Yes, this car has problems.' : 'No, car has 0 problems';
    }
}

# Public and private members in class
$car_example = new Car('BMW');
$car_example->manufacturer = 'Ford';
echo 'Manufacturer: ' . $car_example->manufacturer . "<br>";
echo "Number of wheels in car: {$car_example->getNumberOfWheels()}" . "<br>";
echo $car_example->doesCarHaveProblems() . "<br>";
echo "---------<br>";

# Class Inheritance
class Truck extends Car implements SecurityMeasures
{
    protected int $wheels = 6;
    public float $towingCapacity;

    public function __construct($manufacturer, $towingCapacity)
    {
        // Calling parent constructor
        parent::__construct($manufacturer);
        $this->towingCapacity = $towingCapacity;
    }

    // Method
    public function aboutTruck(): string
    {
        return "Manufacturer: $this->manufacturer.<br>Number of wheels: $this->wheels.<br>" .
            "Towing capacity: $this->towingCapacity.<br>";
    }

    // Magic method
    public function __get(string $name)
    {
        return "Property $name does not exist!";
    }

    public function safeReverseGear()
    {
        echo "Bip - bip - bip. I am truck that goes reverse!!!<br>";
    }
}

trait radio
{
    public function turnOnRadio(): void
    {
        echo "Music is playing: la-la-la<br>";
    }
}

// traits
trait ac
{
    public function coldCabin(): void
    {
        echo "It becomes colder in cabin<br>";
    }
}

class Dumpster extends Car implements SecurityMeasures
{
    use radio, ac;

    public function safeReverseGear()
    {
        echo "BEEP-BEEP-BEEP. Dumpster goes reverse!!!<br>";
    }
}

$oneMoreCar = new Truck('Ford', 10.1);

$truck = new Truck('DAF', 100.1);;
echo 'Manufacturer: ' . $truck->manufacturer . "<br>";
echo "---------<br>";
echo "Number of Car class instances: " . Car::howMuchObjectsAreThere() . "<br>";
echo "---------<br>";
echo $truck->aboutTruck();
echo "---------<br>";
echo $truck->mpg . "<br>";
echo "---------<br>";
$dumpster = new Dumpster('ZAZ');
$car_park = array($truck, $dumpster);
foreach ($car_park as $car) {
    $car->safeReverseGear();
}
echo "---------<br>";
$dumpster->turnOnRadio();
$dumpster->coldCabin();
echo "---------<br>";

// Singleton
// I don't have an idea how to use Singleton in this project
// So I'll just make a simple realisation of it
final class Alerts
{
    private Alerts $instance;

    private array $alerts = [];

    public function add(string $type, string $message): self
    {
        $this->alerts[$type] = $message;
        return $this;
    }

    public function get(string $type): array
    {
        return $this->alerts[$type] ?? [];
    }

    public function all(): array
    {
        return $this->alerts;
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public static function setInstance(Alerts $instance): Alerts
    {
        self::$instance = $instance;
        return self::getInstance();
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }
}
