<?php
$tdataaldevindiv_egresos = array();
$tdataaldevindiv_egresos[".searchableFields"] = array();
$tdataaldevindiv_egresos[".ShortName"] = "aldevindiv_egresos";
$tdataaldevindiv_egresos[".OwnerID"] = "";
$tdataaldevindiv_egresos[".OriginalTable"] = "aldevindiv";


$tdataaldevindiv_egresos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaldevindiv_egresos[".originalPagesByType"] = $tdataaldevindiv_egresos[".pagesByType"];
$tdataaldevindiv_egresos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaldevindiv_egresos[".originalPages"] = $tdataaldevindiv_egresos[".pages"];
$tdataaldevindiv_egresos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaldevindiv_egresos[".originalDefaultPages"] = $tdataaldevindiv_egresos[".defaultPages"];

//	field labels
$fieldLabelsaldevindiv_egresos = array();
$fieldToolTipsaldevindiv_egresos = array();
$pageTitlesaldevindiv_egresos = array();
$placeHoldersaldevindiv_egresos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaldevindiv_egresos["Spanish"] = array();
	$fieldToolTipsaldevindiv_egresos["Spanish"] = array();
	$placeHoldersaldevindiv_egresos["Spanish"] = array();
	$pageTitlesaldevindiv_egresos["Spanish"] = array();
	$fieldLabelsaldevindiv_egresos["Spanish"]["aldevindiv_id"] = "Aldevindiv Id";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["aldevindiv_id"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["aldevindiv_id"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["doclasedoc_id_fk"] = "DOC";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["doclasedoc_id_fk"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["doclasedoc_id_fk"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["legaliza"] = "Legaliza";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["legaliza"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["legaliza"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["almovinddia_id_fk"] = "No. INTERNO";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["almovinddia_id_fk"] = "<p><em>Seleccione el número de la placa que desea vincular al documento de egreso</em></p>";
	$placeHoldersaldevindiv_egresos["Spanish"]["almovinddia_id_fk"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["doclasedoc_in_fk"] = "Doclasedoc In Fk";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["doclasedoc_in_fk"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["doclasedoc_in_fk"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_almacen"] = "ALMACÉN";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_almacen"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_almacen"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_cuenta"] = "COD. CUENTA";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_cuenta"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_cuenta"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_codelem"] = "COD. ELEMENTO";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_codelem"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_codelem"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["cod_cta"] = "COD. CTA.";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["cod_cta"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["cod_cta"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_nroplaca"] = "PLACA";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_nroplaca"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_nroplaca"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_nroserie"] = "SERIE";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_nroserie"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_nroserie"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_fechacompra"] = "FECHA DE COMPRA";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_fechacompra"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_fechacompra"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_fecha_asigacion"] = "FECHA DE ASIGNACIÓN";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_fecha_asigacion"] = "<p><em>Esta fecha corresponde a la fecha de inicio de depreciación</em></p>";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_fecha_asigacion"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_funcionario"] = "FUNCIONARIO";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_funcionario"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_funcionario"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_depsup"] = "DESPACHO | DIRECCIÓN";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_depsup"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_depsup"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_dep"] = "DEPENDENCIA";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_dep"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_dep"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["di_valorcompra"] = "VALOR DE COMPRA";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["di_valorcompra"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["di_valorcompra"] = "";
	$fieldLabelsaldevindiv_egresos["Spanish"]["almovdevdia_id_fk"] = "NOM. ELEMENTO";
	$fieldToolTipsaldevindiv_egresos["Spanish"]["almovdevdia_id_fk"] = "";
	$placeHoldersaldevindiv_egresos["Spanish"]["almovdevdia_id_fk"] = "";
	$pageTitlesaldevindiv_egresos["Spanish"]["add"] = "Vincular placa";
	if (count($fieldToolTipsaldevindiv_egresos["Spanish"]))
		$tdataaldevindiv_egresos[".isUseToolTips"] = true;
}


	$tdataaldevindiv_egresos[".NCSearch"] = true;



$tdataaldevindiv_egresos[".shortTableName"] = "aldevindiv_egresos";
$tdataaldevindiv_egresos[".nSecOptions"] = 0;

$tdataaldevindiv_egresos[".mainTableOwnerID"] = "";
$tdataaldevindiv_egresos[".entityType"] = 1;
$tdataaldevindiv_egresos[".connId"] = "dbrf_at_127_0_0_1";


$tdataaldevindiv_egresos[".strOriginalTableName"] = "aldevindiv";

	



$tdataaldevindiv_egresos[".showAddInPopup"] = false;

$tdataaldevindiv_egresos[".showEditInPopup"] = false;

$tdataaldevindiv_egresos[".showViewInPopup"] = false;

$tdataaldevindiv_egresos[".listAjax"] = false;
//	temporary
//$tdataaldevindiv_egresos[".listAjax"] = false;

	$tdataaldevindiv_egresos[".audit"] = false;

	$tdataaldevindiv_egresos[".locking"] = false;


$pages = $tdataaldevindiv_egresos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaldevindiv_egresos[".edit"] = true;
	$tdataaldevindiv_egresos[".afterEditAction"] = 1;
	$tdataaldevindiv_egresos[".closePopupAfterEdit"] = 1;
	$tdataaldevindiv_egresos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaldevindiv_egresos[".add"] = true;
$tdataaldevindiv_egresos[".afterAddAction"] = 1;
$tdataaldevindiv_egresos[".closePopupAfterAdd"] = 1;
$tdataaldevindiv_egresos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaldevindiv_egresos[".list"] = true;
}



$tdataaldevindiv_egresos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaldevindiv_egresos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaldevindiv_egresos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaldevindiv_egresos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaldevindiv_egresos[".printFriendly"] = true;
}



$tdataaldevindiv_egresos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaldevindiv_egresos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaldevindiv_egresos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaldevindiv_egresos[".isUseAjaxSuggest"] = true;



																								

$tdataaldevindiv_egresos[".ajaxCodeSnippetAdded"] = false;

$tdataaldevindiv_egresos[".buttonsAdded"] = false;

$tdataaldevindiv_egresos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaldevindiv_egresos[".isUseTimeForSearch"] = false;


$tdataaldevindiv_egresos[".badgeColor"] = "6b8e23";


$tdataaldevindiv_egresos[".allSearchFields"] = array();
$tdataaldevindiv_egresos[".filterFields"] = array();
$tdataaldevindiv_egresos[".requiredSearchFields"] = array();

$tdataaldevindiv_egresos[".googleLikeFields"] = array();
$tdataaldevindiv_egresos[".googleLikeFields"][] = "aldevindiv_id";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "doclasedoc_id_fk";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "almovinddia_id_fk";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "doclasedoc_in_fk";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "legaliza";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_almacen";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_cuenta";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_codelem";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "cod_cta";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_nroplaca";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_nroserie";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_fechacompra";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_fecha_asigacion";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_funcionario";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_depsup";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_dep";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "di_valorcompra";
$tdataaldevindiv_egresos[".googleLikeFields"][] = "almovdevdia_id_fk";



$tdataaldevindiv_egresos[".tableType"] = "list";

$tdataaldevindiv_egresos[".printerPageOrientation"] = 0;
$tdataaldevindiv_egresos[".nPrinterPageScale"] = 100;

$tdataaldevindiv_egresos[".nPrinterSplitRecords"] = 40;

$tdataaldevindiv_egresos[".geocodingEnabled"] = false;










$tdataaldevindiv_egresos[".pageSize"] = 20;

$tdataaldevindiv_egresos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaldevindiv_egresos[".strOrderBy"] = $tstrOrderBy;

$tdataaldevindiv_egresos[".orderindexes"] = array();


$tdataaldevindiv_egresos[".sqlHead"] = "SELECT aldevindiv_id,  doclasedoc_id_fk,  almovinddia_id_fk,  doclasedoc_in_fk,  legaliza,  di_almacen,  di_cuenta,  di_codelem,  cod_cta,  di_nroplaca,  di_nroserie,  di_fechacompra,  di_fecha_asigacion,  di_funcionario,  di_depsup,  di_dep,  di_valorcompra,  almovdevdia_id_fk";
$tdataaldevindiv_egresos[".sqlFrom"] = "FROM aldevindiv";
$tdataaldevindiv_egresos[".sqlWhereExpr"] = "";
$tdataaldevindiv_egresos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaldevindiv_egresos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaldevindiv_egresos[".arrGroupsPerPage"] = $arrGPP;

$tdataaldevindiv_egresos[".highlightSearchResults"] = true;

$tableKeysaldevindiv_egresos = array();
$tableKeysaldevindiv_egresos[] = "aldevindiv_id";
$tdataaldevindiv_egresos[".Keys"] = $tableKeysaldevindiv_egresos;


$tdataaldevindiv_egresos[".hideMobileList"] = array();




//	aldevindiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aldevindiv_id";
	$fdata["GoodName"] = "aldevindiv_id";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","aldevindiv_id");
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


	$tdataaldevindiv_egresos["aldevindiv_id"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "aldevindiv_id";
//	doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "doclasedoc_id_fk";
	$fdata["GoodName"] = "doclasedoc_id_fk";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","doclasedoc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc_id_fk";

		$fdata["sourceSingle"] = "doclasedoc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_id_fk";

	
	
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
	$edata["LookupTable"] = "gedocumentos_egresos";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"di_almacen", 'lookupF'=>"docodregion");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_funcionario", 'lookupF'=>"doccnit");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_depsup", 'lookupF'=>"do_depsup");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_dep", 'lookupF'=>"do_dep");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "doclasedoc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "doclasedoc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaldevindiv_egresos["doclasedoc_id_fk"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "doclasedoc_id_fk";
//	almovinddia_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "almovinddia_id_fk";
	$fdata["GoodName"] = "almovinddia_id_fk";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","almovinddia_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovinddia_id_fk";

		$fdata["sourceSingle"] = "almovinddia_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovinddia_id_fk";

	
	
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
	$edata["LookupTable"] = "almovinddia_legalizados";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"di_cuenta", 'lookupF'=>"midcuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_codelem", 'lookupF'=>"midcodelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"cod_cta", 'lookupF'=>"cod_cta");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_nroplaca", 'lookupF'=>"midnroplaca");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_nroserie", 'lookupF'=>"midnroserie");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_fechacompra", 'lookupF'=>"midfechadoc");
	$edata["autoCompleteFields"][] = array('masterF'=>"di_valorcompra", 'lookupF'=>"mid_valunit");
	$edata["autoCompleteFields"][] = array('masterF'=>"almovdevdia_id_fk", 'lookupF'=>"almovdevdia_id_fk");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "almovinddia_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "almovinddia_id";

				$edata["LookupWhere"] = "md_legalizado = 1";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataaldevindiv_egresos["almovinddia_id_fk"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "almovinddia_id_fk";
//	doclasedoc_in_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "doclasedoc_in_fk";
	$fdata["GoodName"] = "doclasedoc_in_fk";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","doclasedoc_in_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc_in_fk";

		$fdata["sourceSingle"] = "doclasedoc_in_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_in_fk";

	
	
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


	$tdataaldevindiv_egresos["doclasedoc_in_fk"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "doclasedoc_in_fk";
//	legaliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "legaliza";
	$fdata["GoodName"] = "legaliza";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","legaliza");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "legaliza";

		$fdata["sourceSingle"] = "legaliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legaliza";

	
	
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


	$tdataaldevindiv_egresos["legaliza"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "legaliza";
//	di_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "di_almacen";
	$fdata["GoodName"] = "di_almacen";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_almacen");
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
	$edata["LinkFieldType"] = 3;
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


	$tdataaldevindiv_egresos["di_almacen"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_almacen";
//	di_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "di_cuenta";
	$fdata["GoodName"] = "di_cuenta";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_cuenta");
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


	$tdataaldevindiv_egresos["di_cuenta"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_cuenta";
//	di_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "di_codelem";
	$fdata["GoodName"] = "di_codelem";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_codelem");
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


	$tdataaldevindiv_egresos["di_codelem"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_codelem";
//	cod_cta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cod_cta";
	$fdata["GoodName"] = "cod_cta";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","cod_cta");
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


	$tdataaldevindiv_egresos["cod_cta"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "cod_cta";
//	di_nroplaca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "di_nroplaca";
	$fdata["GoodName"] = "di_nroplaca";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_nroplaca");
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


	$tdataaldevindiv_egresos["di_nroplaca"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_nroplaca";
//	di_nroserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "di_nroserie";
	$fdata["GoodName"] = "di_nroserie";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_nroserie");
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


	$tdataaldevindiv_egresos["di_nroserie"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_nroserie";
//	di_fechacompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "di_fechacompra";
	$fdata["GoodName"] = "di_fechacompra";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_fechacompra");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdataaldevindiv_egresos["di_fechacompra"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_fechacompra";
//	di_fecha_asigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "di_fecha_asigacion";
	$fdata["GoodName"] = "di_fecha_asigacion";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_fecha_asigacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "di_fecha_asigacion";

		$fdata["sourceSingle"] = "di_fecha_asigacion";

	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 2;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdataaldevindiv_egresos["di_fecha_asigacion"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_fecha_asigacion";
//	di_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "di_funcionario";
	$fdata["GoodName"] = "di_funcionario";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_funcionario");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataaldevindiv_egresos["di_funcionario"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_funcionario";
//	di_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "di_depsup";
	$fdata["GoodName"] = "di_depsup";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_depsup";

		$fdata["sourceSingle"] = "di_depsup";

	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
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


	$tdataaldevindiv_egresos["di_depsup"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_depsup";
//	di_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "di_dep";
	$fdata["GoodName"] = "di_dep";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "di_dep";

		$fdata["sourceSingle"] = "di_dep";

	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataaldevindiv_egresos["di_dep"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_dep";
//	di_valorcompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "di_valorcompra";
	$fdata["GoodName"] = "di_valorcompra";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","di_valorcompra");
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


	$tdataaldevindiv_egresos["di_valorcompra"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "di_valorcompra";
//	almovdevdia_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "almovdevdia_id_fk";
	$fdata["GoodName"] = "almovdevdia_id_fk";
	$fdata["ownerTable"] = "aldevindiv";
	$fdata["Label"] = GetFieldLabel("aldevindiv_egresos","almovdevdia_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovdevdia_id_fk";

		$fdata["sourceSingle"] = "almovdevdia_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovdevdia_id_fk";

	
	
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
	$edata["LookupTable"] = "almovdevdia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "almovdevdia_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mddnomelem";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataaldevindiv_egresos["almovdevdia_id_fk"] = $fdata;
		$tdataaldevindiv_egresos[".searchableFields"][] = "almovdevdia_id_fk";


$tables_data["aldevindiv_egresos"]=&$tdataaldevindiv_egresos;
$field_labels["aldevindiv_egresos"] = &$fieldLabelsaldevindiv_egresos;
$fieldToolTips["aldevindiv_egresos"] = &$fieldToolTipsaldevindiv_egresos;
$placeHolders["aldevindiv_egresos"] = &$placeHoldersaldevindiv_egresos;
$page_titles["aldevindiv_egresos"] = &$pageTitlesaldevindiv_egresos;


changeTextControlsToDate( "aldevindiv_egresos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aldevindiv_egresos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aldevindiv_egresos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="gedocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gedocumentos_egresos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gedocumentos_egresos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["aldevindiv_egresos"][0] = $masterParams;
				$masterTablesData["aldevindiv_egresos"][0]["masterKeys"] = array();
	$masterTablesData["aldevindiv_egresos"][0]["masterKeys"][]="doclasedoc_id";
				$masterTablesData["aldevindiv_egresos"][0]["detailKeys"] = array();
	$masterTablesData["aldevindiv_egresos"][0]["detailKeys"][]="doclasedoc_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aldevindiv_egresos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aldevindiv_id,  doclasedoc_id_fk,  almovinddia_id_fk,  doclasedoc_in_fk,  legaliza,  di_almacen,  di_cuenta,  di_codelem,  cod_cta,  di_nroplaca,  di_nroserie,  di_fechacompra,  di_fecha_asigacion,  di_funcionario,  di_depsup,  di_dep,  di_valorcompra,  almovdevdia_id_fk";
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
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto6["m_sql"] = "aldevindiv_id";
$proto6["m_srcTableName"] = "aldevindiv_egresos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id_fk",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto8["m_sql"] = "doclasedoc_id_fk";
$proto8["m_srcTableName"] = "aldevindiv_egresos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "almovinddia_id_fk",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto10["m_sql"] = "almovinddia_id_fk";
$proto10["m_srcTableName"] = "aldevindiv_egresos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_in_fk",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto12["m_sql"] = "doclasedoc_in_fk";
$proto12["m_srcTableName"] = "aldevindiv_egresos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "legaliza",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto14["m_sql"] = "legaliza";
$proto14["m_srcTableName"] = "aldevindiv_egresos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "di_almacen",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto16["m_sql"] = "di_almacen";
$proto16["m_srcTableName"] = "aldevindiv_egresos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "di_cuenta",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto18["m_sql"] = "di_cuenta";
$proto18["m_srcTableName"] = "aldevindiv_egresos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "di_codelem",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto20["m_sql"] = "di_codelem";
$proto20["m_srcTableName"] = "aldevindiv_egresos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_cta",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto22["m_sql"] = "cod_cta";
$proto22["m_srcTableName"] = "aldevindiv_egresos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroplaca",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto24["m_sql"] = "di_nroplaca";
$proto24["m_srcTableName"] = "aldevindiv_egresos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "di_nroserie",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto26["m_sql"] = "di_nroserie";
$proto26["m_srcTableName"] = "aldevindiv_egresos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "di_fechacompra",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto28["m_sql"] = "di_fechacompra";
$proto28["m_srcTableName"] = "aldevindiv_egresos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "di_fecha_asigacion",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto30["m_sql"] = "di_fecha_asigacion";
$proto30["m_srcTableName"] = "aldevindiv_egresos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "di_funcionario",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto32["m_sql"] = "di_funcionario";
$proto32["m_srcTableName"] = "aldevindiv_egresos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "di_depsup",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto34["m_sql"] = "di_depsup";
$proto34["m_srcTableName"] = "aldevindiv_egresos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "di_dep",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto36["m_sql"] = "di_dep";
$proto36["m_srcTableName"] = "aldevindiv_egresos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "di_valorcompra",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto38["m_sql"] = "di_valorcompra";
$proto38["m_srcTableName"] = "aldevindiv_egresos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "almovdevdia_id_fk",
	"m_strTable" => "aldevindiv",
	"m_srcTableName" => "aldevindiv_egresos"
));

$proto40["m_sql"] = "almovdevdia_id_fk";
$proto40["m_srcTableName"] = "aldevindiv_egresos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "aldevindiv";
$proto43["m_srcTableName"] = "aldevindiv_egresos";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "aldevindiv_id";
$proto43["m_columns"][] = "doclasedoc_id_fk";
$proto43["m_columns"][] = "almovinddia_id_fk";
$proto43["m_columns"][] = "doclasedoc_in_fk";
$proto43["m_columns"][] = "almovdevdia_id_fk";
$proto43["m_columns"][] = "di_almacen";
$proto43["m_columns"][] = "legaliza";
$proto43["m_columns"][] = "alelemdevolutivo_id_fk";
$proto43["m_columns"][] = "di_cuenta";
$proto43["m_columns"][] = "di_codelem";
$proto43["m_columns"][] = "cod_cta";
$proto43["m_columns"][] = "di_nroplaca";
$proto43["m_columns"][] = "di_nroserie";
$proto43["m_columns"][] = "di_funcionario";
$proto43["m_columns"][] = "di_depsup";
$proto43["m_columns"][] = "di_dep";
$proto43["m_columns"][] = "di_ubica";
$proto43["m_columns"][] = "di_estadoelem";
$proto43["m_columns"][] = "di_detalleestado";
$proto43["m_columns"][] = "diconceptoadq";
$proto43["m_columns"][] = "di_fechacompra";
$proto43["m_columns"][] = "di_fecha_asigacion";
$proto43["m_columns"][] = "di_valorcompra";
$proto43["m_columns"][] = "di_vrmejoras";
$proto43["m_columns"][] = "di_costo_puesta_marcha";
$proto43["m_columns"][] = "nicsp_fecha_inicio_dep";
$proto43["m_columns"][] = "nicsp_costodesmant";
$proto43["m_columns"][] = "nicsp_valorresidual";
$proto43["m_columns"][] = "nicsp_valordeterioro";
$proto43["m_columns"][] = "nicsp_valor_comercial_seguro";
$proto43["m_columns"][] = "nicsp_basedepreciable";
$proto43["m_columns"][] = "nicsp_costo";
$proto43["m_columns"][] = "nicsp_codigo_ppe";
$proto43["m_columns"][] = "nicsp_vigenciapm";
$proto43["m_columns"][] = "nicsp_politicamaterialidad";
$proto43["m_columns"][] = "nicsp_fecha_ini_deprecia";
$proto43["m_columns"][] = "nicsp_vidautil";
$proto43["m_columns"][] = "nicsp_fechacorte";
$proto43["m_columns"][] = "nicsp_fechacorte_a";
$proto43["m_columns"][] = "nicsp_dias";
$proto43["m_columns"][] = "nicsp_dias_a";
$proto43["m_columns"][] = "nicsp_meses_a";
$proto43["m_columns"][] = "nicsp_depreciamensual_a";
$proto43["m_columns"][] = "nicsp_depreciaacumulada_a";
$proto43["m_columns"][] = "nicsp_meses";
$proto43["m_columns"][] = "nicsp_depreciamensual";
$proto43["m_columns"][] = "nicsp_depreciaacumulada_hist";
$proto43["m_columns"][] = "nicsp_depreciaacumulada";
$proto43["m_columns"][] = "nicsp_vnl";
$proto43["m_columns"][] = "flag_comodato";
$proto43["m_columns"][] = "comodato";
$proto43["m_columns"][] = "di_estadoconserva";
$proto43["m_columns"][] = "di_fechaultmovto";
$proto43["m_columns"][] = "dicodconcepto";
$proto43["m_columns"][] = "di_valorultmovto";
$proto43["m_columns"][] = "di_vrajusinfacum";
$proto43["m_columns"][] = "di_vracumdepreacum";
$proto43["m_columns"][] = "di_vrajusacumdep";
$proto43["m_columns"][] = "di_vrdepredifacum";
$proto43["m_columns"][] = "di_vrajusinfult";
$proto43["m_columns"][] = "di_vrdepreacumult";
$proto43["m_columns"][] = "di_vrajusdepult";
$proto43["m_columns"][] = "di_vrdepredifult";
$proto43["m_columns"][] = "di_otraplaca";
$proto43["m_columns"][] = "di_nroplacastma";
$proto43["m_columns"][] = "sys_user";
$proto43["m_columns"][] = "sys_date";
$proto43["m_columns"][] = "sys_time";
$proto43["m_columns"][] = "sys_sts";
$proto43["m_columns"][] = "upd_date";
$proto43["m_columns"][] = "upd_user";
$proto43["m_columns"][] = "upd_status";
$proto43["m_columns"][] = "transact_id_fk";
$proto43["m_columns"][] = "estado_elemento";
$proto43["m_columns"][] = "resolucion_baja_num";
$proto43["m_columns"][] = "resolucion_baja_date";
$proto43["m_columns"][] = "resolucion_baja_obs";
$proto43["m_columns"][] = "dep_tipo";
$proto43["m_columns"][] = "dep_fecha_reintegro";
$proto43["m_columns"][] = "dep_fecha_corte";
$proto43["m_columns"][] = "dep_tiempo_dias";
$proto43["m_columns"][] = "dep_tiempo_meses_r";
$proto43["m_columns"][] = "dep_tiempo_meses_final";
$proto43["m_columns"][] = "dep_tiempo_anios";
$proto43["m_columns"][] = "dep_vida_util";
$proto43["m_columns"][] = "dep_valor_dep_mensual";
$proto43["m_columns"][] = "dep_valor_dep_acum";
$proto43["m_columns"][] = "dep_valor_dep_acum_2";
$proto43["m_columns"][] = "dep_saldo_libros";
$proto43["m_columns"][] = "veh_avaluo_2013";
$proto43["m_columns"][] = "mod_trasnporte";
$proto43["m_columns"][] = "verifica_status";
$proto43["m_columns"][] = "verifica_user";
$proto43["m_columns"][] = "verifica_date";
$proto43["m_columns"][] = "ctrl";
$proto43["m_columns"][] = "observaciones";
$proto43["m_columns"][] = "nicsp_fechacorte_hist";
$proto43["m_columns"][] = "nicsp_vida_remanente";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "aldevindiv";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "aldevindiv_egresos";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="aldevindiv_egresos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aldevindiv_egresos = createSqlQuery_aldevindiv_egresos();


	
								;

																		

$tdataaldevindiv_egresos[".sqlquery"] = $queryData_aldevindiv_egresos;



include_once(getabspath("include/aldevindiv_egresos_events.php"));
$tdataaldevindiv_egresos[".hasEvents"] = true;

?>