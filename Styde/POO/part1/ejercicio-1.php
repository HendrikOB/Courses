<?php

class carro {
	protected $model;
	protected $color;
	protected $numPuertas;
	Protected $funciones1;
	Protected $funciones2;

	public function __construct($model, $color, $numPuertas, $funciones1, $funciones2) {
		$this->model 		= $model;
		$this->color		= $color;
		$this->numPuertas	= $numPuertas;
		$this->funciones1	= $funciones1;
		$this->funciones2	= $funciones2;
	}

	public function getCarro () {
		return 'El modelo es ' . $this->model . ' ' . ' de color ' . $this->color . ' tiene ' . $this->numPuertas . ' Puede ' . $this->funciones1 . ' y tambien puede ' . $this->funciones2;
	}

}

$carro1 = new carro('Toyota', 'Rojo', '4 puertas', 'acelerar', 'tocar la bocina');

exit($carro1->getCarro());