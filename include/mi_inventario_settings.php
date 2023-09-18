<?php
$tdatami_inventario = array();
$tdatami_inventario[".searchableFields"] = array();
$tdatami_inventario[".ShortName"] = "mi_inventario";
$tdatami_inventario[".OwnerID"] = "di_funcionario";
$tdatami_inventario[".OriginalTable"] = "q_global_enservicio";


$tdatami_inventario[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatami_inventario[".originalPagesByType"] = $tdatami_inventario[".pagesByType"];
$tdatami_inventario[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatami_inventario[".originalPages"] = $tdatami_inventario[".pages"];
$tdatami_inventario[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatami_inventario[".originalDefaultPages"] = $tdatami_inventario[".defaultPages"];

//	field labels
$fieldLabelsmi_inventario = array();
$fieldToolTipsmi_inventario = array();
$pageTitlesmi_inventario = array();
$placeHoldersmi_inventario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmi_inventario["Spanish"] = array();
	$fieldToolTipsmi_inventario["Spanish"] = array();
	$placeHoldersmi_inventario["Spanish"] = array();
	$pageTitlesmi_inventario["Spanish"] = array();
	$fieldLabelsmi_inventario["Spanish"]["aldevindiv_id"] = "Aldevindiv Id";
	$fieldToolTipsmi_inventario["Spanish"]["aldevindiv_id"] = "";
	$placeHoldersmi_inventario["Spanish"]["aldevindiv_id"] = "";
	$fieldLabelsmi_inventario["Spanish"]["cod_cta"] = "GRUPO";
	$fieldToolTipsmi_inventario["Spanish"]["cod_cta"] = "";
	$placeHoldersmi_inventario["Spanish"]["cod_cta"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_fechacompra"] = "FECHA DE COMPRA";
	$fieldToolTipsmi_inventario["Spanish"]["di_fechacompra"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_fechacompra"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_nroplaca"] = "PLACA";
	$fieldToolTipsmi_inventario["Spanish"]["di_nroplaca"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_nroplaca"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_nroserie"] = "SERIE";
	$fieldToolTipsmi_inventario["Spanish"]["di_nroserie"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_nroserie"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_ubica"] = "UBICACIÓN";
	$fieldToolTipsmi_inventario["Spanish"]["di_ubica"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_ubica"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_valorcompra"] = "VALOR DE COMPRA";
	$fieldToolTipsmi_inventario["Spanish"]["di_valorcompra"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_valorcompra"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_almacen"] = "ALMACÉN";
	$fieldToolTipsmi_inventario["Spanish"]["di_almacen"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_almacen"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_cuenta"] = "CUENTA";
	$fieldToolTipsmi_inventario["Spanish"]["di_cuenta"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_cuenta"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_codelem"] = "ELEMENTO";
	$fieldToolTipsmi_inventario["Spanish"]["di_codelem"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_codelem"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_funcionario"] = "FUNCIONARIO";
	$fieldToolTipsmi_inventario["Spanish"]["di_funcionario"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_funcionario"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_depsup"] = "DIRECCION | DESPACHO";
	$fieldToolTipsmi_inventario["Spanish"]["di_depsup"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_depsup"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_dep"] = "DEPENDENCIA";
	$fieldToolTipsmi_inventario["Spanish"]["di_dep"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_dep"] = "";
	$fieldLabelsmi_inventario["Spanish"]["di_fecha_asigacion"] = "FECHA DE ASIGNACIÓN";
	$fieldToolTipsmi_inventario["Spanish"]["di_fecha_asigacion"] = "";
	$placeHoldersmi_inventario["Spanish"]["di_fecha_asigacion"] = "";
	$fieldLabelsmi_inventario["Spanish"]["alelemdevolutivo_id_fk"] = "NOMBRE ELEMENTO";
	$fieldToolTipsmi_inventario["Spanish"]["alelemdevolutivo_id_fk"] = "";
	$placeHoldersmi_inventario["Spanish"]["alelemdevolutivo_id_fk"] = "";
	if (count($fieldToolTipsmi_inventario["Spanish"]))
		$tdatami_inventario[".isUseToolTips"] = true;
}


	$tdatami_inventario[".NCSearch"] = true;



$tdatami_inventario[".shortTableName"] = "mi_inventario";
$tdatami_inventario[".nSecOptions"] = 1;

$tdatami_inventario[".mainTableOwnerID"] = "di_funcionario";
$tdatami_inventario[".entityType"] = 1;
$tdatami_inventario[".connId"] = "dbrf_at_127_0_0_1";


$tdatami_inventario[".strOriginalTableName"] = "q_global_enservicio";

	



$tdatami_inventario[".showAddInPopup"] = false;

$tdatami_inventario[".showEditInPopup"] = false;

$tdatami_inventario[".showViewInPopup"] = false;

$tdatami_inventario[".listAjax"] = false;
//	temporary
//$tdatami_inventario[".listAjax"] = false;

	$tdatami_inventario[".audit"] = false;

	$tdatami_inventario[".locking"] = false;


$pages = $tdatami_inventario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatami_inventario[".edit"] = true;
	$tdatami_inventario[".afterEditAction"] = 1;
	$tdatami_inventario[".closePopupAfterEdit"] = 1;
	$tdatami_inventario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatami_inventario[".add"] = true;
$tdatami_inventario[".afterAddAction"] = 1;
$tdatami_inventario[".closePopupAfterAdd"] = 1;
$tdatami_inventario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatami_inventario[".list"] = true;
}



$tdatami_inventario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatami_inventario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatami_inventario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatami_inventario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatami_inventario[".printFriendly"] = true;
}



$tdatami_inventario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatami_inventario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatami_inventario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatami_inventario[".isUseAjaxSuggest"] = true;



												

$tdatami_inventario[".ajaxCodeSnippetAdded"] = false;

$tdatami_inventario[".buttonsAdded"] = false;

$tdatami_inventario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatami_inventario[".isUseTimeForSearch"] = false;


$tdatami_inventario[".badgeColor"] = "6B8E23";


$tdatami_inventario[".allSearchFields"] = array();
$tdatami_inventario[".filterFields"] = array();
$tdatami_inventario[".requiredSearchFields"] = array();

$tdatami_inventario[".googleLikeFields"] = array();
$tdatami_inventario[".googleLikeFields"][] = "aldevindiv_id";
$tdatami_inventario[".googleLikeFields"][] = "di_almacen";
$tdatami_inventario[".googleLikeFields"][] = "di_cuenta";
$tdatami_inventario[".googleLikeFields"][] = "di_codelem";
$tdatami_inventario[".googleLikeFields"][] = "cod_cta";
$tdatami_inventario[".googleLikeFields"][] = "di_nroplaca";
$tdatami_inventario[".googleLikeFields"][] = "di_nroserie";
$tdatami_inventario[".googleLikeFields"][] = "di_funcionario";
$tdatami_inventario[".googleLikeFields"][] = "di_depsup";
$tdatami_inventario[".googleLikeFields"][] = "di_dep";
$tdatami_inventario[".googleLikeFields"][] = "di_ubica";
$tdatami_inventario[".googleLikeFields"][] = "di_fechacompra";
$tdatami_inventario[".googleLikeFields"][] = "di_fecha_asigacion";
$tdatami_inventario[".googleLikeFields"][] = "di_valorcompra";
$tdatami_inventario[".googleLikeFields"][] = "alelemdevolutivo_id_fk";



$tdatami_inventario[".tableType"] = "list";

$tdatami_inventario[".printerPageOrientation"] = 0;
$tdatami_inventario[".nPrinterPageScale"] = 100;

$tdatami_inventario[".nPrinterSplitRecords"] = 40;

$tdatami_inventario[".geocodingEnabled"] = false;










$tdatami_inventario[".pageSize"] = 20;

$tdatami_inventario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatami_inventario[".strOrderBy"] = $tstrOrderBy;

$tdatami_inventario[".orderindexes"] = array();


$tdatami_inventario[".sqlHead"] = "SELECT aldevindiv_id,  di_almacen,  di_cuenta,  di_codelem,  cod_cta,  di_nroplaca,  di_nroserie,  di_funcionario,  di_depsup,  di_dep,  di_ubica,  di_fechacompra,  di_fecha_asigacion,  di_valorcompra,  alelemdevolutivo_id_fk";
$tdatami_inventario[".sqlFrom"] = "FROM aldevindiv";
$tdatami_inventario[".sqlWhereExpr"] = "";
$tdatami_inventario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatami_inventario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatami_inventario[".arrGroupsPerPage"] = $arrGPP;

$tdatami_inventario[".highlightSearchResults"] = true;

$tableKeysmi_inventario = array();
$tableKeysmi_inventario[] = "aldevindiv_id";
$tdatami_inventario[".Keys"] = $tableKeysmi_inventario;


$tdatami_inventario[".hideMobileList"] = array();




//	aldevindiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aldevindiv_id";
	$fdata["GoodName"] = "aldevindiv_id";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","aldevindiv_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "aldevindiv_id";

		$fdata["sourceSingle"] = "aldevindiv_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aldevindiv_id";

	
	
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


	$tdatami_inventario["aldevindiv_id"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "aldevindiv_id";
//	di_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "di_almacen";
	$fdata["GoodName"] = "di_almacen";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_almacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_almacen";

		$fdata["sourceSingle"] = "di_almacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_almacen";

	
	
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
	$edata["LookupTable"] = "inv_almacen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ascodalmacen";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ascodalmacen_nombre";

	

	
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


	$tdatami_inventario["di_almacen"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_almacen";
//	di_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "di_cuenta";
	$fdata["GoodName"] = "di_cuenta";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_cuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_cuenta";

		$fdata["sourceSingle"] = "di_cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_cuenta";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "aldevindiv_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatami_inventario["di_cuenta"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_cuenta";
//	di_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "di_codelem";
	$fdata["GoodName"] = "di_codelem";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_codelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_codelem";

		$fdata["sourceSingle"] = "di_codelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_codelem";

	
	
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


	$tdatami_inventario["di_codelem"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_codelem";
//	cod_cta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cod_cta";
	$fdata["GoodName"] = "cod_cta";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","cod_cta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_cta";

		$fdata["sourceSingle"] = "cod_cta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_cta";

	
	
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
	$edata["LookupTable"] = "alcuentasalma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ca_codcuenta";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ca_nomcuenta";

	

	
	$edata["LookupOrderBy"] = "ca_nomcuenta";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "aldevindiv_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatami_inventario["cod_cta"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "cod_cta";
//	di_nroplaca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "di_nroplaca";
	$fdata["GoodName"] = "di_nroplaca";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_nroplaca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_nroplaca";

		$fdata["sourceSingle"] = "di_nroplaca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_nroplaca";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatami_inventario["di_nroplaca"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_nroplaca";
//	di_nroserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "di_nroserie";
	$fdata["GoodName"] = "di_nroserie";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_nroserie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_nroserie";

		$fdata["sourceSingle"] = "di_nroserie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_nroserie";

	
	
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


	$tdatami_inventario["di_nroserie"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_nroserie";
//	di_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "di_funcionario";
	$fdata["GoodName"] = "di_funcionario";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_funcionario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "di_funcionario";

		$fdata["sourceSingle"] = "di_funcionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_funcionario";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatami_inventario["di_funcionario"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_funcionario";
//	di_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "di_depsup";
	$fdata["GoodName"] = "di_depsup";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_depsup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_depsup";

	
	
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


	$tdatami_inventario["di_depsup"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_depsup";
//	di_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "di_dep";
	$fdata["GoodName"] = "di_dep";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_dep";

	
	
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


	$tdatami_inventario["di_dep"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_dep";
//	di_ubica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "di_ubica";
	$fdata["GoodName"] = "di_ubica";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_ubica");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_ubica";

		$fdata["sourceSingle"] = "di_ubica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_ubica";

	
	
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


	$tdatami_inventario["di_ubica"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_ubica";
//	di_fechacompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "di_fechacompra";
	$fdata["GoodName"] = "di_fechacompra";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_fechacompra");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "di_fechacompra";

		$fdata["sourceSingle"] = "di_fechacompra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_fechacompra";

	
	
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
		$fdata["filterTotalFields"] = "func_tipovinc";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatami_inventario["di_fechacompra"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_fechacompra";
//	di_fecha_asigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "di_fecha_asigacion";
	$fdata["GoodName"] = "di_fecha_asigacion";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_fecha_asigacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "di_fecha_asigacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_fecha_asigacion";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatami_inventario["di_fecha_asigacion"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_fecha_asigacion";
//	di_valorcompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "di_valorcompra";
	$fdata["GoodName"] = "di_valorcompra";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","di_valorcompra");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "di_valorcompra";

		$fdata["sourceSingle"] = "di_valorcompra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "di_valorcompra";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatami_inventario["di_valorcompra"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "di_valorcompra";
//	alelemdevolutivo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "alelemdevolutivo_id_fk";
	$fdata["GoodName"] = "alelemdevolutivo_id_fk";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("Mi_inventario","alelemdevolutivo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "alelemdevolutivo_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alelemdevolutivo_id_fk";

	
	
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
	$edata["LookupTable"] = "alelemdevolutivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "alelemdevolutivo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ed_nomelemento";

	

	
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


	$tdatami_inventario["alelemdevolutivo_id_fk"] = $fdata;
		$tdatami_inventario[".searchableFields"][] = "alelemdevolutivo_id_fk";


$tables_data["Mi_inventario"]=&$tdatami_inventario;
$field_labels["Mi_inventario"] = &$fieldLabelsmi_inventario;
$fieldToolTips["Mi_inventario"] = &$fieldToolTipsmi_inventario;
$placeHolders["Mi_inventario"] = &$placeHoldersmi_inventario;
$page_titles["Mi_inventario"] = &$pageTitlesmi_inventario;


changeTextControlsToDate( "Mi_inventario" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mi_inventario"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mi_inventario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mi_inventario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aldevindiv_id,  di_almacen,  di_cuenta,  di_codelem,  cod_cta,  di_nroplaca,  di_nroserie,  di_funcionario,  di_depsup,  di_dep,  di_ubica,  di_fechacompra,  di_fecha_asigacion,  di_valorcompra,  alelemdevolutivo_id_fk";
$proto0["m_strFrom"] = "FROM aldevindiv";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "aldevindiv_id",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto6["m_sql"] = "aldevindiv_id";
$proto6["m_srcTableName"] = "Mi_inventario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "di_almacen",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto8["m_sql"] = "di_almacen";
$proto8["m_srcTableName"] = "Mi_inventario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "di_cuenta",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto10["m_sql"] = "di_cuenta";
$proto10["m_srcTableName"] = "Mi_inventario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "di_codelem",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto12["m_sql"] = "di_codelem";
$proto12["m_srcTableName"] = "Mi_inventario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_cta",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto14["m_sql"] = "cod_cta";
$proto14["m_srcTableName"] = "Mi_inventario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroplaca",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto16["m_sql"] = "di_nroplaca";
$proto16["m_srcTableName"] = "Mi_inventario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroserie",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto18["m_sql"] = "di_nroserie";
$proto18["m_srcTableName"] = "Mi_inventario";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "di_funcionario",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto20["m_sql"] = "di_funcionario";
$proto20["m_srcTableName"] = "Mi_inventario";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "di_depsup",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto22["m_sql"] = "di_depsup";
$proto22["m_srcTableName"] = "Mi_inventario";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "di_dep",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto24["m_sql"] = "di_dep";
$proto24["m_srcTableName"] = "Mi_inventario";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "di_ubica",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto26["m_sql"] = "di_ubica";
$proto26["m_srcTableName"] = "Mi_inventario";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "di_fechacompra",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto28["m_sql"] = "di_fechacompra";
$proto28["m_srcTableName"] = "Mi_inventario";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "di_fecha_asigacion",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto30["m_sql"] = "di_fecha_asigacion";
$proto30["m_srcTableName"] = "Mi_inventario";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "di_valorcompra",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto32["m_sql"] = "di_valorcompra";
$proto32["m_srcTableName"] = "Mi_inventario";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "alelemdevolutivo_id_fk",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "Mi_inventario"
));

$proto34["m_sql"] = "alelemdevolutivo_id_fk";
$proto34["m_srcTableName"] = "Mi_inventario";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "aldevindiv";
$proto37["m_srcTableName"] = "Mi_inventario";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "aldevindiv_id";
$proto37["m_columns"][] = "doclasedoc_id_fk";
$proto37["m_columns"][] = "almovinddia_id_fk";
$proto37["m_columns"][] = "doclasedoc_in_fk";
$proto37["m_columns"][] = "almovdevdia_id_fk";
$proto37["m_columns"][] = "di_almacen";
$proto37["m_columns"][] = "legaliza";
$proto37["m_columns"][] = "alelemdevolutivo_id_fk";
$proto37["m_columns"][] = "di_cuenta";
$proto37["m_columns"][] = "di_codelem";
$proto37["m_columns"][] = "cod_cta";
$proto37["m_columns"][] = "di_nroplaca";
$proto37["m_columns"][] = "di_nroserie";
$proto37["m_columns"][] = "di_funcionario";
$proto37["m_columns"][] = "di_depsup";
$proto37["m_columns"][] = "di_dep";
$proto37["m_columns"][] = "di_ubica";
$proto37["m_columns"][] = "di_estadoelem";
$proto37["m_columns"][] = "di_detalleestado";
$proto37["m_columns"][] = "diconceptoadq";
$proto37["m_columns"][] = "di_fechacompra";
$proto37["m_columns"][] = "di_fecha_asigacion";
$proto37["m_columns"][] = "di_valorcompra";
$proto37["m_columns"][] = "di_vrmejoras";
$proto37["m_columns"][] = "di_costo_puesta_marcha";
$proto37["m_columns"][] = "nicsp_fecha_inicio_dep";
$proto37["m_columns"][] = "nicsp_costodesmant";
$proto37["m_columns"][] = "nicsp_valorresidual";
$proto37["m_columns"][] = "nicsp_valordeterioro";
$proto37["m_columns"][] = "nicsp_valor_comercial_seguro";
$proto37["m_columns"][] = "nicsp_basedepreciable";
$proto37["m_columns"][] = "nicsp_costo";
$proto37["m_columns"][] = "nicsp_codigo_ppe";
$proto37["m_columns"][] = "nicsp_vigenciapm";
$proto37["m_columns"][] = "nicsp_politicamaterialidad";
$proto37["m_columns"][] = "nicsp_fecha_ini_deprecia";
$proto37["m_columns"][] = "nicsp_vidautil";
$proto37["m_columns"][] = "nicsp_fechacorte";
$proto37["m_columns"][] = "nicsp_fechacorte_a";
$proto37["m_columns"][] = "nicsp_dias";
$proto37["m_columns"][] = "nicsp_dias_a";
$proto37["m_columns"][] = "nicsp_meses_a";
$proto37["m_columns"][] = "nicsp_depreciamensual_a";
$proto37["m_columns"][] = "nicsp_depreciaacumulada_a";
$proto37["m_columns"][] = "nicsp_meses";
$proto37["m_columns"][] = "nicsp_depreciamensual";
$proto37["m_columns"][] = "nicsp_depreciaacumulada_hist";
$proto37["m_columns"][] = "nicsp_depreciaacumulada";
$proto37["m_columns"][] = "nicsp_vnl";
$proto37["m_columns"][] = "flag_comodato";
$proto37["m_columns"][] = "comodato";
$proto37["m_columns"][] = "di_estadoconserva";
$proto37["m_columns"][] = "di_fechaultmovto";
$proto37["m_columns"][] = "dicodconcepto";
$proto37["m_columns"][] = "di_valorultmovto";
$proto37["m_columns"][] = "di_vrajusinfacum";
$proto37["m_columns"][] = "di_vracumdepreacum";
$proto37["m_columns"][] = "di_vrajusacumdep";
$proto37["m_columns"][] = "di_vrdepredifacum";
$proto37["m_columns"][] = "di_vrajusinfult";
$proto37["m_columns"][] = "di_vrdepreacumult";
$proto37["m_columns"][] = "di_vrajusdepult";
$proto37["m_columns"][] = "di_vrdepredifult";
$proto37["m_columns"][] = "di_otraplaca";
$proto37["m_columns"][] = "di_nroplacastma";
$proto37["m_columns"][] = "sys_user";
$proto37["m_columns"][] = "sys_date";
$proto37["m_columns"][] = "sys_time";
$proto37["m_columns"][] = "sys_sts";
$proto37["m_columns"][] = "upd_date";
$proto37["m_columns"][] = "upd_user";
$proto37["m_columns"][] = "upd_status";
$proto37["m_columns"][] = "transact_id_fk";
$proto37["m_columns"][] = "estado_elemento";
$proto37["m_columns"][] = "resolucion_baja_num";
$proto37["m_columns"][] = "resolucion_baja_date";
$proto37["m_columns"][] = "resolucion_baja_obs";
$proto37["m_columns"][] = "dep_tipo";
$proto37["m_columns"][] = "dep_fecha_reintegro";
$proto37["m_columns"][] = "dep_fecha_corte";
$proto37["m_columns"][] = "dep_tiempo_dias";
$proto37["m_columns"][] = "dep_tiempo_meses_r";
$proto37["m_columns"][] = "dep_tiempo_meses_final";
$proto37["m_columns"][] = "dep_tiempo_anios";
$proto37["m_columns"][] = "dep_vida_util";
$proto37["m_columns"][] = "dep_valor_dep_mensual";
$proto37["m_columns"][] = "dep_valor_dep_acum";
$proto37["m_columns"][] = "dep_valor_dep_acum_2";
$proto37["m_columns"][] = "dep_saldo_libros";
$proto37["m_columns"][] = "veh_avaluo_2013";
$proto37["m_columns"][] = "mod_trasnporte";
$proto37["m_columns"][] = "verifica_status";
$proto37["m_columns"][] = "verifica_user";
$proto37["m_columns"][] = "verifica_date";
$proto37["m_columns"][] = "ctrl";
$proto37["m_columns"][] = "observaciones";
$proto37["m_columns"][] = "nicsp_fechacorte_hist";
$proto37["m_columns"][] = "nicsp_vida_remanente";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "aldevindiv";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Mi_inventario";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Mi_inventario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mi_inventario = createSqlQuery_mi_inventario();


	
								;

															

$tdatami_inventario[".sqlquery"] = $queryData_mi_inventario;



$tdatami_inventario[".hasEvents"] = false;

?>