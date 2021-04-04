<?php


require_once 'vehicule.php';

class truck extends Vehicule
{


    public const ALLOWED_CAPACITY = [
        'fuel capacity -> cent kilos',
        'chargement->zeros',
    ];
public function setEnergy(string $capacity): Truck
{
    if (in_array($capacity, self::ALLOWED_CAPACITY)) {
        $this->capacity = $capacity;
    }
    return $this;
}
}

<?php


require_once 'camion.php';

$truck = new Truck('black', 1,);
echo $truck->forward();
var_dump($truck);
var_dump(Truck::ALLOWED_CAPACITY);
echo '<br>';



echo $truck->forward();
echo '<br> Vitesse du Camion:' . $truck->currentSpeed .'<br>';
echo $truck->brake();
echo '<br> Vitesse de la voiture:' .$truck->currentSpeed .'<br>';
echo $truck->brake();

