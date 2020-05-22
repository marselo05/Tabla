<!DOCTYPE html>
<html>
<head>
	<title>Lista registro</title>
</head>
<body>
<?php

	
	/**
	* 
	*/
	class Tabla
	{
		private $mat=array();
		private $cantFilas;
		private $cantColumnas;

		public function __construct($fi, $co)
		{
			$this->cantFilas	= $fi;
			$this->cantColumnas	= $co;
		}

		public function cargar($fila, $columna, $valor) {
			$this->mat[$fila][$columna] = $valor;
		}

		public function inicioTabla() {
			echo '<table border="1">';
		}

		public function inicioFila() {
			echo '<tr>';
		}
		public function mostrar ($fi, $co) {
			echo '<td>'.$this->mat[$fi][$co].'</td>';
		}

		public function finFila () {
			echo '</tr>';
		}

		public function finTabla () {
			echo '</table>';
		}

		public function graficar ()
		{
			$this->inicioTabla();
			for ($f=1; $f <= $this->cantFilas ; $f++) 
			{ 
				$this->inicioFila();
				for ($c=1; $c <= $this->cantColumnas ; $c++) 
				{ 
					$this->mostrar($f,$c);
				}
				$this->finFila();
				
			}
			$this->finTabla();
		}
	}
	// 
		$tabla1 = new Tabla(2,3);

		// cuerpo
			$tabla1->cargar(1,1,"1");
			$tabla1->cargar(1,2,"2");
			$tabla1->cargar(1,3,"3");

			$tabla1->cargar(2,1,"4");
			$tabla1->cargar(2,2,"5");
			$tabla1->cargar(2,3,"6");

			$tabla1->cargar(2,1,"7");
			$tabla1->cargar(2,2,"8");
			$tabla1->cargar(2,3,"9");

		$tabla1->graficar();

?>
<br>
<table border="1">
	<thead>
		<tr>
			<th>Pos</th>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Pepe</td>
			<td>Mendez</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Marta</td>
			<td>Lopez</td>
		</tr>
	</tbody>
</table>
</body>
</html>