<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_gedocumentos_ingresos_consumo  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		//**********  Insert a record into another table  ************

$data = array();
$data["doclasedoc_id_fk"] = $values['doclasedoc_id'];
$data["mdclasedoc"] = $values['doclasedoc'];
$data["mdnrodoc"] = $values['do_nrodoc'];
$data["mdfechadoc"] = $values['do_fechadoc'];
$data["mdalmacen"] = $values['docodregion'];
$data["as_nroasiento_fk"] = $values['as_nroasiento_fk'];
$data["md_tipomovto"] = $values['do_tipomov'];
$data["mdconcepto"] = $values['do_concepto'];
$data["mddependencia"] = $values['do_dep'];
$data["geusuario"] = $values['sys_user'];
DB::Insert("dbrf.almovtodia", $data );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		
$data = array();
$keyvalues = array();
//$data["doclasedoc_id_fk"] = $values['doclasedoc_id'];
$data["mdclasedoc"] = $values['doclasedoc'];
$data["mdnrodoc"] = $values['do_nrodoc'];
$data["mdfechadoc"] = $values['do_fechadoc'];
$data["mdalmacen"] = $values['docodregion'];
$data["as_nroasiento_fk"] = $values['as_nroasiento_fk'];
$data["md_tipomovto"] = $values['do_tipomov'];
$data["mdconcepto"] = $values['do_concepto'];
$data["mddependencia"] = $values['do_dep'];
$data["geusuario"] = $values['sys_user'];
$keyvalues["doclasedoc_id_fk"] = $keys['doclasedoc_id'];
DB::Update("dbrf.almovtodia", $data, $keyvalues );


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
