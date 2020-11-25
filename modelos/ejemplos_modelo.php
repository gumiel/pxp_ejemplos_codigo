<?php

/**
 * 
 * Ejemplo basico de un INSERT
 * 
 * */

function insertarComprobante(){
	
	//Definicion de variables para ejecucion del procedimiento
	$this->procedimiento='conta.ft_comprobante_ime'; // Nombre de la funcion  (Los "ime" en globan los insert, update y delete)
	$this->transaccion='CONTA_CBTE_INS'; // // Nombre de la transaccion
	$this->tipo_procedimiento='IME'; // Tipo de transaccion
			
	//Define los parametros para la funcion
	$this->setParametro('nro_comprobante','nro_comprobante','int4');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('tipo_cambio','tipo_cambio','numeric');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('beneficiario','beneficiario','varchar');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('fecha','fecha','date'); // Valor que enviara a la base de datos segun el tipo de dato

	//Ejecuta la instruccion
	$this->armarConsulta();
	// $this->getConsulta(); // Este metodo muestra la consulta creada
	$this->ejecutarConsulta();

	//Devuelve la respuesta
	return $this->respuesta;
}




/**
 * 
 * Ejemplo basico de un UPDATE
 * 
 * */

function modificarComprobante(){
	
	//Definicion de variables para ejecucion del procedimiento
	$this->procedimiento='conta.ft_comprobante_ime'; // Nombre de la funcion  (Los "ime" en globan los insert, update y delete)
	$this->transaccion='CONTA_CBTE_MOD'; // // Nombre de la transaccion
	$this->tipo_procedimiento='IME'; // Tipo de transaccion
			
	//Define los parametros para la funcion
	$this->setParametro('id_comprobante','id_comprobante','int4');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('tipo_cambio','tipo_cambio','numeric');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('beneficiario','beneficiario','varchar');	// Valor que enviara a la base de datos segun el tipo de dato
	$this->setParametro('fecha','fecha','date'); // Valor que enviara a la base de datos segun el tipo de dato

	//Ejecuta la instruccion
	$this->armarConsulta();
	$this->ejecutarConsulta();

	//Devuelve la respuesta
	return $this->respuesta;
}



/**
 * 
 * Ejemplo basico de un DELETE
 * 
 * */

function eliminarComprobante(){
	//Definicion de variables para ejecucion del procedimiento
	$this->procedimiento='conta.ft_comprobante_ime'; // Nombre de la funcion  (Los "ime" en globan los insert, update y delete)
	$this->transaccion='CONTA_CBTE_ELI'; // Nombre de la transaccion
	$this->tipo_procedimiento='IME'; // Tipo de transaccion
			
	//Define los parametros para la funcion
	$this->setParametro('id_comprobante','id_comprobante','int4'); // Valor que enviara a la base de datos segun el tipo de dato

	//Ejecuta la instruccion
	$this->armarConsulta();
	$this->ejecutarConsulta();

	//Devuelve la respuesta
	return $this->respuesta;
}
?>