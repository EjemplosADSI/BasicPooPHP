<?php
    class Carro { //Palabra Clave class, UpperCamelCase, Seguido de {}
        public $marca; //Visiblidad (public, protected y private)
        public $color = "Rojo"; // lowerCamelCase, asignacion de valores
        public $cajaAutomatica = true; //tipos de datos (boolean, integer, float, string, null, array, object)

        public function saluda (){ //Definicion de Metodo (Firma) visiblidad, function, nombre metodo lowerCamelCase (), llaves de inicio
            return "beep";
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
