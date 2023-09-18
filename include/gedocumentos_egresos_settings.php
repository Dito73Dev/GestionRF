<?php
$tdatagedocumentos_egresos = array();
$tdatagedocumentos_egresos[".searchableFields"] = array();
$tdatagedocumentos_egresos[".ShortName"] = "gedocumentos_egresos";
$tdatagedocumentos_egresos[".OwnerID"] = "";
$tdatagedocumentos_egresos[".OriginalTable"] = "gedocumentos";


$tdatagedocumentos_egresos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagedocumentos_egresos[".originalPagesByType"] = $tdatagedocumentos_egresos[".pagesByType"];
$tdatagedocumentos_egresos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagedocumentos_egresos[".originalPages"] = $tdatagedocumentos_egresos[".pages"];
$tdatagedocumentos_egresos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagedocumentos_egresos[".originalDefaultPages"] = $tdatagedocumentos_egresos[".defaultPages"];

//	field labels
$fieldLabelsgedocumentos_egresos = array();
$fieldToolTipsgedocumentos_egresos = array();
$pageTitlesgedocumentos_egresos = array();
$placeHoldersgedocumentos_egresos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgedocumentos_egresos["Spanish"] = array();
	$fieldToolTipsgedocumentos_egresos["Spanish"] = array();
	$placeHoldersgedocumentos_egresos["Spanish"] = array();
	$pageTitlesgedocumentos_egresos["Spanish"] = array();
	$fieldLabelsgedocumentos_egresos["Spanish"]["as_nroasiento_fk"] = "Asiento";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["as_nroasiento_fk"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["as_nroasiento_fk"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_detalle"] = "Descripción del ingreso";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_detalle"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_detalle"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_fechadoc"] = "Fecha del ingreso";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_fechadoc"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_fechadoc"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_file"] = "Anexo";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_file"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_file"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_legaliza"] = "Do Legaliza";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_legaliza"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_legaliza"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_nrodoc"] = "Ordinal";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_nrodoc"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_nrodoc"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_tipodoc"] = "Tipo documento";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_tipodoc"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_tipodoc"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_tipomov"] = "Tipo de movimiento";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_tipomov"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_tipomov"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["doccnit"] = "NIT Proveedor";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["doccnit"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["doccnit"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["doclasedoc"] = "Clase de documento";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["doclasedoc"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["doclasedoc"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["doclasedoc_id"] = "Documento";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["doclasedoc_id"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["doclasedoc_id"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["docnomproveedor"] = "Nombre | Razón Social";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["docnomproveedor"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["docnomproveedor"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["docodregion"] = "Almacén";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["docodregion"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["docodregion"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["egreso"] = "Egreso";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["egreso"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["egreso"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["sys_fecha"] = "Fecha sistema";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["sys_fecha"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["sys_fecha"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["sys_user"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["sys_user"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_concepto"] = "Concepto";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_concepto"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_concepto"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_dep"] = "Dependencia";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_dep"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_dep"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_depsup"] = "Despacho | Dirección";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_depsup"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_depsup"] = "";
	$fieldLabelsgedocumentos_egresos["Spanish"]["do_email"] = "Email";
	$fieldToolTipsgedocumentos_egresos["Spanish"]["do_email"] = "";
	$placeHoldersgedocumentos_egresos["Spanish"]["do_email"] = "";
	$pageTitlesgedocumentos_egresos["Spanish"]["masterlist"] = "| Documento: {%doclasedoc_id}";
	if (count($fieldToolTipsgedocumentos_egresos["Spanish"]))
		$tdatagedocumentos_egresos[".isUseToolTips"] = true;
}


	$tdatagedocumentos_egresos[".NCSearch"] = true;



$tdatagedocumentos_egresos[".shortTableName"] = "gedocumentos_egresos";
$tdatagedocumentos_egresos[".nSecOptions"] = 0;

$tdatagedocumentos_egresos[".mainTableOwnerID"] = "";
$tdatagedocumentos_egresos[".entityType"] = 1;
$tdatagedocumentos_egresos[".connId"] = "dbrf_at_127_0_0_1";


$tdatagedocumentos_egresos[".strOriginalTableName"] = "gedocumentos";

	



$tdatagedocumentos_egresos[".showAddInPopup"] = false;

$tdatagedocumentos_egresos[".showEditInPopup"] = false;

$tdatagedocumentos_egresos[".showViewInPopup"] = false;

$tdatagedocumentos_egresos[".listAjax"] = false;
//	temporary
//$tdatagedocumentos_egresos[".listAjax"] = false;

	$tdatagedocumentos_egresos[".audit"] = false;

	$tdatagedocumentos_egresos[".locking"] = false;


$pages = $tdatagedocumentos_egresos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagedocumentos_egresos[".edit"] = true;
	$tdatagedocumentos_egresos[".afterEditAction"] = 1;
	$tdatagedocumentos_egresos[".closePopupAfterEdit"] = 1;
	$tdatagedocumentos_egresos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagedocumentos_egresos[".add"] = true;
$tdatagedocumentos_egresos[".afterAddAction"] = 0;
$tdatagedocumentos_egresos[".closePopupAfterAdd"] = 1;
$tdatagedocumentos_egresos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatagedocumentos_egresos[".list"] = true;
}



$tdatagedocumentos_egresos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagedocumentos_egresos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagedocumentos_egresos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagedocumentos_egresos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagedocumentos_egresos[".printFriendly"] = true;
}



$tdatagedocumentos_egresos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagedocumentos_egresos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagedocumentos_egresos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagedocumentos_egresos[".isUseAjaxSuggest"] = true;



																								

$tdatagedocumentos_egresos[".ajaxCodeSnippetAdded"] = false;

$tdatagedocumentos_egresos[".buttonsAdded"] = false;

$tdatagedocumentos_egresos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagedocumentos_egresos[".isUseTimeForSearch"] = false;


$tdatagedocumentos_egresos[".badgeColor"] = "008b8b";


$tdatagedocumentos_egresos[".allSearchFields"] = array();
$tdatagedocumentos_egresos[".filterFields"] = array();
$tdatagedocumentos_egresos[".requiredSearchFields"] = array();

$tdatagedocumentos_egresos[".googleLikeFields"] = array();
$tdatagedocumentos_egresos[".googleLikeFields"][] = "doclasedoc_id";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "as_nroasiento_fk";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "docodregion";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_detalle";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_fechadoc";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_file";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_legaliza";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_nrodoc";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_tipodoc";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_tipomov";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "doccnit";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "doclasedoc";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "docnomproveedor";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "egreso";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "sys_fecha";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "sys_user";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_concepto";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_dep";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_depsup";
$tdatagedocumentos_egresos[".googleLikeFields"][] = "do_email";



$tdatagedocumentos_egresos[".tableType"] = "list";

$tdatagedocumentos_egresos[".printerPageOrientation"] = 0;
$tdatagedocumentos_egresos[".nPrinterPageScale"] = 100;

$tdatagedocumentos_egresos[".nPrinterSplitRecords"] = 40;

$tdatagedocumentos_egresos[".geocodingEnabled"] = false;




$tdatagedocumentos_egresos[".isDisplayLoading"] = true;






$tdatagedocumentos_egresos[".pageSize"] = 20;

$tdatagedocumentos_egresos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY doclasedoc_id DESC";
$tdatagedocumentos_egresos[".strOrderBy"] = $tstrOrderBy;

$tdatagedocumentos_egresos[".orderindexes"] = array();
			$tdatagedocumentos_egresos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "doclasedoc_id");


$tdatagedocumentos_egresos[".sqlHead"] = "SELECT doclasedoc_id,  as_nroasiento_fk,  docodregion,  do_detalle,  do_fechadoc,  do_file,  do_legaliza,  do_nrodoc,  do_tipodoc,  do_tipomov,  doccnit,  doclasedoc,  docnomproveedor,  egreso,  sys_fecha,  sys_user,  do_concepto,  do_dep,  do_depsup,  do_email";
$tdatagedocumentos_egresos[".sqlFrom"] = "FROM gedocumentos";
$tdatagedocumentos_egresos[".sqlWhereExpr"] = "(doclasedoc = 315)";
$tdatagedocumentos_egresos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagedocumentos_egresos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagedocumentos_egresos[".arrGroupsPerPage"] = $arrGPP;

$tdatagedocumentos_egresos[".highlightSearchResults"] = true;

$tableKeysgedocumentos_egresos = array();
$tableKeysgedocumentos_egresos[] = "doclasedoc_id";
$tdatagedocumentos_egresos[".Keys"] = $tableKeysgedocumentos_egresos;


$tdatagedocumentos_egresos[".hideMobileList"] = array();




//	doclasedoc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "doclasedoc_id";
	$fdata["GoodName"] = "doclasedoc_id";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","doclasedoc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "doclasedoc_id";

		$fdata["sourceSingle"] = "doclasedoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["doclasedoc_id"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "doclasedoc_id";
//	as_nroasiento_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_nroasiento_fk";
	$fdata["GoodName"] = "as_nroasiento_fk";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","as_nroasiento_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "as_nroasiento_fk";

		$fdata["sourceSingle"] = "as_nroasiento_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_nroasiento_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "alasientos_gestion";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"do_fechadoc", 'lookupF'=>"as_fechaasiento");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "as_nroasiento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "as_nroasiento";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["as_nroasiento_fk"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "as_nroasiento_fk";
//	docodregion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "docodregion";
	$fdata["GoodName"] = "docodregion";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","docodregion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "docodregion";

		$fdata["sourceSingle"] = "docodregion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docodregion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_ctrl_numdocumento";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"do_nrodoc", 'lookupF'=>"newnumber");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ascodalmacen";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ascodalmacen";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["docodregion"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "docodregion";
//	do_detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "do_detalle";
	$fdata["GoodName"] = "do_detalle";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_detalle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_detalle";

		$fdata["sourceSingle"] = "do_detalle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_detalle";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_detalle"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_detalle";
//	do_fechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "do_fechadoc";
	$fdata["GoodName"] = "do_fechadoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_fechadoc");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "do_fechadoc";

		$fdata["sourceSingle"] = "do_fechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_fechadoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_fechadoc"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_fechadoc";
//	do_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "do_file";
	$fdata["GoodName"] = "do_file";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_file";

		$fdata["sourceSingle"] = "do_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_file"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_file";
//	do_legaliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "do_legaliza";
	$fdata["GoodName"] = "do_legaliza";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_legaliza");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "do_legaliza";

		$fdata["sourceSingle"] = "do_legaliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_legaliza";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_legaliza"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_legaliza";
//	do_nrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "do_nrodoc";
	$fdata["GoodName"] = "do_nrodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_nrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_nrodoc";

		$fdata["sourceSingle"] = "do_nrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_nrodoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_nrodoc"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_nrodoc";
//	do_tipodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "do_tipodoc";
	$fdata["GoodName"] = "do_tipodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_tipodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipodoc";

		$fdata["sourceSingle"] = "do_tipodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipodoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_type_doc";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "contractor_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_tipodoc"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_tipodoc";
//	do_tipomov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "do_tipomov";
	$fdata["GoodName"] = "do_tipomov";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_tipomov");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipomov";

		$fdata["sourceSingle"] = "do_tipomov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipomov";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_movimiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cod_movimiento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nmovimiento";

				$edata["LookupWhere"] = "cod_movimiento = 2";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "doclasedoc";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "doclasedoc_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_tipomov"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_tipomov";
//	doccnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "doccnit";
	$fdata["GoodName"] = "doccnit";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","doccnit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doccnit";

		$fdata["sourceSingle"] = "doccnit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doccnit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master_proveedores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"docnomproveedor", 'lookupF'=>"contractor_nombresfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"do_email", 'lookupF'=>"contractor_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["doccnit"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "doccnit";
//	doclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "doclasedoc";
	$fdata["GoodName"] = "doclasedoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","doclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc";

		$fdata["sourceSingle"] = "doclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "geclasedocto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cd_clasedoc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cd_nombredoc";

				$edata["LookupWhere"] = "cd_clasedoc = 315";


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "do_tipomov", "lookup" => "cd_tipomov" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["doclasedoc"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "doclasedoc";
//	docnomproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "docnomproveedor";
	$fdata["GoodName"] = "docnomproveedor";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","docnomproveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "docnomproveedor";

		$fdata["sourceSingle"] = "docnomproveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docnomproveedor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["docnomproveedor"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "docnomproveedor";
//	egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "egreso";
	$fdata["GoodName"] = "egreso";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","egreso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "egreso";

		$fdata["sourceSingle"] = "egreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "egreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["egreso"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "egreso";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","sys_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha";

		$fdata["sourceSingle"] = "sys_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["sys_fecha"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "sys_fecha";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["sys_user"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "sys_user";
//	do_concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "do_concepto";
	$fdata["GoodName"] = "do_concepto";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_concepto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_concepto";

		$fdata["sourceSingle"] = "do_concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_concepto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "alconceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "co_codconcepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "co_nomconcepto";

				$edata["LookupWhere"] = "co_ctrl = 1 AND co_tipomovto = 'S'";


	
	$edata["LookupOrderBy"] = "co_nomconcepto";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_concepto"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_concepto";
//	do_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "do_dep";
	$fdata["GoodName"] = "do_dep";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_dep";

		$fdata["sourceSingle"] = "do_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "do_depsup", "lookup" => "id_depto_superior" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_dep"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_dep";
//	do_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "do_depsup";
	$fdata["GoodName"] = "do_depsup";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_depsup";

		$fdata["sourceSingle"] = "do_depsup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_depsup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "Departamento_superior";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "do_dep";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_depsup"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_depsup";
//	do_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "do_email";
	$fdata["GoodName"] = "do_email";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos","do_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_email";

		$fdata["sourceSingle"] = "do_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos["do_email"] = $fdata;
		$tdatagedocumentos_egresos[".searchableFields"][] = "do_email";


$tables_data["gedocumentos_egresos"]=&$tdatagedocumentos_egresos;
$field_labels["gedocumentos_egresos"] = &$fieldLabelsgedocumentos_egresos;
$fieldToolTips["gedocumentos_egresos"] = &$fieldToolTipsgedocumentos_egresos;
$placeHolders["gedocumentos_egresos"] = &$placeHoldersgedocumentos_egresos;
$page_titles["gedocumentos_egresos"] = &$pageTitlesgedocumentos_egresos;


changeTextControlsToDate( "gedocumentos_egresos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["gedocumentos_egresos"] = array();
//	aldevindiv_egresos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="aldevindiv_egresos";
		$detailsParam["dOriginalTable"] = "aldevindiv";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "aldevindiv_egresos";
	$detailsParam["dCaptionTable"] = GetTableCaption("aldevindiv_egresos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["gedocumentos_egresos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["gedocumentos_egresos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["gedocumentos_egresos"][$dIndex]["masterKeys"][]="doclasedoc_id";

				$detailsTablesData["gedocumentos_egresos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["gedocumentos_egresos"][$dIndex]["detailKeys"][]="doclasedoc_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["gedocumentos_egresos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="alasientos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="alasientos_gestion_e";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alasientos_gestion_e";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["gedocumentos_egresos"][0] = $masterParams;
				$masterTablesData["gedocumentos_egresos"][0]["masterKeys"] = array();
	$masterTablesData["gedocumentos_egresos"][0]["masterKeys"][]="as_nroasiento";
				$masterTablesData["gedocumentos_egresos"][0]["masterKeys"][]="ascodalmacen";
				$masterTablesData["gedocumentos_egresos"][0]["detailKeys"] = array();
	$masterTablesData["gedocumentos_egresos"][0]["detailKeys"][]="as_nroasiento_fk";
				$masterTablesData["gedocumentos_egresos"][0]["detailKeys"][]="docodregion";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gedocumentos_egresos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "doclasedoc_id,  as_nroasiento_fk,  docodregion,  do_detalle,  do_fechadoc,  do_file,  do_legaliza,  do_nrodoc,  do_tipodoc,  do_tipomov,  doccnit,  doclasedoc,  docnomproveedor,  egreso,  sys_fecha,  sys_user,  do_concepto,  do_dep,  do_depsup,  do_email";
$proto0["m_strFrom"] = "FROM gedocumentos";
$proto0["m_strWhere"] = "(doclasedoc = 315)";
$proto0["m_strOrderBy"] = "ORDER BY doclasedoc_id DESC";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "doclasedoc = 315";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "doclasedoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 315";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto6["m_sql"] = "doclasedoc_id";
$proto6["m_srcTableName"] = "gedocumentos_egresos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento_fk",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto8["m_sql"] = "as_nroasiento_fk";
$proto8["m_srcTableName"] = "gedocumentos_egresos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "docodregion",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto10["m_sql"] = "docodregion";
$proto10["m_srcTableName"] = "gedocumentos_egresos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "do_detalle",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto12["m_sql"] = "do_detalle";
$proto12["m_srcTableName"] = "gedocumentos_egresos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "do_fechadoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto14["m_sql"] = "do_fechadoc";
$proto14["m_srcTableName"] = "gedocumentos_egresos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "do_file",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto16["m_sql"] = "do_file";
$proto16["m_srcTableName"] = "gedocumentos_egresos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "do_legaliza",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto18["m_sql"] = "do_legaliza";
$proto18["m_srcTableName"] = "gedocumentos_egresos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "do_nrodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto20["m_sql"] = "do_nrodoc";
$proto20["m_srcTableName"] = "gedocumentos_egresos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto22["m_sql"] = "do_tipodoc";
$proto22["m_srcTableName"] = "gedocumentos_egresos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipomov",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto24["m_sql"] = "do_tipomov";
$proto24["m_srcTableName"] = "gedocumentos_egresos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "doccnit",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto26["m_sql"] = "doccnit";
$proto26["m_srcTableName"] = "gedocumentos_egresos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto28["m_sql"] = "doclasedoc";
$proto28["m_srcTableName"] = "gedocumentos_egresos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "docnomproveedor",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto30["m_sql"] = "docnomproveedor";
$proto30["m_srcTableName"] = "gedocumentos_egresos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "egreso",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto32["m_sql"] = "egreso";
$proto32["m_srcTableName"] = "gedocumentos_egresos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto34["m_sql"] = "sys_fecha";
$proto34["m_srcTableName"] = "gedocumentos_egresos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto36["m_sql"] = "sys_user";
$proto36["m_srcTableName"] = "gedocumentos_egresos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "do_concepto",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto38["m_sql"] = "do_concepto";
$proto38["m_srcTableName"] = "gedocumentos_egresos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "do_dep",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto40["m_sql"] = "do_dep";
$proto40["m_srcTableName"] = "gedocumentos_egresos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "do_depsup",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto42["m_sql"] = "do_depsup";
$proto42["m_srcTableName"] = "gedocumentos_egresos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "do_email",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto44["m_sql"] = "do_email";
$proto44["m_srcTableName"] = "gedocumentos_egresos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "gedocumentos";
$proto47["m_srcTableName"] = "gedocumentos_egresos";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "doclasedoc_id";
$proto47["m_columns"][] = "as_nroasiento_fk";
$proto47["m_columns"][] = "do_tipomov";
$proto47["m_columns"][] = "doclasedoc";
$proto47["m_columns"][] = "do_nrodoc";
$proto47["m_columns"][] = "do_fechadoc";
$proto47["m_columns"][] = "docodregion";
$proto47["m_columns"][] = "do_detalle";
$proto47["m_columns"][] = "do_tipodoc";
$proto47["m_columns"][] = "doccnit";
$proto47["m_columns"][] = "docnomproveedor";
$proto47["m_columns"][] = "do_email";
$proto47["m_columns"][] = "do_file";
$proto47["m_columns"][] = "sys_user";
$proto47["m_columns"][] = "sys_fecha";
$proto47["m_columns"][] = "do_legaliza";
$proto47["m_columns"][] = "egreso";
$proto47["m_columns"][] = "do_concepto";
$proto47["m_columns"][] = "do_depsup";
$proto47["m_columns"][] = "do_dep";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "gedocumentos";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "gedocumentos_egresos";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gedocumentos_egresos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gedocumentos_egresos = createSqlQuery_gedocumentos_egresos();


	
								;

																				

$tdatagedocumentos_egresos[".sqlquery"] = $queryData_gedocumentos_egresos;



include_once(getabspath("include/gedocumentos_egresos_events.php"));
$tdatagedocumentos_egresos[".hasEvents"] = true;

?>