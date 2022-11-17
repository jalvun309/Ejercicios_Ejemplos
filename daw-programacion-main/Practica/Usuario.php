<?php

class Usuario
{
    //Declaración de las variables del objeto usuario.
    public $direccion;
    public $nombre;
    protected $clave;
    protected DateTime $fecnac;
    protected bool $esta_logado;

    //Constructor de la clase Usuario, gracias a esto podemos instanciar el objeto
    function __construct(string $name, string $pswd, bool $log, string $fec = "now", string $direcc = "No registrada")
    {
        echo "\nLlamando al constructor de $this->nombre\n";
        $this->nombre = $name;
        $this->clave = password_hash($pswd, PASSWORD_DEFAULT);
        $this->direccion = $direcc;
        $this->fecnac = new DateTime("$fec");
        $this->esta_logado = $log;
    }

    //Destructor del objeto
    function __destruct()
    {
        echo "\nLlamada al destructor de $this->nombre\n";
    }
    //Funcion Set para poder poner o cambiar la clave sin necesidad del constructor

    //Comprueba además que la clave tiene al menos una mayúscula, una minúscula y un número.
    //Si falta alguno de estos elementos, muestra mensaje de error por pantalla, y devuelve -2, -3 y -4 respectivamente.
    function setClave(string $la_clave)
    {
        if (strlen($la_clave) >= 7) {
            $uppercase = preg_match('@[A-Z]@', $la_clave);
            $lowercase = preg_match('@[a-z]@', $la_clave);
            $number    = preg_match('@[0-9]@', $la_clave);

            if(!$uppercase || !$lowercase || !$number ) {
                echo "\nLa nueva clave no cumple los requisitos, no será añadida.\n";
            }else{
                echo "\nContraseña aceptada por el sistema.\n";
                $this->clave=password_hash($la_clave,PASSWORD_DEFAULT);
            }
        } else {
            echo "No cumplidos los parametros de contraseña, minimo 7 caracteres";
            return -1;
        }

    }

    function setfecna(string $fecha)
    {
        $fec = new DateTime($fecha);
        $aux = new DateTime("now");
        $comp = new DateInterval($fec, $aux);
        $anios = $comp->format('y');
        if ((int)$anios < 16) {
            echo "Edad minima 16 años";
        } else {
            echo "\nDatos introducidos en el sistema\n";
            $this->fecnac = $fecha;
        }
        //echo $intervalo->format('%y años numericos');
        //$this->fecnac = $fecha;
    }

    function setlog(bool $login)
    {
        $this->esta_logado = $login;
    }

    /* Esta función que ya no esta comentada pero lo que esta haciendo es el echo de salida para cada vez que tengamos que ver las propiedades del mismo.*/
    function __toString()
    {
        $mensaje = "\nLa direccion del usuario {$this->nombre}: {$this->direccion}\n";
        $mensaje .= "La clave es: {$this->clave}\n";
        $mensaje .= "La fecha de nacimiento es: {$this->fecnac->format('Y/m/d')}\n";
        return $mensaje;
    }

    //Funcion para cambiar el nombre, el primer parametro es para buscar el dato concreto y el segundo para sustituirlo
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function login($clav)
    {
        if ($this->clave != password_hash($clav, PASSWORD_DEFAULT)) {
            echo "Contraseña incorrecta";
        } else {
            return $this->esta_logado = true;
        }
    }

    public function get_Esta_logado(){
        return $this->esta_logado;
    }

}

//Clase administrador derivada de usuario para poder heredas sus varuables, métodos y funciones de la misma
class Administrador extends Usuario
{
    //Declaración de las variables del objeto administrador, incluyendo de manera implicita las variables de usuario.
    public $privilegios;

    //Constructor de adminitrador
    function __construct(int $privi = 000, string $clave, string $nombre)
    {
        echo "Llamada constructor Administrador\n";
        //La linea de abajo solo llama al constructor de la clase padre.
        parent::__construct($nombre, $clave);
        $this->privilegios = $privi;

    }
}

//Creación de los objetos sin constructor
/*
$usu = new Usuario();
$usu->nombre = "Juan";
$usu->setClave("juan22");*/
//Creación con el constructor
$usua = new Usuario("Aladyn", "MonoChita7", True);

//Creacion del objeto sin constructor
/*
$admin = new Administrador();
$admin->nombre = "Ana";
$admin->setClave("barbate22");
$admin->privilegios = "777";
*/
/*
//Creacion con el constructor
$adm = new Administrador("777", "Perro123", "Valentin");


//Descripciones de los objetos
var_dump($usu);
var_dump($usua);
var_dump($adm);
var_dump($admin);
*/
echo $usua;

$usua->setClave("Pruebaplease1");
echo $usua;
//Para la clase administrador tendriamos que añadir en el constructor los nuevos parametros pero por el resto no deberia de dar problemas