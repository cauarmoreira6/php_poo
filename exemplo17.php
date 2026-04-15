<?php 

class Visibilidade {
    var $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }

    public function publicFunc(){
        echo "Metódo Público<br>";
    }

    protected function protectedFunc(){
        echo "Metódo Protegido<br>";
    }

    private function privateFunc(){
        echo "Metódo Privado<br>";
    }
}

$teste = new Visibilidade(1,2,3);
echo "Atributo Public = $teste->varPublic";
// echo "Atributo Protected = $teste->varProtected";
// echo "Atributo Private = $teste->varPrivate";

echo "<br>";

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();