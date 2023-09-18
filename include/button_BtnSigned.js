Runner.buttonEvents["BtnSigned"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnSigned';
	
	if ( !pageObj.buttonEventBefore['BtnSigned'] ) {
		pageObj.buttonEventBefore['BtnSigned'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire('El documento ya se encuentra firmado!')
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnSigned'] ) {
		pageObj.buttonEventAfter['BtnSigned'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnSigned"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnSigned" + "_" + Runner.genId();
		
		// create object
		var button_BtnSigned = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnSigned"
		});
		
		// init
		button_BtnSigned.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

