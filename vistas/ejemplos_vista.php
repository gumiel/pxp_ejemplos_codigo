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


</script>



