<?php
$tdatacgc_6 = array();
$tdatacgc_6[".searchableFields"] = array();
$tdatacgc_6[".ShortName"] = "cgc_6";
$tdatacgc_6[".OwnerID"] = "";
$tdatacgc_6[".OriginalTable"] = "cgc_6";


$tdatacgc_6[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacgc_6[".originalPagesByType"] = $tdatacgc_6[".pagesByType"];
$tdatacgc_6[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacgc_6[".originalPages"] = $tdatacgc_6[".pages"];
$tdatacgc_6[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacgc_6[".originalDefaultPages"] = $tdatacgc_6[".defaultPages"];

//	field labels
$fieldLabelscgc_6 = array();
$fieldToolTipscgc_6 = array();
$pageTitlescgc_6 = array();
$placeHolderscgc_6 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscgc_6["Spanish"] = array();
	$fieldToolTipscgc_6["Spanish"] = array();
	$placeHolderscgc_6["Spanish"] = array();
	$pageTitlescgc_6["Spanish"] = array();
	$fieldLabelscgc_6["Spanish"]["cgc_di"] = "Cgc Di";
	$fieldToolTipscgc_6["Spanish"]["cgc_di"] = "";
	$placeHolderscgc_6["Spanish"]["cgc_di"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_1"] = "Pos 1";
	$fieldToolTipscgc_6["Spanish"]["pos_1"] = "";
	$placeHolderscgc_6["Spanish"]["pos_1"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_2"] = "Pos 2";
	$fieldToolTipscgc_6["Spanish"]["pos_2"] = "";
	$placeHolderscgc_6["Spanish"]["pos_2"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_4"] = "Pos 4";
	$fieldToolTipscgc_6["Spanish"]["pos_4"] = "";
	$placeHolderscgc_6["Spanish"]["pos_4"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_6"] = "Pos 6";
	$fieldToolTipscgc_6["Spanish"]["pos_6"] = "";
	$placeHolderscgc_6["Spanish"]["pos_6"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_9"] = "Pos 9";
	$fieldToolTipscgc_6["Spanish"]["pos_9"] = "";
	$placeHolderscgc_6["Spanish"]["pos_9"] = "";
	$fieldLabelscgc_6["Spanish"]["pos_9num"] = "Código Contable numérico";
	$fieldToolTipscgc_6["Spanish"]["pos_9num"] = "";
	$placeHolderscgc_6["Spanish"]["pos_9num"] = "";
	$fieldLabelscgc_6["Spanish"]["CodigoContable"] = "Código Contable";
	$fieldToolTipscgc_6["Spanish"]["CodigoContable"] = "";
	$placeHolderscgc_6["Spanish"]["CodigoContable"] = "";
	$fieldLabelscgc_6["Spanish"]["Descripcion_9"] = "Descripción";
	$fieldToolTipscgc_6["Spanish"]["Descripcion_9"] = "";
	$placeHolderscgc_6["Spanish"]["Descripcion_9"] = "";
	$fieldLabelscgc_6["Spanish"]["Imputable"] = "Imputable";
	$fieldToolTipscgc_6["Spanish"]["Imputable"] = "";
	$placeHolderscgc_6["Spanish"]["Imputable"] = "";
	$fieldLabelscgc_6["Spanish"]["Clasifica"] = "Clasifica";
	$fieldToolTipscgc_6["Spanish"]["Clasifica"] = "";
	$placeHolderscgc_6["Spanish"]["Clasifica"] = "";
	$fieldLabelscgc_6["Spanish"]["Manual"] = "Manual";
	$fieldToolTipscgc_6["Spanish"]["Manual"] = "";
	$placeHolderscgc_6["Spanish"]["Manual"] = "";
	$fieldLabelscgc_6["Spanish"]["Reciproca"] = "Reciproca";
	$fieldToolTipscgc_6["Spanish"]["Reciproca"] = "";
	$placeHolderscgc_6["Spanish"]["Reciproca"] = "";
	$fieldLabelscgc_6["Spanish"]["AplBanco"] = "Apl Banco";
	$fieldToolTipscgc_6["Spanish"]["AplBanco"] = "";
	$placeHolderscgc_6["Spanish"]["AplBanco"] = "";
	$fieldLabelscgc_6["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipscgc_6["Spanish"]["Naturaleza"] = "";
	$placeHolderscgc_6["Spanish"]["Naturaleza"] = "";
	$fieldLabelscgc_6["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipscgc_6["Spanish"]["Saldo"] = "";
	$placeHolderscgc_6["Spanish"]["Saldo"] = "";
	$fieldLabelscgc_6["Spanish"]["Vigente"] = "Vigente";
	$fieldToolTipscgc_6["Spanish"]["Vigente"] = "";
	$placeHolderscgc_6["Spanish"]["Vigente"] = "";
	$fieldLabelscgc_6["Spanish"]["CodigoEntidad"] = "Codigo Entidad";
	$fieldToolTipscgc_6["Spanish"]["CodigoEntidad"] = "";
	$placeHolderscgc_6["Spanish"]["CodigoEntidad"] = "";
	$fieldLabelscgc_6["Spanish"]["EntidadContablePublica"] = "Entidad Contable Publica";
	$fieldToolTipscgc_6["Spanish"]["EntidadContablePublica"] = "";
	$placeHolderscgc_6["Spanish"]["EntidadContablePublica"] = "";
	if (count($fieldToolTipscgc_6["Spanish"]))
		$tdatacgc_6[".isUseToolTips"] = true;
}


	$tdatacgc_6[".NCSearch"] = true;



$tdatacgc_6[".shortTableName"] = "cgc_6";
$tdatacgc_6[".nSecOptions"] = 0;

$tdatacgc_6[".mainTableOwnerID"] = "";
$tdatacgc_6[".entityType"] = 0;
$tdatacgc_6[".connId"] = "dbrf_at_127_0_0_1";


$tdatacgc_6[".strOriginalTableName"] = "cgc_6";

	



$tdatacgc_6[".showAddInPopup"] = false;

$tdatacgc_6[".showEditInPopup"] = false;

$tdatacgc_6[".showViewInPopup"] = false;

$tdatacgc_6[".listAjax"] = false;
//	temporary
//$tdatacgc_6[".listAjax"] = false;

	$tdatacgc_6[".audit"] = false;

	$tdatacgc_6[".locking"] = false;


$pages = $tdatacgc_6[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacgc_6[".edit"] = true;
	$tdatacgc_6[".afterEditAction"] = 1;
	$tdatacgc_6[".closePopupAfterEdit"] = 1;
	$tdatacgc_6[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacgc_6[".add"] = true;
$tdatacgc_6[".afterAddAction"] = 1;
$tdatacgc_6[".closePopupAfterAdd"] = 1;
$tdatacgc_6[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacgc_6[".list"] = true;
}



$tdatacgc_6[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacgc_6[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacgc_6[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacgc_6[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacgc_6[".printFriendly"] = true;
}



$tdatacgc_6[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacgc_6[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacgc_6[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacgc_6[".isUseAjaxSuggest"] = true;



																								

$tdatacgc_6[".ajaxCodeSnippetAdded"] = false;

$tdatacgc_6[".buttonsAdded"] = false;

$tdatacgc_6[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacgc_6[".isUseTimeForSearch"] = false;


$tdatacgc_6[".badgeColor"] = "778899";


$tdatacgc_6[".allSearchFields"] = array();
$tdatacgc_6[".filterFields"] = array();
$tdatacgc_6[".requiredSearchFields"] = array();

$tdatacgc_6[".googleLikeFields"] = array();
$tdatacgc_6[".googleLikeFields"][] = "cgc_di";
$tdatacgc_6[".googleLikeFields"][] = "pos_1";
$tdatacgc_6[".googleLikeFields"][] = "pos_2";
$tdatacgc_6[".googleLikeFields"][] = "pos_4";
$tdatacgc_6[".googleLikeFields"][] = "pos_6";
$tdatacgc_6[".googleLikeFields"][] = "pos_9";
$tdatacgc_6[".googleLikeFields"][] = "pos_9num";
$tdatacgc_6[".googleLikeFields"][] = "CodigoContable";
$tdatacgc_6[".googleLikeFields"][] = "Descripcion_9";
$tdatacgc_6[".googleLikeFields"][] = "Imputable";
$tdatacgc_6[".googleLikeFields"][] = "Clasifica";
$tdatacgc_6[".googleLikeFields"][] = "Manual";
$tdatacgc_6[".googleLikeFields"][] = "Reciproca";
$tdatacgc_6[".googleLikeFields"][] = "AplBanco";
$tdatacgc_6[".googleLikeFields"][] = "Naturaleza";
$tdatacgc_6[".googleLikeFields"][] = "Saldo";
$tdatacgc_6[".googleLikeFields"][] = "Vigente";
$tdatacgc_6[".googleLikeFields"][] = "CodigoEntidad";
$tdatacgc_6[".googleLikeFields"][] = "EntidadContablePublica";



$tdatacgc_6[".tableType"] = "list";

$tdatacgc_6[".printerPageOrientation"] = 0;
$tdatacgc_6[".nPrinterPageScale"] = 100;

$tdatacgc_6[".nPrinterSplitRecords"] = 40;

$tdatacgc_6[".geocodingEnabled"] = false;










$tdatacgc_6[".pageSize"] = 20;

$tdatacgc_6[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacgc_6[".strOrderBy"] = $tstrOrderBy;

$tdatacgc_6[".orderindexes"] = array();


$tdatacgc_6[".sqlHead"] = "SELECT cgc_di,  pos_1,  pos_2,  pos_4,  pos_6,  pos_9,  pos_9num,  CodigoContable,  Descripcion_9,  Imputable,  Clasifica,  Manual,  Reciproca,  AplBanco,  Naturaleza,  Saldo,  Vigente,  CodigoEntidad,  EntidadContablePublica";
$tdatacgc_6[".sqlFrom"] = "FROM cgc_6";
$tdatacgc_6[".sqlWhereExpr"] = "(pos_9 is not null)";
$tdatacgc_6[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacgc_6[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacgc_6[".arrGroupsPerPage"] = $arrGPP;

$tdatacgc_6[".highlightSearchResults"] = true;

$tableKeyscgc_6 = array();
$tableKeyscgc_6[] = "cgc_di";
$tdatacgc_6[".Keys"] = $tableKeyscgc_6;


$tdatacgc_6[".hideMobileList"] = array();




//	cgc_di
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cgc_di";
	$fdata["GoodName"] = "cgc_di";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","cgc_di");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cgc_di";

		$fdata["sourceSingle"] = "cgc_di";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cgc_di";

	
	
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


	$tdatacgc_6["cgc_di"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "cgc_di";
//	pos_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pos_1";
	$fdata["GoodName"] = "pos_1";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_1";

		$fdata["sourceSingle"] = "pos_1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_1";

	
	
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


	$tdatacgc_6["pos_1"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_1";
//	pos_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pos_2";
	$fdata["GoodName"] = "pos_2";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_2";

		$fdata["sourceSingle"] = "pos_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_2";

	
	
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


	$tdatacgc_6["pos_2"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_2";
//	pos_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pos_4";
	$fdata["GoodName"] = "pos_4";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_4";

		$fdata["sourceSingle"] = "pos_4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_4";

	
	
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


	$tdatacgc_6["pos_4"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_4";
//	pos_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pos_6";
	$fdata["GoodName"] = "pos_6";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_6");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_6";

		$fdata["sourceSingle"] = "pos_6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_6";

	
	
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


	$tdatacgc_6["pos_6"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_6";
//	pos_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pos_9";
	$fdata["GoodName"] = "pos_9";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_9";

		$fdata["sourceSingle"] = "pos_9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_9";

	
	
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


	$tdatacgc_6["pos_9"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_9";
//	pos_9num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pos_9num";
	$fdata["GoodName"] = "pos_9num";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","pos_9num");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pos_9num";

		$fdata["sourceSingle"] = "pos_9num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_9num";

	
	
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


	$tdatacgc_6["pos_9num"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "pos_9num";
//	CodigoContable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CodigoContable";
	$fdata["GoodName"] = "CodigoContable";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","CodigoContable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CodigoContable";

		$fdata["sourceSingle"] = "CodigoContable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodigoContable";

	
	
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


	$tdatacgc_6["CodigoContable"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "CodigoContable";
//	Descripcion_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Descripcion_9";
	$fdata["GoodName"] = "Descripcion_9";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Descripcion_9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion_9";

		$fdata["sourceSingle"] = "Descripcion_9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion_9";

	
	
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


	$tdatacgc_6["Descripcion_9"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Descripcion_9";
//	Imputable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Imputable";
	$fdata["GoodName"] = "Imputable";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Imputable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Imputable";

		$fdata["sourceSingle"] = "Imputable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Imputable";

	
	
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


	$tdatacgc_6["Imputable"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Imputable";
//	Clasifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Clasifica";
	$fdata["GoodName"] = "Clasifica";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Clasifica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clasifica";

		$fdata["sourceSingle"] = "Clasifica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clasifica";

	
	
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


	$tdatacgc_6["Clasifica"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Clasifica";
//	Manual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Manual";
	$fdata["GoodName"] = "Manual";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Manual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Manual";

		$fdata["sourceSingle"] = "Manual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Manual";

	
	
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


	$tdatacgc_6["Manual"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Manual";
//	Reciproca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Reciproca";
	$fdata["GoodName"] = "Reciproca";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Reciproca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Reciproca";

		$fdata["sourceSingle"] = "Reciproca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reciproca";

	
	
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


	$tdatacgc_6["Reciproca"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Reciproca";
//	AplBanco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AplBanco";
	$fdata["GoodName"] = "AplBanco";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","AplBanco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AplBanco";

		$fdata["sourceSingle"] = "AplBanco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AplBanco";

	
	
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


	$tdatacgc_6["AplBanco"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "AplBanco";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Naturaleza";

		$fdata["sourceSingle"] = "Naturaleza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Naturaleza";

	
	
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


	$tdatacgc_6["Naturaleza"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Naturaleza";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Saldo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Saldo";

		$fdata["sourceSingle"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Saldo";

	
	
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


	$tdatacgc_6["Saldo"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Saldo";
//	Vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Vigente";
	$fdata["GoodName"] = "Vigente";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","Vigente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Vigente";

		$fdata["sourceSingle"] = "Vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vigente";

	
	
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


	$tdatacgc_6["Vigente"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "Vigente";
//	CodigoEntidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CodigoEntidad";
	$fdata["GoodName"] = "CodigoEntidad";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","CodigoEntidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CodigoEntidad";

		$fdata["sourceSingle"] = "CodigoEntidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodigoEntidad";

	
	
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


	$tdatacgc_6["CodigoEntidad"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "CodigoEntidad";
//	EntidadContablePublica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "EntidadContablePublica";
	$fdata["GoodName"] = "EntidadContablePublica";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_6","EntidadContablePublica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EntidadContablePublica";

		$fdata["sourceSingle"] = "EntidadContablePublica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EntidadContablePublica";

	
	
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


	$tdatacgc_6["EntidadContablePublica"] = $fdata;
		$tdatacgc_6[".searchableFields"][] = "EntidadContablePublica";


$tables_data["cgc_6"]=&$tdatacgc_6;
$field_labels["cgc_6"] = &$fieldLabelscgc_6;
$fieldToolTips["cgc_6"] = &$fieldToolTipscgc_6;
$placeHolders["cgc_6"] = &$placeHolderscgc_6;
$page_titles["cgc_6"] = &$pageTitlescgc_6;


changeTextControlsToDate( "cgc_6" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cgc_6"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cgc_6"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cgc_4";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cgc_4";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cgc_4";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cgc_6"][0] = $masterParams;
				$masterTablesData["cgc_6"][0]["masterKeys"] = array();
	$masterTablesData["cgc_6"][0]["masterKeys"][]="pos_6";
				$masterTablesData["cgc_6"][0]["detailKeys"] = array();
	$masterTablesData["cgc_6"][0]["detailKeys"][]="pos_6";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cgc_6()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cgc_di,  pos_1,  pos_2,  pos_4,  pos_6,  pos_9,  pos_9num,  CodigoContable,  Descripcion_9,  Imputable,  Clasifica,  Manual,  Reciproca,  AplBanco,  Naturaleza,  Saldo,  Vigente,  CodigoEntidad,  EntidadContablePublica";
$proto0["m_strFrom"] = "FROM cgc_6";
$proto0["m_strWhere"] = "(pos_9 is not null)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "pos_9 is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_9",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "is not null";
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
	"m_strName" => "cgc_di",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto6["m_sql"] = "cgc_di";
$proto6["m_srcTableName"] = "cgc_6";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_1",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto8["m_sql"] = "pos_1";
$proto8["m_srcTableName"] = "cgc_6";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_2",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto10["m_sql"] = "pos_2";
$proto10["m_srcTableName"] = "cgc_6";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_4",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto12["m_sql"] = "pos_4";
$proto12["m_srcTableName"] = "cgc_6";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_6",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto14["m_sql"] = "pos_6";
$proto14["m_srcTableName"] = "cgc_6";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_9",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto16["m_sql"] = "pos_9";
$proto16["m_srcTableName"] = "cgc_6";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_9num",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto18["m_sql"] = "pos_9num";
$proto18["m_srcTableName"] = "cgc_6";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoContable",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto20["m_sql"] = "CodigoContable";
$proto20["m_srcTableName"] = "cgc_6";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion_9",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto22["m_sql"] = "Descripcion_9";
$proto22["m_srcTableName"] = "cgc_6";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Imputable",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto24["m_sql"] = "Imputable";
$proto24["m_srcTableName"] = "cgc_6";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Clasifica",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto26["m_sql"] = "Clasifica";
$proto26["m_srcTableName"] = "cgc_6";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Manual",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto28["m_sql"] = "Manual";
$proto28["m_srcTableName"] = "cgc_6";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Reciproca",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto30["m_sql"] = "Reciproca";
$proto30["m_srcTableName"] = "cgc_6";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AplBanco",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto32["m_sql"] = "AplBanco";
$proto32["m_srcTableName"] = "cgc_6";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto34["m_sql"] = "Naturaleza";
$proto34["m_srcTableName"] = "cgc_6";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto36["m_sql"] = "Saldo";
$proto36["m_srcTableName"] = "cgc_6";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Vigente",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto38["m_sql"] = "Vigente";
$proto38["m_srcTableName"] = "cgc_6";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoEntidad",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto40["m_sql"] = "CodigoEntidad";
$proto40["m_srcTableName"] = "cgc_6";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "EntidadContablePublica",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_6"
));

$proto42["m_sql"] = "EntidadContablePublica";
$proto42["m_srcTableName"] = "cgc_6";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "cgc_6";
$proto45["m_srcTableName"] = "cgc_6";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "cgc_di";
$proto45["m_columns"][] = "pos_1";
$proto45["m_columns"][] = "pos_2";
$proto45["m_columns"][] = "pos_4";
$proto45["m_columns"][] = "pos_6";
$proto45["m_columns"][] = "pos_9";
$proto45["m_columns"][] = "pos_9num";
$proto45["m_columns"][] = "CodigoContable";
$proto45["m_columns"][] = "Descripcion_9";
$proto45["m_columns"][] = "Imputable";
$proto45["m_columns"][] = "Clasifica";
$proto45["m_columns"][] = "Manual";
$proto45["m_columns"][] = "Reciproca";
$proto45["m_columns"][] = "AplBanco";
$proto45["m_columns"][] = "Naturaleza";
$proto45["m_columns"][] = "Saldo";
$proto45["m_columns"][] = "Vigente";
$proto45["m_columns"][] = "CodigoEntidad";
$proto45["m_columns"][] = "EntidadContablePublica";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "cgc_6";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "cgc_6";
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
$proto0["m_srcTableName"]="cgc_6";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cgc_6 = createSqlQuery_cgc_6();


	
								;

																			

$tdatacgc_6[".sqlquery"] = $queryData_cgc_6;



$tdatacgc_6[".hasEvents"] = false;

?>