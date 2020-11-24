
<?php
/**
 * 
 * Ejemplo de los archivos para importar
 * 
**/
require_once(dirname(__DIR__)."../../pxp/lib/configPhpJasperReports.php");
require_once(dirname(__DIR__)."../../pxp/lib/libs_backend/PhpJasperReports/PhpJasperReport.php"); 






/**
 * 
 * Ejemplo de creacion de un archivo jasper
 * 
**/
function reportePorCentroDeCosto()
{
    $reporteBase64 = $this->reporteJasperPorCC($this->objParam->getParametro('id_gestion'), $this->objParam->getParametro('id_periodo'));
    
    $dato = array();
    $dato['reporte_base64'] = $reporteBase64;

    $this->mensajeExito = new Mensaje();

    $this->mensajeExito->setDatos($dato);

    $this->mensajeExito->imprimirRespuesta($this->mensajeExito->generarJson());
}

function reporteJasperPorCC($idGestion, $idPeriodo)
{
    global $config;
    $db = $config['PHPJR'][0]['datasource'];

    $jasper = new PhpJasperReport($db, dirname(__DIR__).'/jrxmls/', dirname(__DIR__).'/archivos_generados_jasper');
    
    $fileJrxml = 'ProrrateoPorCentroDeCosto.jrxml';
    

    $file = $jasper->run($fileJrxml, //Archivo jasper
                        [   
                            'id_gestion'=>$idGestion, 
                            'id_periodo'=>$idPeriodo, 
                            'urlImagen'=>dirname(__DIR__).'/jrxmls/images/ende.jpg'
                        ], // Datos para la el reporte jasper                            
                        ['xlsx'], // tipos de formato que sacara el jasper
                        ); 
    $base64 = $jasper->convertBase64File($file);
    unlink($file);
    // $jasper->forceDowload($file,'Reporte_Ejecucion_presupuestaria');

    return $base64;
}

?>