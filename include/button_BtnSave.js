Runner.buttonEvents["BtnSave"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnSave';
	
	if ( !pageObj.buttonEventBefore['BtnSave'] ) {
		pageObj.buttonEventBefore['BtnSave'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
  title: '¿Desea generar la clave dinámica para firma del documento?',
  showDenyButton: true,
  // showCancelButton: true,
  confirmButtonText: 'Enviar clave dinámica',
  denyButtonText: "No enviar",
  }).then((result) => {
  /* Read more about isConfirmed, isDenied below */
	  if (result.isConfirmed) {
			 Swal.fire('Datos enviados!', '', 'success')
			 // $('#saveButton7').click();
			 $('a[id^="saveButton"]').click();

		} else { 
		if (result.isDenied) {
			Swal.fire('No se envió la información', '', 'info') 
	  }
  }
 })
return false;


		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnSave'] ) {
		pageObj.buttonEventAfter['BtnSave'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnSave"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnSave" + "_" + Runner.genId();
		
		// create object
		var button_BtnSave = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnSave"
		});
		
		// init
		button_BtnSave.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

