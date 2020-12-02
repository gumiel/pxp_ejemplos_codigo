<?php
?>

<script type="text/javascript">
	
/**
 * 
 * Ejemplo de una llamada AJAX
 * 
**/
Ext.Ajax.request({
	url : '../../sis_activoscor/control/Activo/modificarActivoEstado',
	params : data,
	success : function(resp)
	{
		var reg = Ext.util.JSON.decode(Ext.util.Format.trim(resp.responseText));
		if (reg.ROOT.error) {

		} else {
		
		}
	},
	failure: this.conexionFailure,
	timeout: this.timeout,
	scope: this
});








/**
 * 
 * Deshabilitar botones en el toolbar
 * 
**/
Atributos:[
	{
		bsave:false,
		bnew: false,
		bedit:false,
		bdel:false,
		bexcel: false,
	}
];






/**
 * 
 * Metodos para Visualizar PRELOADER en el pxp
 * 
**/
Phx.CP.loadingHide();
Phx.CP.loadingShow();




/**
 * 
 * Metodos para ALERT
 * 
**/
Ext.Msg.alert('Error','No se pudo proceder: '+dato);




/**
 * 
 * ventana sencilla como para un mensaje que desaparesca a un determinado tiempo
 * 
**/
var winMensajeRapido = new Ext.Window({
    title: "Mensaje",
    layout:'fit',
    width:280,
    height:110,
    closeAction:'hide',
    plain: true,
    html : 'El material/activo asignable con codigo <b>'+store.baseParams.query+'</b> ya fue asignado a <b>'+datos[0].funcionario+'</b>',
    x:500,
    y:10,
    buttons: [{
        text: 'Cerrar',
        handler: function(){
            winMensajeRapido.hide();
        }
    }]
});
winMensajeRapido.show();
setTimeout(function(){
    winMensajeRapido.destroy();
},7000);




/**
 * 
 * Ejemplo del uso de botones sobrescribiendo los metodos de los botones
 * 
**/
Atributos:[
	onButtonNew: function(){

	      this.swButton = 'NEW';
	      this.sw_valores = 'si';
	      this.Cmp.id_grupo.enable();
	      this.Cmp.id_tipo_cc.enable();
	     

	      Phx.vista.ActivoMaterialBajoResponsabilidad.superclass.onButtonNew.call(this); 
	      this.Cmp.id_grupo.reset(); 		
	      this.Cmp.id_grupo.modificado = true;	      
	    
	},
	onButtonEdit: function(){

		this.swButton = 'EDIT';

		// var rec = this.sm.getSelected().data;
		var tipo = this.sm.getSelected().data.tipo_calculo;
		
		if(tipo==3)
		{
			this.deshabilitarComponentesEdit_material();
		} else
		{
			this.deshabilitarComponentesEdit_activo();
		}
	    
		Phx.vista.ActivoMaterialBajoResponsabilidad.superclass.onButtonEdit.call(this); 
	    
	}
];














/**
 * 
 * Ejemplo de un campo del tipo TEXTO
 * 
 */
{
	config:{
		name: 'descripcion', 							// Indentificador Unico para el componente
		// inputType:'hidden',							// Campo opcional para indicar si es un campo oculto pero operativo
		emptyText: 'Ingresa la descripcion',			// Es como el placeholder de HTML
		fieldLabel: 'Decripción del Activo/Material', 	// Nombre del Label del campo
		labelStyle: 'width:150px; margin: 5;',  		// Estilo para agregar ancho al label
		allowBlank: false, 								// Atributo para indicar si es obligatorio o no
		anchor: '80%', 									// Tamaño porcentual del input con relacion a su contenedor
		gwidth: 250, 									// Tamaño de la columna en la grilla
		maxLength:250,             						// Cantidad maxima de caracteres en el campo
		renderer : function(value, p, record) {
			var res1 = value; 							// Devuelve el valor del campo Ejm. "Central Hidroelectrica"
			var res2 = record; 							// Devuelve un Objeto con { data, id, json, store} 
														// donde data estan los datos de la fila. Ejm record.data['desc_centro_costo']
														// Admite html
			// return String.format('{0}', record.data['descripcion']);
			return res1;
		}
	},
	type:'TextField', 								   	// Tipo de campo
	filters:{pfiltro:'act.descripcion',type:'string'}, 	// Filtro para la busqueda
	bottom_filter: true, 							   	// Propiedad que habilita la busqueda segun la propiedad filters
	id_grupo:1,
	form:true, 										   	// Indica si es visible en el formulario
	grid:true,                                         	// Indica si es visible en la grilla
},

</script>
















