<?php
$tdataalmovconsdia_ingresos = array();
$tdataalmovconsdia_ingresos[".searchableFields"] = array();
$tdataalmovconsdia_ingresos[".ShortName"] = "almovconsdia_ingresos";
$tdataalmovconsdia_ingresos[".OwnerID"] = "";
$tdataalmovconsdia_ingresos[".OriginalTable"] = "almovconsdia";


$tdataalmovconsdia_ingresos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmovconsdia_ingresos[".originalPagesByType"] = $tdataalmovconsdia_ingresos[".pagesByType"];
$tdataalmovconsdia_ingresos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmovconsdia_ingresos[".originalPages"] = $tdataalmovconsdia_ingresos[".pages"];
$tdataalmovconsdia_ingresos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmovconsdia_ingresos[".originalDefaultPages"] = $tdataalmovconsdia_ingresos[".defaultPages"];

//	field labels
$fieldLabelsalmovconsdia_ingresos = array();
$fieldToolTipsalmovconsdia_ingresos = array();
$pageTitlesalmovconsdia_ingresos = array();
$placeHoldersalmovconsdia_ingresos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovconsdia_ingresos["Spanish"] = array();
	$fieldToolTipsalmovconsdia_ingresos["Spanish"] = array();
	$placeHoldersalmovconsdia_ingresos["Spanish"] = array();
	$pageTitlesalmovconsdia_ingresos["Spanish"] = array();
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["almovconsdia_id"] = "Almovconsdia Id";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["almovconsdia_id"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["almovconsdia_id"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["doclasedoc_id_fk"] = "Documento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["doclasedoc_id_fk"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["doclasedoc_id_fk"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["gefechaactua"] = "Gefechaactua";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["gefechaactua"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["gefechaactua"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["geusuario"] = "Gestionado por:";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["geusuario"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["geusuario"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_cantasignada"] = "Mcd Cantasignada";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_cantasignada"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_cantasignada"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_cantmovto"] = "Catidad ingresada";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_cantmovto"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_cantmovto"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_saldant"] = "Saldo";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_saldant"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_saldant"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_tax"] = "Aplicar impuesto";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_tax"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_tax"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_valmovto"] = "Valor del movimiento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_valmovto"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_valmovto"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcd_valunitant"] = "Valor unitario";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcd_valunitant"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcd_valunitant"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdalmacen"] = "Almacén";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdalmacen"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdalmacen"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdclasedoc"] = "Clase documento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdclasedoc"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdclasedoc"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdcodelem"] = "Código";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdcodelem"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdcodelem"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdcuenta"] = "Cuenta";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdcuenta"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdcuenta"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdfechadoc"] = "Fecha documento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdfechadoc"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdfechadoc"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdnrodoc"] = "Número documento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdnrodoc"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdnrodoc"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdtipoestruc"] = "Mcdtipoestruc";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdtipoestruc"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdtipoestruc"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["consumo_id_fk"] = "Seleccionar elemento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["consumo_id_fk"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["consumo_id_fk"] = "";
	$fieldLabelsalmovconsdia_ingresos["Spanish"]["mcdnomelem"] = "Nombre del elemento";
	$fieldToolTipsalmovconsdia_ingresos["Spanish"]["mcdnomelem"] = "";
	$placeHoldersalmovconsdia_ingresos["Spanish"]["mcdnomelem"] = "";
	$pageTitlesalmovconsdia_ingresos["Spanish"]["edit"] = "<h3><strong style=\"color: rgb(107, 36, 178);\">Ingresos de consumo: </strong>Editar [{%almovconsdia_id}] </h3>";
	if (count($fieldToolTipsalmovconsdia_ingresos["Spanish"]))
		$tdataalmovconsdia_ingresos[".isUseToolTips"] = true;
}


	$tdataalmovconsdia_ingresos[".NCSearch"] = true;



$tdataalmovconsdia_ingresos[".shortTableName"] = "almovconsdia_ingresos";
$tdataalmovconsdia_ingresos[".nSecOptions"] = 0;

$tdataalmovconsdia_ingresos[".mainTableOwnerID"] = "";
$tdataalmovconsdia_ingresos[".entityType"] = 1;
$tdataalmovconsdia_ingresos[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovconsdia_ingresos[".strOriginalTableName"] = "almovconsdia";

	



$tdataalmovconsdia_ingresos[".showAddInPopup"] = false;

$tdataalmovconsdia_ingresos[".showEditInPopup"] = false;

$tdataalmovconsdia_ingresos[".showViewInPopup"] = false;

$tdataalmovconsdia_ingresos[".listAjax"] = false;
//	temporary
//$tdataalmovconsdia_ingresos[".listAjax"] = false;

	$tdataalmovconsdia_ingresos[".audit"] = false;

	$tdataalmovconsdia_ingresos[".locking"] = false;


$pages = $tdataalmovconsdia_ingresos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovconsdia_ingresos[".edit"] = true;
	$tdataalmovconsdia_ingresos[".afterEditAction"] = 1;
	$tdataalmovconsdia_ingresos[".closePopupAfterEdit"] = 1;
	$tdataalmovconsdia_ingresos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovconsdia_ingresos[".add"] = true;
$tdataalmovconsdia_ingresos[".afterAddAction"] = 0;
$tdataalmovconsdia_ingresos[".closePopupAfterAdd"] = 1;
$tdataalmovconsdia_ingresos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovconsdia_ingresos[".list"] = true;
}



$tdataalmovconsdia_ingresos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovconsdia_ingresos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovconsdia_ingresos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovconsdia_ingresos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovconsdia_ingresos[".printFriendly"] = true;
}



$tdataalmovconsdia_ingresos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovconsdia_ingresos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovconsdia_ingresos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovconsdia_ingresos[".isUseAjaxSuggest"] = true;



																								

$tdataalmovconsdia_ingresos[".ajaxCodeSnippetAdded"] = false;

$tdataalmovconsdia_ingresos[".buttonsAdded"] = false;

$tdataalmovconsdia_ingresos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalmovconsdia_ingresos[".isUseTimeForSearch"] = false;


$tdataalmovconsdia_ingresos[".badgeColor"] = "e07878";


$tdataalmovconsdia_ingresos[".allSearchFields"] = array();
$tdataalmovconsdia_ingresos[".filterFields"] = array();
$tdataalmovconsdia_ingresos[".requiredSearchFields"] = array();

$tdataalmovconsdia_ingresos[".googleLikeFields"] = array();
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "almovconsdia_id";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "doclasedoc_id_fk";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "consumo_id_fk";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdclasedoc";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdnrodoc";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdfechadoc";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdtipoestruc";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdalmacen";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdcuenta";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdcodelem";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcdnomelem";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_cantmovto";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_saldant";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_valunitant";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_valmovto";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_tax";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "geusuario";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "mcd_cantasignada";
$tdataalmovconsdia_ingresos[".googleLikeFields"][] = "gefechaactua";



$tdataalmovconsdia_ingresos[".tableType"] = "list";

$tdataalmovconsdia_ingresos[".printerPageOrientation"] = 0;
$tdataalmovconsdia_ingresos[".nPrinterPageScale"] = 100;

$tdataalmovconsdia_ingresos[".nPrinterSplitRecords"] = 40;

$tdataalmovconsdia_ingresos[".geocodingEnabled"] = false;










$tdataalmovconsdia_ingresos[".pageSize"] = 20;

$tdataalmovconsdia_ingresos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovconsdia_ingresos[".strOrderBy"] = $tstrOrderBy;

$tdataalmovconsdia_ingresos[".orderindexes"] = array();


$tdataalmovconsdia_ingresos[".sqlHead"] = "SELECT almovconsdia_id,  	doclasedoc_id_fk,  	consumo_id_fk,  	mcdclasedoc,  	mcdnrodoc,  	mcdfechadoc,  	mcdtipoestruc,  	mcdalmacen,  	mcdcuenta,  	mcdcodelem,  	mcdnomelem,  	mcd_cantmovto,  	mcd_saldant,  	mcd_valunitant,  	mcd_valmovto,  	mcd_tax,  	geusuario,  	mcd_cantasignada,  	gefechaactua";
$tdataalmovconsdia_ingresos[".sqlFrom"] = "FROM almovconsdia";
$tdataalmovconsdia_ingresos[".sqlWhereExpr"] = "";
$tdataalmovconsdia_ingresos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovconsdia_ingresos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovconsdia_ingresos[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovconsdia_ingresos[".highlightSearchResults"] = true;

$tableKeysalmovconsdia_ingresos = array();
$tableKeysalmovconsdia_ingresos[] = "almovconsdia_id";
$tdataalmovconsdia_ingresos[".Keys"] = $tableKeysalmovconsdia_ingresos;


$tdataalmovconsdia_ingresos[".hideMobileList"] = array();




//	almovconsdia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovconsdia_id";
	$fdata["GoodName"] = "almovconsdia_id";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","almovconsdia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almovconsdia_id";

		$fdata["sourceSingle"] = "almovconsdia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdia_id";

	
	
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


	$tdataalmovconsdia_ingresos["almovconsdia_id"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "almovconsdia_id";
//	doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "doclasedoc_id_fk";
	$fdata["GoodName"] = "doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","doclasedoc_id_fk");
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
	$edata["LookupTable"] = "gedocumentos_ingresos_consumo";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mcdalmacen", 'lookupF'=>"docodregion");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdclasedoc", 'lookupF'=>"doclasedoc");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdfechadoc", 'lookupF'=>"do_fechadoc");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdnrodoc", 'lookupF'=>"do_nrodoc");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "doclasedoc_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "doclasedoc_id";

	

	
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


	$tdataalmovconsdia_ingresos["doclasedoc_id_fk"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "doclasedoc_id_fk";
//	consumo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "consumo_id_fk";
	$fdata["GoodName"] = "consumo_id_fk";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","consumo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consumo_id_fk";

		$fdata["sourceSingle"] = "consumo_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consumo_id_fk";

	
	
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
	$edata["LookupTable"] = "alelemconsumo_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mcdcodelem", 'lookupF'=>"ec_codelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcuenta", 'lookupF'=>"eccuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdnomelem", 'lookupF'=>"ec_nomelemento");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "alelemenconsumo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "alelemenconsumo_id";

	

	
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


	$tdataalmovconsdia_ingresos["consumo_id_fk"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "consumo_id_fk";
//	mcdclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mcdclasedoc";
	$fdata["GoodName"] = "mcdclasedoc";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdclasedoc";

		$fdata["sourceSingle"] = "mcdclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdclasedoc";

	
	
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


	$tdataalmovconsdia_ingresos["mcdclasedoc"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdclasedoc";
//	mcdnrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mcdnrodoc";
	$fdata["GoodName"] = "mcdnrodoc";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdnrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdnrodoc";

		$fdata["sourceSingle"] = "mcdnrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdnrodoc";

	
	
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


	$tdataalmovconsdia_ingresos["mcdnrodoc"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdnrodoc";
//	mcdfechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mcdfechadoc";
	$fdata["GoodName"] = "mcdfechadoc";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdfechadoc");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "mcdfechadoc";

		$fdata["sourceSingle"] = "mcdfechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdfechadoc";

	
	
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
	$edata["InitialYearFactor"] = 5;
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


	$tdataalmovconsdia_ingresos["mcdfechadoc"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdfechadoc";
//	mcdtipoestruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mcdtipoestruc";
	$fdata["GoodName"] = "mcdtipoestruc";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdtipoestruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdtipoestruc";

		$fdata["sourceSingle"] = "mcdtipoestruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdtipoestruc";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataalmovconsdia_ingresos["mcdtipoestruc"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdtipoestruc";
//	mcdalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mcdalmacen";
	$fdata["GoodName"] = "mcdalmacen";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdalmacen";

		$fdata["sourceSingle"] = "mcdalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdalmacen";

	
	
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


	$tdataalmovconsdia_ingresos["mcdalmacen"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdalmacen";
//	mcdcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mcdcuenta";
	$fdata["GoodName"] = "mcdcuenta";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdcuenta";

		$fdata["sourceSingle"] = "mcdcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcuenta";

	
	
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


	$tdataalmovconsdia_ingresos["mcdcuenta"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdcuenta";
//	mcdcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mcdcodelem";
	$fdata["GoodName"] = "mcdcodelem";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdcodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdcodelem";

		$fdata["sourceSingle"] = "mcdcodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcodelem";

	
	
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


	$tdataalmovconsdia_ingresos["mcdcodelem"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdcodelem";
//	mcdnomelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mcdnomelem";
	$fdata["GoodName"] = "mcdnomelem";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcdnomelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdnomelem";

		$fdata["sourceSingle"] = "mcdnomelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdnomelem";

	
	
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


	$tdataalmovconsdia_ingresos["mcdnomelem"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcdnomelem";
//	mcd_cantmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mcd_cantmovto";
	$fdata["GoodName"] = "mcd_cantmovto";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_cantmovto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_cantmovto";

		$fdata["sourceSingle"] = "mcd_cantmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_cantmovto";

	
	
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


	$tdataalmovconsdia_ingresos["mcd_cantmovto"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_cantmovto";
//	mcd_saldant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mcd_saldant";
	$fdata["GoodName"] = "mcd_saldant";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_saldant");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_saldant";

		$fdata["sourceSingle"] = "mcd_saldant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_saldant";

	
	
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


	$tdataalmovconsdia_ingresos["mcd_saldant"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_saldant";
//	mcd_valunitant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "mcd_valunitant";
	$fdata["GoodName"] = "mcd_valunitant";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_valunitant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valunitant";

		$fdata["sourceSingle"] = "mcd_valunitant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valunitant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataalmovconsdia_ingresos["mcd_valunitant"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_valunitant";
//	mcd_valmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mcd_valmovto";
	$fdata["GoodName"] = "mcd_valmovto";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_valmovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valmovto";

		$fdata["sourceSingle"] = "mcd_valmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valmovto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataalmovconsdia_ingresos["mcd_valmovto"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_valmovto";
//	mcd_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mcd_tax";
	$fdata["GoodName"] = "mcd_tax";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_tax");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_tax";

		$fdata["sourceSingle"] = "mcd_tax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_tax";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
	$edata["LookupTable"] = "global_type_tax";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tax_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tax_name";

	

	
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


	$tdataalmovconsdia_ingresos["mcd_tax"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_tax";
//	geusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "geusuario";
	$fdata["GoodName"] = "geusuario";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","geusuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "geusuario";

		$fdata["sourceSingle"] = "geusuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "geusuario";

	
	
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


	$tdataalmovconsdia_ingresos["geusuario"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "geusuario";
//	mcd_cantasignada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mcd_cantasignada";
	$fdata["GoodName"] = "mcd_cantasignada";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","mcd_cantasignada");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_cantasignada";

		$fdata["sourceSingle"] = "mcd_cantasignada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_cantasignada";

	
	
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


	$tdataalmovconsdia_ingresos["mcd_cantasignada"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "mcd_cantasignada";
//	gefechaactua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "gefechaactua";
	$fdata["GoodName"] = "gefechaactua";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_ingresos","gefechaactua");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "gefechaactua";

		$fdata["sourceSingle"] = "gefechaactua";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gefechaactua";

	
	
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


	$tdataalmovconsdia_ingresos["gefechaactua"] = $fdata;
		$tdataalmovconsdia_ingresos[".searchableFields"][] = "gefechaactua";


$tables_data["almovconsdia_ingresos"]=&$tdataalmovconsdia_ingresos;
$field_labels["almovconsdia_ingresos"] = &$fieldLabelsalmovconsdia_ingresos;
$fieldToolTips["almovconsdia_ingresos"] = &$fieldToolTipsalmovconsdia_ingresos;
$placeHolders["almovconsdia_ingresos"] = &$placeHoldersalmovconsdia_ingresos;
$page_titles["almovconsdia_ingresos"] = &$pageTitlesalmovconsdia_ingresos;


changeTextControlsToDate( "almovconsdia_ingresos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovconsdia_ingresos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovconsdia_ingresos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="gedocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gedocumentos_ingresos_consumo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gedocumentos_ingresos_consumo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["almovconsdia_ingresos"][0] = $masterParams;
				$masterTablesData["almovconsdia_ingresos"][0]["masterKeys"] = array();
	$masterTablesData["almovconsdia_ingresos"][0]["masterKeys"][]="doclasedoc_id";
				$masterTablesData["almovconsdia_ingresos"][0]["masterKeys"][]="docodregion";
				$masterTablesData["almovconsdia_ingresos"][0]["masterKeys"][]="doclasedoc";
				$masterTablesData["almovconsdia_ingresos"][0]["detailKeys"] = array();
	$masterTablesData["almovconsdia_ingresos"][0]["detailKeys"][]="doclasedoc_id_fk";
				$masterTablesData["almovconsdia_ingresos"][0]["detailKeys"][]="mcdalmacen";
				$masterTablesData["almovconsdia_ingresos"][0]["detailKeys"][]="mcdclasedoc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovconsdia_ingresos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovconsdia_id,  	doclasedoc_id_fk,  	consumo_id_fk,  	mcdclasedoc,  	mcdnrodoc,  	mcdfechadoc,  	mcdtipoestruc,  	mcdalmacen,  	mcdcuenta,  	mcdcodelem,  	mcdnomelem,  	mcd_cantmovto,  	mcd_saldant,  	mcd_valunitant,  	mcd_valmovto,  	mcd_tax,  	geusuario,  	mcd_cantasignada,  	gefechaactua";
$proto0["m_strFrom"] = "FROM almovconsdia";
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
	"m_strName" => "almovconsdia_id",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto6["m_sql"] = "almovconsdia_id";
$proto6["m_srcTableName"] = "almovconsdia_ingresos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id_fk",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto8["m_sql"] = "doclasedoc_id_fk";
$proto8["m_srcTableName"] = "almovconsdia_ingresos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "consumo_id_fk",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto10["m_sql"] = "consumo_id_fk";
$proto10["m_srcTableName"] = "almovconsdia_ingresos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdclasedoc",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto12["m_sql"] = "mcdclasedoc";
$proto12["m_srcTableName"] = "almovconsdia_ingresos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnrodoc",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto14["m_sql"] = "mcdnrodoc";
$proto14["m_srcTableName"] = "almovconsdia_ingresos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdfechadoc",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto16["m_sql"] = "mcdfechadoc";
$proto16["m_srcTableName"] = "almovconsdia_ingresos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdtipoestruc",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto18["m_sql"] = "mcdtipoestruc";
$proto18["m_srcTableName"] = "almovconsdia_ingresos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdalmacen",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto20["m_sql"] = "mcdalmacen";
$proto20["m_srcTableName"] = "almovconsdia_ingresos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcuenta",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto22["m_sql"] = "mcdcuenta";
$proto22["m_srcTableName"] = "almovconsdia_ingresos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcodelem",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto24["m_sql"] = "mcdcodelem";
$proto24["m_srcTableName"] = "almovconsdia_ingresos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnomelem",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto26["m_sql"] = "mcdnomelem";
$proto26["m_srcTableName"] = "almovconsdia_ingresos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_cantmovto",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto28["m_sql"] = "mcd_cantmovto";
$proto28["m_srcTableName"] = "almovconsdia_ingresos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_saldant",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto30["m_sql"] = "mcd_saldant";
$proto30["m_srcTableName"] = "almovconsdia_ingresos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valunitant",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto32["m_sql"] = "mcd_valunitant";
$proto32["m_srcTableName"] = "almovconsdia_ingresos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valmovto",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto34["m_sql"] = "mcd_valmovto";
$proto34["m_srcTableName"] = "almovconsdia_ingresos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_tax",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto36["m_sql"] = "mcd_tax";
$proto36["m_srcTableName"] = "almovconsdia_ingresos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "geusuario",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto38["m_sql"] = "geusuario";
$proto38["m_srcTableName"] = "almovconsdia_ingresos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_cantasignada",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto40["m_sql"] = "mcd_cantasignada";
$proto40["m_srcTableName"] = "almovconsdia_ingresos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "gefechaactua",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_ingresos"
));

$proto42["m_sql"] = "gefechaactua";
$proto42["m_srcTableName"] = "almovconsdia_ingresos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "almovconsdia";
$proto45["m_srcTableName"] = "almovconsdia_ingresos";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "almovconsdia_id";
$proto45["m_columns"][] = "doclasedoc_id_fk";
$proto45["m_columns"][] = "consumo_id_fk";
$proto45["m_columns"][] = "mcdclasedoc";
$proto45["m_columns"][] = "mcdnrodoc";
$proto45["m_columns"][] = "mcdfechadoc";
$proto45["m_columns"][] = "mcdtipoestruc";
$proto45["m_columns"][] = "mcdalmacen";
$proto45["m_columns"][] = "mcdcuenta";
$proto45["m_columns"][] = "mcdcodelem";
$proto45["m_columns"][] = "mcdnomelem";
$proto45["m_columns"][] = "mcd_cantmovto";
$proto45["m_columns"][] = "mcd_saldant";
$proto45["m_columns"][] = "mcd_valunitant";
$proto45["m_columns"][] = "mcd_valmovto";
$proto45["m_columns"][] = "mcd_tax";
$proto45["m_columns"][] = "geusuario";
$proto45["m_columns"][] = "mcd_cantasignada";
$proto45["m_columns"][] = "gefechaactua";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "almovconsdia";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "almovconsdia_ingresos";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="almovconsdia_ingresos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovconsdia_ingresos = createSqlQuery_almovconsdia_ingresos();


	
								;

																			

$tdataalmovconsdia_ingresos[".sqlquery"] = $queryData_almovconsdia_ingresos;



include_once(getabspath("include/almovconsdia_ingresos_events.php"));
$tdataalmovconsdia_ingresos[".hasEvents"] = true;

?>