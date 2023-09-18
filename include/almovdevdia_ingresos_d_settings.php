<?php
$tdataalmovdevdia_ingresos_d = array();
$tdataalmovdevdia_ingresos_d[".searchableFields"] = array();
$tdataalmovdevdia_ingresos_d[".ShortName"] = "almovdevdia_ingresos_d";
$tdataalmovdevdia_ingresos_d[".OwnerID"] = "";
$tdataalmovdevdia_ingresos_d[".OriginalTable"] = "almovdevdia";


$tdataalmovdevdia_ingresos_d[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmovdevdia_ingresos_d[".originalPagesByType"] = $tdataalmovdevdia_ingresos_d[".pagesByType"];
$tdataalmovdevdia_ingresos_d[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmovdevdia_ingresos_d[".originalPages"] = $tdataalmovdevdia_ingresos_d[".pages"];
$tdataalmovdevdia_ingresos_d[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmovdevdia_ingresos_d[".originalDefaultPages"] = $tdataalmovdevdia_ingresos_d[".defaultPages"];

//	field labels
$fieldLabelsalmovdevdia_ingresos_d = array();
$fieldToolTipsalmovdevdia_ingresos_d = array();
$pageTitlesalmovdevdia_ingresos_d = array();
$placeHoldersalmovdevdia_ingresos_d = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"] = array();
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"] = array();
	$placeHoldersalmovdevdia_ingresos_d["Spanish"] = array();
	$pageTitlesalmovdevdia_ingresos_d["Spanish"] = array();
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["almovdevdia_id"] = "No. interno";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["almovdevdia_id"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["almovdevdia_id"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["doclasedoc_id_fk"] = "No. Documento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["doclasedoc_id_fk"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["doclasedoc_id_fk"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["gefechaactua"] = "Gefechaactua";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["gefechaactua"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["gefechaactua"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["geusuario"] = "Gestionado por:";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["geusuario"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["geusuario"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto"] = "Cantidad de elementos";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto"] = "<p><em>Ingrese el número de elementos asociados a esta cuenta</em></p>";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mdd_tax"] = "Aplicar impuesto";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mdd_tax"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mdd_tax"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mdd_valmovto"] = "Valor del movimiento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mdd_valmovto"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mdd_valmovto"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mdd_valunit"] = "Valor unitario";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mdd_valunit"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mdd_valunit"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddalmacen"] = "Almacén";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddalmacen"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddalmacen"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddclasedoc"] = "Clase de documento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddclasedoc"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddclasedoc"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddcodelem"] = "Código de elemento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddcodelem"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddcodelem"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddcuenta"] = "Cuenta";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddcuenta"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddcuenta"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddfechadoc"] = "Fecha de documento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddfechadoc"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddfechadoc"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddnrodoc"] = "Número documento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddnrodoc"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddnrodoc"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddtipoestruc"] = "Mddtipoestruc";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddtipoestruc"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddtipoestruc"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mddnomelem"] = "Nombre del elemento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mddnomelem"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mddnomelem"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["devolutivo_id_FK"] = "Buscar elemento";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["devolutivo_id_FK"] = "<p>Ingrese la búsqueda del elemento que desea asociar a este documento</p>";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["devolutivo_id_FK"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto_verifica"] = "Mdd Cantmovto Verifica";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto_verifica"] = "";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["mdd_cantmovto_verifica"] = "";
	$fieldLabelsalmovdevdia_ingresos_d["Spanish"]["legalizado"] = "Legalizado";
	$fieldToolTipsalmovdevdia_ingresos_d["Spanish"]["legalizado"] = "<p><strong><em>Legalización de documento</em></strong></p>";
	$placeHoldersalmovdevdia_ingresos_d["Spanish"]["legalizado"] = "";
	$pageTitlesalmovdevdia_ingresos_d["Spanish"]["add"] = "Agregar nuevo elemento al documento";
	$pageTitlesalmovdevdia_ingresos_d["Spanish"]["edit"] = "Editar documento";
	if (count($fieldToolTipsalmovdevdia_ingresos_d["Spanish"]))
		$tdataalmovdevdia_ingresos_d[".isUseToolTips"] = true;
}


	$tdataalmovdevdia_ingresos_d[".NCSearch"] = true;



$tdataalmovdevdia_ingresos_d[".shortTableName"] = "almovdevdia_ingresos_d";
$tdataalmovdevdia_ingresos_d[".nSecOptions"] = 0;

$tdataalmovdevdia_ingresos_d[".mainTableOwnerID"] = "";
$tdataalmovdevdia_ingresos_d[".entityType"] = 1;
$tdataalmovdevdia_ingresos_d[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovdevdia_ingresos_d[".strOriginalTableName"] = "almovdevdia";

	



$tdataalmovdevdia_ingresos_d[".showAddInPopup"] = false;

$tdataalmovdevdia_ingresos_d[".showEditInPopup"] = false;

$tdataalmovdevdia_ingresos_d[".showViewInPopup"] = false;

$tdataalmovdevdia_ingresos_d[".listAjax"] = false;
//	temporary
//$tdataalmovdevdia_ingresos_d[".listAjax"] = false;

	$tdataalmovdevdia_ingresos_d[".audit"] = false;

	$tdataalmovdevdia_ingresos_d[".locking"] = false;


$pages = $tdataalmovdevdia_ingresos_d[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovdevdia_ingresos_d[".edit"] = true;
	$tdataalmovdevdia_ingresos_d[".afterEditAction"] = 1;
	$tdataalmovdevdia_ingresos_d[".closePopupAfterEdit"] = 1;
	$tdataalmovdevdia_ingresos_d[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovdevdia_ingresos_d[".add"] = true;
$tdataalmovdevdia_ingresos_d[".afterAddAction"] = 1;
$tdataalmovdevdia_ingresos_d[".closePopupAfterAdd"] = 1;
$tdataalmovdevdia_ingresos_d[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovdevdia_ingresos_d[".list"] = true;
}



$tdataalmovdevdia_ingresos_d[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovdevdia_ingresos_d[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovdevdia_ingresos_d[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovdevdia_ingresos_d[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovdevdia_ingresos_d[".printFriendly"] = true;
}



$tdataalmovdevdia_ingresos_d[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovdevdia_ingresos_d[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovdevdia_ingresos_d[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovdevdia_ingresos_d[".isUseAjaxSuggest"] = true;



																								

$tdataalmovdevdia_ingresos_d[".ajaxCodeSnippetAdded"] = false;

$tdataalmovdevdia_ingresos_d[".buttonsAdded"] = false;

$tdataalmovdevdia_ingresos_d[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalmovdevdia_ingresos_d[".isUseTimeForSearch"] = false;


$tdataalmovdevdia_ingresos_d[".badgeColor"] = "6b8e23";


$tdataalmovdevdia_ingresos_d[".allSearchFields"] = array();
$tdataalmovdevdia_ingresos_d[".filterFields"] = array();
$tdataalmovdevdia_ingresos_d[".requiredSearchFields"] = array();

$tdataalmovdevdia_ingresos_d[".googleLikeFields"] = array();
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "almovdevdia_id";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "doclasedoc_id_fk";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "legalizado";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddclasedoc";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddnrodoc";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddfechadoc";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddalmacen";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddtipoestruc";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "devolutivo_id_FK";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddcuenta";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddcodelem";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mddnomelem";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mdd_cantmovto";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mdd_cantmovto_verifica";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mdd_valunit";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mdd_tax";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "mdd_valmovto";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "geusuario";
$tdataalmovdevdia_ingresos_d[".googleLikeFields"][] = "gefechaactua";



$tdataalmovdevdia_ingresos_d[".tableType"] = "list";

$tdataalmovdevdia_ingresos_d[".printerPageOrientation"] = 0;
$tdataalmovdevdia_ingresos_d[".nPrinterPageScale"] = 100;

$tdataalmovdevdia_ingresos_d[".nPrinterSplitRecords"] = 40;

$tdataalmovdevdia_ingresos_d[".geocodingEnabled"] = false;










$tdataalmovdevdia_ingresos_d[".pageSize"] = 20;

$tdataalmovdevdia_ingresos_d[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovdevdia_ingresos_d[".strOrderBy"] = $tstrOrderBy;

$tdataalmovdevdia_ingresos_d[".orderindexes"] = array();


$tdataalmovdevdia_ingresos_d[".sqlHead"] = "SELECT almovdevdia_id,  	doclasedoc_id_fk,  	legalizado,  	mddclasedoc,  	mddnrodoc,  	mddfechadoc,  	mddalmacen,  	mddtipoestruc,  	devolutivo_id_FK,  	mddcuenta,  	mddcodelem,  	mddnomelem,  	mdd_cantmovto,  	mdd_cantmovto_verifica,  	mdd_valunit,  	mdd_tax,  	mdd_valmovto,  	geusuario,  	gefechaactua";
$tdataalmovdevdia_ingresos_d[".sqlFrom"] = "FROM almovdevdia";
$tdataalmovdevdia_ingresos_d[".sqlWhereExpr"] = "";
$tdataalmovdevdia_ingresos_d[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovdevdia_ingresos_d[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovdevdia_ingresos_d[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovdevdia_ingresos_d[".highlightSearchResults"] = true;

$tableKeysalmovdevdia_ingresos_d = array();
$tableKeysalmovdevdia_ingresos_d[] = "almovdevdia_id";
$tableKeysalmovdevdia_ingresos_d[] = "legalizado";
$tdataalmovdevdia_ingresos_d[".Keys"] = $tableKeysalmovdevdia_ingresos_d;


$tdataalmovdevdia_ingresos_d[".hideMobileList"] = array();




//	almovdevdia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovdevdia_id";
	$fdata["GoodName"] = "almovdevdia_id";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","almovdevdia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almovdevdia_id";

		$fdata["sourceSingle"] = "almovdevdia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovdevdia_id";

	
	
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


	$tdataalmovdevdia_ingresos_d["almovdevdia_id"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "almovdevdia_id";
//	doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "doclasedoc_id_fk";
	$fdata["GoodName"] = "doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","doclasedoc_id_fk");
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
	$edata["LookupTable"] = "gedocumentos_ingresos";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mddalmacen", 'lookupF'=>"docodregion");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddclasedoc", 'lookupF'=>"doclasedoc");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddfechadoc", 'lookupF'=>"do_fechadoc");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddnrodoc", 'lookupF'=>"do_nrodoc");
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


	$tdataalmovdevdia_ingresos_d["doclasedoc_id_fk"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "doclasedoc_id_fk";
//	legalizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "legalizado";
	$fdata["GoodName"] = "legalizado";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","legalizado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "legalizado";

		$fdata["sourceSingle"] = "legalizado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legalizado";

	
	
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
	$edata["LookupTable"] = "global_type_legal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "legal_code";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "legal_name";

	

	
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


	$tdataalmovdevdia_ingresos_d["legalizado"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "legalizado";
//	mddclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mddclasedoc";
	$fdata["GoodName"] = "mddclasedoc";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mddclasedoc";

		$fdata["sourceSingle"] = "mddclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddclasedoc";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataalmovdevdia_ingresos_d["mddclasedoc"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddclasedoc";
//	mddnrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mddnrodoc";
	$fdata["GoodName"] = "mddnrodoc";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddnrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mddnrodoc";

		$fdata["sourceSingle"] = "mddnrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddnrodoc";

	
	
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


	$tdataalmovdevdia_ingresos_d["mddnrodoc"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddnrodoc";
//	mddfechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mddfechadoc";
	$fdata["GoodName"] = "mddfechadoc";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddfechadoc");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "mddfechadoc";

		$fdata["sourceSingle"] = "mddfechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddfechadoc";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataalmovdevdia_ingresos_d["mddfechadoc"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddfechadoc";
//	mddalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mddalmacen";
	$fdata["GoodName"] = "mddalmacen";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mddalmacen";

		$fdata["sourceSingle"] = "mddalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddalmacen";

	
	
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


	$tdataalmovdevdia_ingresos_d["mddalmacen"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddalmacen";
//	mddtipoestruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mddtipoestruc";
	$fdata["GoodName"] = "mddtipoestruc";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddtipoestruc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mddtipoestruc";

		$fdata["sourceSingle"] = "mddtipoestruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddtipoestruc";

	
	
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


	$tdataalmovdevdia_ingresos_d["mddtipoestruc"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddtipoestruc";
//	devolutivo_id_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "devolutivo_id_FK";
	$fdata["GoodName"] = "devolutivo_id_FK";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","devolutivo_id_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "devolutivo_id_FK";

		$fdata["sourceSingle"] = "devolutivo_id_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "devolutivo_id_FK";

	
	
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
	$edata["LookupTable"] = "alelemdevolutivo_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mdd_valunit", 'lookupF'=>"ed_valunit");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddcodelem", 'lookupF'=>"ed_codelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddcuenta", 'lookupF'=>"edcuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mddnomelem", 'lookupF'=>"ed_nomelemento");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "alelemdevolutivo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "alelemdevolutivo_id";

	

	
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


	$tdataalmovdevdia_ingresos_d["devolutivo_id_FK"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "devolutivo_id_FK";
//	mddcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mddcuenta";
	$fdata["GoodName"] = "mddcuenta";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mddcuenta";

		$fdata["sourceSingle"] = "mddcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddcuenta";

	
	
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


	$tdataalmovdevdia_ingresos_d["mddcuenta"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddcuenta";
//	mddcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mddcodelem";
	$fdata["GoodName"] = "mddcodelem";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddcodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mddcodelem";

		$fdata["sourceSingle"] = "mddcodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddcodelem";

	
	
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


	$tdataalmovdevdia_ingresos_d["mddcodelem"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddcodelem";
//	mddnomelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mddnomelem";
	$fdata["GoodName"] = "mddnomelem";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mddnomelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mddnomelem";

		$fdata["sourceSingle"] = "mddnomelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mddnomelem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataalmovdevdia_ingresos_d["mddnomelem"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mddnomelem";
//	mdd_cantmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mdd_cantmovto";
	$fdata["GoodName"] = "mdd_cantmovto";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mdd_cantmovto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mdd_cantmovto";

		$fdata["sourceSingle"] = "mdd_cantmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mdd_cantmovto";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataalmovdevdia_ingresos_d["mdd_cantmovto"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mdd_cantmovto";
//	mdd_cantmovto_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "mdd_cantmovto_verifica";
	$fdata["GoodName"] = "mdd_cantmovto_verifica";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mdd_cantmovto_verifica");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mdd_cantmovto_verifica";

		$fdata["sourceSingle"] = "mdd_cantmovto_verifica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mdd_cantmovto_verifica";

	
	
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


	$tdataalmovdevdia_ingresos_d["mdd_cantmovto_verifica"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mdd_cantmovto_verifica";
//	mdd_valunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mdd_valunit";
	$fdata["GoodName"] = "mdd_valunit";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mdd_valunit");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mdd_valunit";

		$fdata["sourceSingle"] = "mdd_valunit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mdd_valunit";

	
	
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


	$tdataalmovdevdia_ingresos_d["mdd_valunit"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mdd_valunit";
//	mdd_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mdd_tax";
	$fdata["GoodName"] = "mdd_tax";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mdd_tax");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mdd_tax";

		$fdata["sourceSingle"] = "mdd_tax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mdd_tax";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "tax_code";
	$edata["LinkFieldType"] = 5;
	$edata["DisplayField"] = "tax_name";

	

	
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


	$tdataalmovdevdia_ingresos_d["mdd_tax"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mdd_tax";
//	mdd_valmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "mdd_valmovto";
	$fdata["GoodName"] = "mdd_valmovto";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","mdd_valmovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mdd_valmovto";

		$fdata["sourceSingle"] = "mdd_valmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mdd_valmovto";

	
	
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


	$tdataalmovdevdia_ingresos_d["mdd_valmovto"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "mdd_valmovto";
//	geusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "geusuario";
	$fdata["GoodName"] = "geusuario";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","geusuario");
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


	$tdataalmovdevdia_ingresos_d["geusuario"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "geusuario";
//	gefechaactua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "gefechaactua";
	$fdata["GoodName"] = "gefechaactua";
	$fdata["ownerTable"] = "almovdevdia";
	$fdata["Label"] = GetFieldLabel("almovdevdia_ingresos_d","gefechaactua");
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


	$tdataalmovdevdia_ingresos_d["gefechaactua"] = $fdata;
		$tdataalmovdevdia_ingresos_d[".searchableFields"][] = "gefechaactua";


$tables_data["almovdevdia_ingresos_d"]=&$tdataalmovdevdia_ingresos_d;
$field_labels["almovdevdia_ingresos_d"] = &$fieldLabelsalmovdevdia_ingresos_d;
$fieldToolTips["almovdevdia_ingresos_d"] = &$fieldToolTipsalmovdevdia_ingresos_d;
$placeHolders["almovdevdia_ingresos_d"] = &$placeHoldersalmovdevdia_ingresos_d;
$page_titles["almovdevdia_ingresos_d"] = &$pageTitlesalmovdevdia_ingresos_d;


changeTextControlsToDate( "almovdevdia_ingresos_d" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovdevdia_ingresos_d"] = array();
//	almovinddia_ingresos_d
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="almovinddia_ingresos_d";
		$detailsParam["dOriginalTable"] = "almovinddia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "almovinddia_ingresos_d";
	$detailsParam["dCaptionTable"] = GetTableCaption("almovinddia_ingresos_d");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["almovdevdia_ingresos_d"][$dIndex] = $detailsParam;

	
		$detailsTablesData["almovdevdia_ingresos_d"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["almovdevdia_ingresos_d"][$dIndex]["masterKeys"][]="almovdevdia_id";

				$detailsTablesData["almovdevdia_ingresos_d"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["almovdevdia_ingresos_d"][$dIndex]["detailKeys"][]="almovdevdia_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovdevdia_ingresos_d"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="gedocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gedocumentos_ingresos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gedocumentos_ingresos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["almovdevdia_ingresos_d"][0] = $masterParams;
				$masterTablesData["almovdevdia_ingresos_d"][0]["masterKeys"] = array();
	$masterTablesData["almovdevdia_ingresos_d"][0]["masterKeys"][]="doclasedoc_id";
				$masterTablesData["almovdevdia_ingresos_d"][0]["masterKeys"][]="doclasedoc";
				$masterTablesData["almovdevdia_ingresos_d"][0]["detailKeys"] = array();
	$masterTablesData["almovdevdia_ingresos_d"][0]["detailKeys"][]="doclasedoc_id_fk";
				$masterTablesData["almovdevdia_ingresos_d"][0]["detailKeys"][]="mddclasedoc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovdevdia_ingresos_d()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovdevdia_id,  	doclasedoc_id_fk,  	legalizado,  	mddclasedoc,  	mddnrodoc,  	mddfechadoc,  	mddalmacen,  	mddtipoestruc,  	devolutivo_id_FK,  	mddcuenta,  	mddcodelem,  	mddnomelem,  	mdd_cantmovto,  	mdd_cantmovto_verifica,  	mdd_valunit,  	mdd_tax,  	mdd_valmovto,  	geusuario,  	gefechaactua";
$proto0["m_strFrom"] = "FROM almovdevdia";
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
	"m_strName" => "almovdevdia_id",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto6["m_sql"] = "almovdevdia_id";
$proto6["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id_fk",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto8["m_sql"] = "doclasedoc_id_fk";
$proto8["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "legalizado",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto10["m_sql"] = "legalizado";
$proto10["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mddclasedoc",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto12["m_sql"] = "mddclasedoc";
$proto12["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mddnrodoc",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto14["m_sql"] = "mddnrodoc";
$proto14["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mddfechadoc",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto16["m_sql"] = "mddfechadoc";
$proto16["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mddalmacen",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto18["m_sql"] = "mddalmacen";
$proto18["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mddtipoestruc",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto20["m_sql"] = "mddtipoestruc";
$proto20["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "devolutivo_id_FK",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto22["m_sql"] = "devolutivo_id_FK";
$proto22["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mddcuenta",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto24["m_sql"] = "mddcuenta";
$proto24["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mddcodelem",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto26["m_sql"] = "mddcodelem";
$proto26["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mddnomelem",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto28["m_sql"] = "mddnomelem";
$proto28["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mdd_cantmovto",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto30["m_sql"] = "mdd_cantmovto";
$proto30["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "mdd_cantmovto_verifica",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto32["m_sql"] = "mdd_cantmovto_verifica";
$proto32["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mdd_valunit",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto34["m_sql"] = "mdd_valunit";
$proto34["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "mdd_tax",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto36["m_sql"] = "mdd_tax";
$proto36["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "mdd_valmovto",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto38["m_sql"] = "mdd_valmovto";
$proto38["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "geusuario",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto40["m_sql"] = "geusuario";
$proto40["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "gefechaactua",
	"m_strTable" => "almovdevdia",
	"m_srcTableName" => "almovdevdia_ingresos_d"
));

$proto42["m_sql"] = "gefechaactua";
$proto42["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "almovdevdia";
$proto45["m_srcTableName"] = "almovdevdia_ingresos_d";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "almovdevdia_id";
$proto45["m_columns"][] = "doclasedoc_id_fk";
$proto45["m_columns"][] = "legalizado";
$proto45["m_columns"][] = "mddclasedoc";
$proto45["m_columns"][] = "mddnrodoc";
$proto45["m_columns"][] = "mddfechadoc";
$proto45["m_columns"][] = "mddalmacen";
$proto45["m_columns"][] = "mddtipoestruc";
$proto45["m_columns"][] = "devolutivo_id_FK";
$proto45["m_columns"][] = "mddcuenta";
$proto45["m_columns"][] = "mddcodelem";
$proto45["m_columns"][] = "mddnomelem";
$proto45["m_columns"][] = "mdd_cantmovto";
$proto45["m_columns"][] = "mdd_cantmovto_verifica";
$proto45["m_columns"][] = "mdd_valunit";
$proto45["m_columns"][] = "mdd_tax";
$proto45["m_columns"][] = "mdd_valmovto";
$proto45["m_columns"][] = "geusuario";
$proto45["m_columns"][] = "gefechaactua";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "almovdevdia";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "almovdevdia_ingresos_d";
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
$proto0["m_srcTableName"]="almovdevdia_ingresos_d";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovdevdia_ingresos_d = createSqlQuery_almovdevdia_ingresos_d();


	
								;

																			

$tdataalmovdevdia_ingresos_d[".sqlquery"] = $queryData_almovdevdia_ingresos_d;



include_once(getabspath("include/almovdevdia_ingresos_d_events.php"));
$tdataalmovdevdia_ingresos_d[".hasEvents"] = true;

?>