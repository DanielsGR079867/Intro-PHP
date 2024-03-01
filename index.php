<?php
$name = "Daniel Asael"; //variable string 
/**
 */
$age = null;
$lastName = 'Gutierrez Renteria';
//variables numericas
$age = 27;
$size = 1.72;
//variables boleanas
$booleanTrue = true;
$booleanFalse = false;

// Arrays 
$array = [];
$array = array();
$arrayValues = [10, 'string', true,['otro valor']];

// constantes

//conts CONSTANTE_1 = 'valor constate 1';
const constante_2 = 23;

// objetos 
$objct = new stdClass();


//clases 
class Auto 
{
    var $color;
    string $marca;
    array $array;

    boool $propiedadBoolean = false;
    $propiedadSinTipoDeDato = [];

}

//constructor 

class auto 
{
int $numberOfDoors = null;
//public funtion _constructor(int $doors)
//{
 //   $this->numberOfDoors = $doors;

//}

public funtion _constructor(
    public int $numeroOfDoors)
    {

    }
}

//funciones 

public, private, protected;

public function getDetails (string $time)
{
    echo "time" . $time;
    echo "time $time";
    echo 'hello woel';
}

//crear instancias de las clases 

$autoInstance = new Auto(4);
$autoInstanc2 = Auto(4);


//estructuras de control 
//ciclos

for($i = 0; $i < 10; $i++){
    echo $i."\n";
}



?>
Escribe en Oswaldo Ibarra
