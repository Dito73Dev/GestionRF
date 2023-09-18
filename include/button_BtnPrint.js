Runner.buttonEvents["BtnPrint"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnPrint';
	
	if ( !pageObj.buttonEventBefore['BtnPrint'] ) {
		pageObj.buttonEventBefore['BtnPrint'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnPrint'] ) {
		pageObj.buttonEventAfter['BtnPrint'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.print();return false;

		}
	}
	
	$('a[id="BtnPrint"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnPrint" + "_" + Runner.genId();
		
		// create object
		var button_BtnPrint = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnPrint"
		});
		
		// init
		button_BtnPrint.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

