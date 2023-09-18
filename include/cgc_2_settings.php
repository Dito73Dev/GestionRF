<?php
$tdatacgc_2 = array();
$tdatacgc_2[".searchableFields"] = array();
$tdatacgc_2[".ShortName"] = "cgc_2";
$tdatacgc_2[".OwnerID"] = "";
$tdatacgc_2[".OriginalTable"] = "cgc_2";


$tdatacgc_2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacgc_2[".originalPagesByType"] = $tdatacgc_2[".pagesByType"];
$tdatacgc_2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacgc_2[".originalPages"] = $tdatacgc_2[".pages"];
$tdatacgc_2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacgc_2[".originalDefaultPages"] = $tdatacgc_2[".defaultPages"];

//	field labels
$fieldLabelscgc_2 = array();
$fieldToolTipscgc_2 = array();
$pageTitlescgc_2 = array();
$placeHolderscgc_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscgc_2["Spanish"] = array();
	$fieldToolTipscgc_2["Spanish"] = array();
	$placeHolderscgc_2["Spanish"] = array();
	$pageTitlescgc_2["Spanish"] = array();
	$fieldLabelscgc_2["Spanish"]["cgc_di"] = "Cgc Di";
	$fieldToolTipscgc_2["Spanish"]["cgc_di"] = "";
	$placeHolderscgc_2["Spanish"]["cgc_di"] = "";
	$fieldLabelscgc_2["Spanish"]["pos_1"] = "Pos 1";
	$fieldToolTipscgc_2["Spanish"]["pos_1"] = "";
	$placeHolderscgc_2["Spanish"]["pos_1"] = "";
	$fieldLabelscgc_2["Spanish"]["pos_2"] = "Pos 2";
	$fieldToolTipscgc_2["Spanish"]["pos_2"] = "";
	$placeHolderscgc_2["Spanish"]["pos_2"] = "";
	$fieldLabelscgc_2["Spanish"]["pos_4"] = "Pos 4";
	$fieldToolTipscgc_2["Spanish"]["pos_4"] = "";
	$placeHolderscgc_2["Spanish"]["pos_4"] = "";
	$fieldLabelscgc_2["Spanish"]["pos_6"] = "Pos 6";
	$fieldToolTipscgc_2["Spanish"]["pos_6"] = "";
	$placeHolderscgc_2["Spanish"]["pos_6"] = "";
	$fieldLabelscgc_2["Spanish"]["pos_9"] = "Pos 9";
	$fieldToolTipscgc_2["Spanish"]["pos_9"] = "";
	$placeHolderscgc_2["Spanish"]["pos_9"] = "";
	$fieldLabelscgc_2["Spanish"]["CodigoContable"] = "Código Contable";
	$fieldToolTipscgc_2["Spanish"]["CodigoContable"] = "";
	$placeHolderscgc_2["Spanish"]["CodigoContable"] = "";
	$fieldLabelscgc_2["Spanish"]["Descripcion_4"] = "Descripción";
	$fieldToolTipscgc_2["Spanish"]["Descripcion_4"] = "";
	$placeHolderscgc_2["Spanish"]["Descripcion_4"] = "";
	$fieldLabelscgc_2["Spanish"]["Imputable"] = "Imputable";
	$fieldToolTipscgc_2["Spanish"]["Imputable"] = "";
	$placeHolderscgc_2["Spanish"]["Imputable"] = "";
	$fieldLabelscgc_2["Spanish"]["Clasifica"] = "Clasifica";
	$fieldToolTipscgc_2["Spanish"]["Clasifica"] = "";
	$placeHolderscgc_2["Spanish"]["Clasifica"] = "";
	$fieldLabelscgc_2["Spanish"]["Manual"] = "Manual";
	$fieldToolTipscgc_2["Spanish"]["Manual"] = "";
	$placeHolderscgc_2["Spanish"]["Manual"] = "";
	$fieldLabelscgc_2["Spanish"]["Reciproca"] = "Reciproca";
	$fieldToolTipscgc_2["Spanish"]["Reciproca"] = "";
	$placeHolderscgc_2["Spanish"]["Reciproca"] = "";
	$fieldLabelscgc_2["Spanish"]["AplBanco"] = "Apl Banco";
	$fieldToolTipscgc_2["Spanish"]["AplBanco"] = "";
	$placeHolderscgc_2["Spanish"]["AplBanco"] = "";
	$fieldLabelscgc_2["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipscgc_2["Spanish"]["Naturaleza"] = "";
	$placeHolderscgc_2["Spanish"]["Naturaleza"] = "";
	$fieldLabelscgc_2["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipscgc_2["Spanish"]["Saldo"] = "";
	$placeHolderscgc_2["Spanish"]["Saldo"] = "";
	$fieldLabelscgc_2["Spanish"]["Vigente"] = "Vigente";
	$fieldToolTipscgc_2["Spanish"]["Vigente"] = "";
	$placeHolderscgc_2["Spanish"]["Vigente"] = "";
	$fieldLabelscgc_2["Spanish"]["CodigoEntidad"] = "Codigo Entidad";
	$fieldToolTipscgc_2["Spanish"]["CodigoEntidad"] = "";
	$placeHolderscgc_2["Spanish"]["CodigoEntidad"] = "";
	$fieldLabelscgc_2["Spanish"]["EntidadContablePublica"] = "Entidad Contable Publica";
	$fieldToolTipscgc_2["Spanish"]["EntidadContablePublica"] = "";
	$placeHolderscgc_2["Spanish"]["EntidadContablePublica"] = "";
	if (count($fieldToolTipscgc_2["Spanish"]))
		$tdatacgc_2[".isUseToolTips"] = true;
}


	$tdatacgc_2[".NCSearch"] = true;



$tdatacgc_2[".shortTableName"] = "cgc_2";
$tdatacgc_2[".nSecOptions"] = 0;

$tdatacgc_2[".mainTableOwnerID"] = "";
$tdatacgc_2[".entityType"] = 0;
$tdatacgc_2[".connId"] = "dbrf_at_127_0_0_1";


$tdatacgc_2[".strOriginalTableName"] = "cgc_2";

	



$tdatacgc_2[".showAddInPopup"] = false;

$tdatacgc_2[".showEditInPopup"] = false;

$tdatacgc_2[".showViewInPopup"] = false;

$tdatacgc_2[".listAjax"] = false;
//	temporary
//$tdatacgc_2[".listAjax"] = false;

	$tdatacgc_2[".audit"] = false;

	$tdatacgc_2[".locking"] = false;


$pages = $tdatacgc_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacgc_2[".edit"] = true;
	$tdatacgc_2[".afterEditAction"] = 1;
	$tdatacgc_2[".closePopupAfterEdit"] = 1;
	$tdatacgc_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacgc_2[".add"] = true;
$tdatacgc_2[".afterAddAction"] = 1;
$tdatacgc_2[".closePopupAfterAdd"] = 1;
$tdatacgc_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacgc_2[".list"] = true;
}



$tdatacgc_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacgc_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacgc_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacgc_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacgc_2[".printFriendly"] = true;
}



$tdatacgc_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacgc_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacgc_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacgc_2[".isUseAjaxSuggest"] = true;



																								

$tdatacgc_2[".ajaxCodeSnippetAdded"] = false;

$tdatacgc_2[".buttonsAdded"] = false;

$tdatacgc_2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacgc_2[".isUseTimeForSearch"] = false;


$tdatacgc_2[".badgeColor"] = "5f9ea0";


$tdatacgc_2[".allSearchFields"] = array();
$tdatacgc_2[".filterFields"] = array();
$tdatacgc_2[".requiredSearchFields"] = array();

$tdatacgc_2[".googleLikeFields"] = array();
$tdatacgc_2[".googleLikeFields"][] = "cgc_di";
$tdatacgc_2[".googleLikeFields"][] = "pos_1";
$tdatacgc_2[".googleLikeFields"][] = "pos_2";
$tdatacgc_2[".googleLikeFields"][] = "pos_4";
$tdatacgc_2[".googleLikeFields"][] = "pos_6";
$tdatacgc_2[".googleLikeFields"][] = "pos_9";
$tdatacgc_2[".googleLikeFields"][] = "CodigoContable";
$tdatacgc_2[".googleLikeFields"][] = "Descripcion_4";
$tdatacgc_2[".googleLikeFields"][] = "Imputable";
$tdatacgc_2[".googleLikeFields"][] = "Clasifica";
$tdatacgc_2[".googleLikeFields"][] = "Manual";
$tdatacgc_2[".googleLikeFields"][] = "Reciproca";
$tdatacgc_2[".googleLikeFields"][] = "AplBanco";
$tdatacgc_2[".googleLikeFields"][] = "Naturaleza";
$tdatacgc_2[".googleLikeFields"][] = "Saldo";
$tdatacgc_2[".googleLikeFields"][] = "Vigente";
$tdatacgc_2[".googleLikeFields"][] = "CodigoEntidad";
$tdatacgc_2[".googleLikeFields"][] = "EntidadContablePublica";



$tdatacgc_2[".tableType"] = "list";

$tdatacgc_2[".printerPageOrientation"] = 0;
$tdatacgc_2[".nPrinterPageScale"] = 100;

$tdatacgc_2[".nPrinterSplitRecords"] = 40;

$tdatacgc_2[".geocodingEnabled"] = false;










$tdatacgc_2[".pageSize"] = 20;

$tdatacgc_2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacgc_2[".strOrderBy"] = $tstrOrderBy;

$tdatacgc_2[".orderindexes"] = array();


$tdatacgc_2[".sqlHead"] = "SELECT cgc_di,  pos_1,  pos_2,  pos_4,  pos_6,  pos_9,  CodigoContable,  Descripcion_4,  Imputable,  Clasifica,  Manual,  Reciproca,  AplBanco,  Naturaleza,  Saldo,  Vigente,  CodigoEntidad,  EntidadContablePublica";
$tdatacgc_2[".sqlFrom"] = "FROM cgc_2";
$tdatacgc_2[".sqlWhereExpr"] = "(pos_4 is not null)";
$tdatacgc_2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacgc_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacgc_2[".arrGroupsPerPage"] = $arrGPP;

$tdatacgc_2[".highlightSearchResults"] = true;

$tableKeyscgc_2 = array();
$tableKeyscgc_2[] = "cgc_di";
$tdatacgc_2[".Keys"] = $tableKeyscgc_2;


$tdatacgc_2[".hideMobileList"] = array();




//	cgc_di
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cgc_di";
	$fdata["GoodName"] = "cgc_di";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","cgc_di");
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


	$tdatacgc_2["cgc_di"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "cgc_di";
//	pos_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pos_1";
	$fdata["GoodName"] = "pos_1";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","pos_1");
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


	$tdatacgc_2["pos_1"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "pos_1";
//	pos_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pos_2";
	$fdata["GoodName"] = "pos_2";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","pos_2");
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


	$tdatacgc_2["pos_2"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "pos_2";
//	pos_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pos_4";
	$fdata["GoodName"] = "pos_4";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","pos_4");
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


	$tdatacgc_2["pos_4"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "pos_4";
//	pos_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pos_6";
	$fdata["GoodName"] = "pos_6";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","pos_6");
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


	$tdatacgc_2["pos_6"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "pos_6";
//	pos_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pos_9";
	$fdata["GoodName"] = "pos_9";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","pos_9");
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


	$tdatacgc_2["pos_9"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "pos_9";
//	CodigoContable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CodigoContable";
	$fdata["GoodName"] = "CodigoContable";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","CodigoContable");
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


	$tdatacgc_2["CodigoContable"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "CodigoContable";
//	Descripcion_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Descripcion_4";
	$fdata["GoodName"] = "Descripcion_4";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Descripcion_4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion_4";

		$fdata["sourceSingle"] = "Descripcion_4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion_4";

	
	
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


	$tdatacgc_2["Descripcion_4"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Descripcion_4";
//	Imputable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Imputable";
	$fdata["GoodName"] = "Imputable";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Imputable");
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


	$tdatacgc_2["Imputable"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Imputable";
//	Clasifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Clasifica";
	$fdata["GoodName"] = "Clasifica";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Clasifica");
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


	$tdatacgc_2["Clasifica"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Clasifica";
//	Manual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Manual";
	$fdata["GoodName"] = "Manual";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Manual");
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


	$tdatacgc_2["Manual"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Manual";
//	Reciproca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reciproca";
	$fdata["GoodName"] = "Reciproca";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Reciproca");
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


	$tdatacgc_2["Reciproca"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Reciproca";
//	AplBanco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AplBanco";
	$fdata["GoodName"] = "AplBanco";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","AplBanco");
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


	$tdatacgc_2["AplBanco"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "AplBanco";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Naturaleza");
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


	$tdatacgc_2["Naturaleza"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Naturaleza";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Saldo");
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


	$tdatacgc_2["Saldo"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Saldo";
//	Vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Vigente";
	$fdata["GoodName"] = "Vigente";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","Vigente");
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


	$tdatacgc_2["Vigente"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "Vigente";
//	CodigoEntidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CodigoEntidad";
	$fdata["GoodName"] = "CodigoEntidad";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","CodigoEntidad");
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


	$tdatacgc_2["CodigoEntidad"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "CodigoEntidad";
//	EntidadContablePublica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EntidadContablePublica";
	$fdata["GoodName"] = "EntidadContablePublica";
	$fdata["ownerTable"] = "cgc_2";
	$fdata["Label"] = GetFieldLabel("cgc_2","EntidadContablePublica");
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


	$tdatacgc_2["EntidadContablePublica"] = $fdata;
		$tdatacgc_2[".searchableFields"][] = "EntidadContablePublica";


$tables_data["cgc_2"]=&$tdatacgc_2;
$field_labels["cgc_2"] = &$fieldLabelscgc_2;
$fieldToolTips["cgc_2"] = &$fieldToolTipscgc_2;
$placeHolders["cgc_2"] = &$placeHolderscgc_2;
$page_titles["cgc_2"] = &$pageTitlescgc_2;


changeTextControlsToDate( "cgc_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cgc_2"] = array();
//	cgc_4
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cgc_4";
		$detailsParam["dOriginalTable"] = "cgc_4";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cgc_4";
	$detailsParam["dCaptionTable"] = GetTableCaption("cgc_4");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cgc_2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cgc_2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cgc_2"][$dIndex]["masterKeys"][]="pos_4";

				$detailsTablesData["cgc_2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cgc_2"][$dIndex]["detailKeys"][]="pos_4";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cgc_2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cgc_1";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cgc_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cgc_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cgc_2"][0] = $masterParams;
				$masterTablesData["cgc_2"][0]["masterKeys"] = array();
	$masterTablesData["cgc_2"][0]["masterKeys"][]="pos_2";
				$masterTablesData["cgc_2"][0]["detailKeys"] = array();
	$masterTablesData["cgc_2"][0]["detailKeys"][]="pos_2";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cgc_2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cgc_di,  pos_1,  pos_2,  pos_4,  pos_6,  pos_9,  CodigoContable,  Descripcion_4,  Imputable,  Clasifica,  Manual,  Reciproca,  AplBanco,  Naturaleza,  Saldo,  Vigente,  CodigoEntidad,  EntidadContablePublica";
$proto0["m_strFrom"] = "FROM cgc_2";
$proto0["m_strWhere"] = "(pos_4 is not null)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "pos_4 is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_4",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
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
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto6["m_sql"] = "cgc_di";
$proto6["m_srcTableName"] = "cgc_2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_1",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto8["m_sql"] = "pos_1";
$proto8["m_srcTableName"] = "cgc_2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_2",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto10["m_sql"] = "pos_2";
$proto10["m_srcTableName"] = "cgc_2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_4",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto12["m_sql"] = "pos_4";
$proto12["m_srcTableName"] = "cgc_2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_6",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto14["m_sql"] = "pos_6";
$proto14["m_srcTableName"] = "cgc_2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_9",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto16["m_sql"] = "pos_9";
$proto16["m_srcTableName"] = "cgc_2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoContable",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto18["m_sql"] = "CodigoContable";
$proto18["m_srcTableName"] = "cgc_2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion_4",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto20["m_sql"] = "Descripcion_4";
$proto20["m_srcTableName"] = "cgc_2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Imputable",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto22["m_sql"] = "Imputable";
$proto22["m_srcTableName"] = "cgc_2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Clasifica",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto24["m_sql"] = "Clasifica";
$proto24["m_srcTableName"] = "cgc_2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Manual",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto26["m_sql"] = "Manual";
$proto26["m_srcTableName"] = "cgc_2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Reciproca",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto28["m_sql"] = "Reciproca";
$proto28["m_srcTableName"] = "cgc_2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AplBanco",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto30["m_sql"] = "AplBanco";
$proto30["m_srcTableName"] = "cgc_2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto32["m_sql"] = "Naturaleza";
$proto32["m_srcTableName"] = "cgc_2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto34["m_sql"] = "Saldo";
$proto34["m_srcTableName"] = "cgc_2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Vigente",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto36["m_sql"] = "Vigente";
$proto36["m_srcTableName"] = "cgc_2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoEntidad",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto38["m_sql"] = "CodigoEntidad";
$proto38["m_srcTableName"] = "cgc_2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "EntidadContablePublica",
	"m_strTable" => "cgc_2",
	"m_srcTableName" => "cgc_2"
));

$proto40["m_sql"] = "EntidadContablePublica";
$proto40["m_srcTableName"] = "cgc_2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "cgc_2";
$proto43["m_srcTableName"] = "cgc_2";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "cgc_di";
$proto43["m_columns"][] = "pos_1";
$proto43["m_columns"][] = "pos_2";
$proto43["m_columns"][] = "pos_4";
$proto43["m_columns"][] = "pos_6";
$proto43["m_columns"][] = "pos_9";
$proto43["m_columns"][] = "CodigoContable";
$proto43["m_columns"][] = "Descripcion_4";
$proto43["m_columns"][] = "Imputable";
$proto43["m_columns"][] = "Clasifica";
$proto43["m_columns"][] = "Manual";
$proto43["m_columns"][] = "Reciproca";
$proto43["m_columns"][] = "AplBanco";
$proto43["m_columns"][] = "Naturaleza";
$proto43["m_columns"][] = "Saldo";
$proto43["m_columns"][] = "Vigente";
$proto43["m_columns"][] = "CodigoEntidad";
$proto43["m_columns"][] = "EntidadContablePublica";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "cgc_2";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "cgc_2";
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
$proto0["m_srcTableName"]="cgc_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cgc_2 = createSqlQuery_cgc_2();


	
								;

																		

$tdatacgc_2[".sqlquery"] = $queryData_cgc_2;



$tdatacgc_2[".hasEvents"] = false;

?>