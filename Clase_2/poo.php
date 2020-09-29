<?php
    class Carro { //Palabra Clave class, UpperCamelCase, Seguido de {}
        public $marca; //Visiblidad (public, protected y private)
        public $color = "Rojo"; // lowerCamelCase, asignacion de valores
        public $cajaAutomatica = true; //tipos de datos (boolean, integer, float, string, null, array, object)
        public $gasolina = 0; //

        public function __construct() // Constructor de la clase.
        {
            echo "Hola Fui creado"; // Se ejecuta cuando se crea un objeto
            $this->saluda(); // $this hace referencia a métodos o propiedades de la clase.
            $this->cajaAutomatica = false; // Se pueden cambiar el valor por defecto de las propiedades
        }

        public function saluda (){ //Definicion de Metodo (Firma) visiblidad, function, nombre metodo lowerCamelCase (), llaves de inicio
            return "beep, soy <strong>".$this->marca.
                "</strong> y mi color es ".$this->color; // Se puede
        }

        public function tanquear(int $cantidad): bool
        {
            return $this->gasolina += $cantidad;
        }

        public function viaje(int $kilometros): Carro
        {
            $consumo = $kilometros / 50;
            $this->gasolina -= $consumo;
            return $this;
        }

    }

    $bmw = new Carro(); // Crear el objeto bmw de la clase Carro; A esto se le llama instanciacion.
    $mercedes = new Carro(); //Segundo Objeto de la clase Objeto

    //Obtener una propiedad
    echo $bmw->color."<br/>";   //Para obtener la propiedad de un objeto se usa el conecto ->
    echo $mercedes->color."<br/>";

    //Establecer una propiedad
    $bmw->color = "Azul";   //Para establecer una propiedad se le asigna de la misma manera que una variable
    $bmw->marca = "BMW";
    echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";   //Imprimimos los valores

    $mercedes->color = "Negro";
    $mercedes->marca = "Mercedes Benz";
    echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";   //Imprimimos los valores

    //Llamar a un metodo
    echo $bmw->saluda()."<br/>"; //Llamar a un metodo
    echo "Saludo: ".$bmw->marca." ".$bmw->saluda()."<br/>"; //Concatenar salida

    echo $gasolinaActual = $bmw->tanquear(100)