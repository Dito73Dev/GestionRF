Runner.buttonEvents["PrintPDF"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'PrintPDF';
	
	if ( !pageObj.buttonEventBefore['PrintPDF'] ) {
		pageObj.buttonEventBefore['PrintPDF'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var nombrePDF = params["sol_rad"] = row.getFieldValue("sol_rad");  

ajax.addPDF( 'pdf', {}, function() {
 
  return ctrl.dialog( {
     title: 'Generar documento PDF',
     fields: [{
        name: 'filename',
        value: nombrePDF + '.pdf'
     }]
  });
});
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['PrintPDF'] ) {
		pageObj.buttonEventAfter['PrintPDF'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.open( params['filename'] );
		}
	}
	
	$('a[id="PrintPDF"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "PrintPDF" + "_" + Runner.genId();
		
		// create object
		var button_PrintPDF = new Runner.form.Button({
			id: this.id ,
			btnName: "PrintPDF"
		});
		
		// init
		button_PrintPDF.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

