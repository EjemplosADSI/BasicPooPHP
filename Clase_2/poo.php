<?php
    class Carro { //Palabra Clave class, UpperCamelCase, Seguido de {}
        private string $marca; //Visiblidad (public, protected y private)
        private string $color = "Rojo"; // lowerCamelCase, asignacion de valores
        private bool $cajaAutomatica = true; //tipos de datos (boolean, integer, float, string, null, array, object)
        private float $cantidadGasolina = 0; //

        private array $marcasExcluidas = array('lexus', 'opel', 'porche');

        public function __construct($marca = "Generica", $color = "Rojo", $cajaAutomatica = false) // Constructor de la clase.
        {
            //echo "Hola Fui creado"; // Se ejecuta cuando se crea un objeto
            //$this->saluda(); // $this hace referencia a métodos o propiedades de la clase.
            //$this->cajaAutomatica = false; // Se pueden cambiar el valor por defecto de las propiedades
            $this->marca = $marca; //Propiedad recibida y asigna a una propiedad de la clase
            $this->color = $color;
            $this->cajaAutomatica = $cajaAutomatica;
            $this->cantidadGasolina = 10;
        }

        function __destruct()
        {
            echo $this->marca." Fui eliminado..";
        }

        /**
         * @return mixed|string
         */
        public function getMarca() : string
        {
            return $this->marca;
        }

        /**
         * @param mixed|string $marca
         */
        public function setMarca(string $marca): void
        {
            if(in_array(strtolower($marca), $this->marcasExcluidas)){
                echo "La marca ".$marca." no esta permitida";
            }else{
                $this->marca = $marca;
            }
        }

        /**
         * @return mixed|string
         */
        public function getColor() : string
        {
            return $this->color;
        }

        /**
         * @param mixed|string $color
         */
        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        /**
         * @return false|mixed
         */
        public function getCajaAutomatica() : string
        {
            return ($this->cajaAutomatica) ? "Si" : "No";
        }

        /**
         * @param false|mixed $cajaAutomatica
         */
        public function setCajaAutomatica(string $cajaAutomatica): void
        {
            $this->cajaAutomatica = (trim(strtolower($cajaAutomatica)) == "no") ? false : true;
        }

        /**
         * @return float
         */
        public function getCantidadGasolina(): float
        {
            return $this->cantidadGasolina;
        }

        /**
         * @param float $cantidadGasolina
         */
        public function setCantidadGasolina(float $cantidadGasolina): void
        {
            $this->cantidadGasolina = $cantidadGasolina;
        }

        //https://www.php.net/manual/es/language.constants.predefined.php
        public function saludar (string $nombre){ //Definicion de Metodo (Firma) visiblidad, function, nombre metodo lowerCamelCase (), llaves de inicio
            return "Hola ".$nombre.", soy un ".__CLASS__." <strong>".$this->marca.
                "</strong> y mi color es ".$this->color."<br/>"; // Se puede
        }

        public function tanquear (float $litros): Carro
        {
            $this->cantidadGasolina += $litros;
            return $this;
        }

        public function viajar (int $kilometros): Carro
        {
            $consumo = $kilometros / 50;
            $this->cantidadGasolina -= $consumo;
            return $this;
        }

        public function __toString() : string
        {
            return $this->getMarca().", \ ".$this->getColor();
        }

    }

    $bmw = new Carro('BMW', 'Azul'); // Crear el objeto bmw de la clase Carro; A esto se le llama instanciacion.
    $mercedes = new Carro(); //Segundo Objeto de la clase Objeto
    $audi = new Carro("Audi", "Naranja", true); //Segundo Objeto de la clase Objeto

    //Obtener una propiedad
    //echo $bmw->color."<br/>";   //Para obtener la propiedad de un objeto se usa el conecto ->
    //echo $mercedes->color."<br/>";

    //Establecer una propiedad
    //$bmw->color = "Azul";   //Para establecer una propiedad se le asigna de la misma manera que una variable
    //$bmw->marca = "BMW";
    //echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";   //Imprimimos los valores

    //$mercedes->color = "Negro";
    //$mercedes->marca = "Mercedes Benz";
    //echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";   //Imprimimos los valores

    //Llamar a un metodo
    //echo $bmw->saluda()."<br/>"; //Llamar a un metodo
    //echo "Saludo: ".$bmw->marca." ".$bmw->saluda()."<br/>"; //Concatenar salida

    echo $bmw->saludar('Diego');
    echo $mercedes->saludar('Juan');
    echo $audi->saludar('Pedro');

    $audi->tanquear(20) //30 Litros
        ->viajar(100) // 28 Litros
        ->viajar(200) // 24 Litros
        ->tanquear(50)  // 74 Litros
        ->viajar(300) // 68 Litros
        ->tanquear(20); //88 Litros

echo "Soy ".$audi->getMarca()." y tengo ".$audi->getCantidadGasolina()." Litros de Gasolina<br/>";
echo "Soy ".$bmw->getMarca()." y tengo ".$bmw->getCantidadGasolina()." Litros de Gasolina<br/>";