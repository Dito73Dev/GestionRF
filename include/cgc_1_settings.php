<?php
$tdatacgc_1 = array();
$tdatacgc_1[".searchableFields"] = array();
$tdatacgc_1[".ShortName"] = "cgc_1";
$tdatacgc_1[".OwnerID"] = "";
$tdatacgc_1[".OriginalTable"] = "cgc_1";


$tdatacgc_1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacgc_1[".originalPagesByType"] = $tdatacgc_1[".pagesByType"];
$tdatacgc_1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacgc_1[".originalPages"] = $tdatacgc_1[".pages"];
$tdatacgc_1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacgc_1[".originalDefaultPages"] = $tdatacgc_1[".defaultPages"];

//	field labels
$fieldLabelscgc_1 = array();
$fieldToolTipscgc_1 = array();
$pageTitlescgc_1 = array();
$placeHolderscgc_1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscgc_1["Spanish"] = array();
	$fieldToolTipscgc_1["Spanish"] = array();
	$placeHolderscgc_1["Spanish"] = array();
	$pageTitlescgc_1["Spanish"] = array();
	$fieldLabelscgc_1["Spanish"]["CodigoContable"] = "Código Contable";
	$fieldToolTipscgc_1["Spanish"]["CodigoContable"] = "";
	$placeHolderscgc_1["Spanish"]["CodigoContable"] = "";
	$fieldLabelscgc_1["Spanish"]["Descripcion_2"] = "Descripción";
	$fieldToolTipscgc_1["Spanish"]["Descripcion_2"] = "";
	$placeHolderscgc_1["Spanish"]["Descripcion_2"] = "";
	$fieldLabelscgc_1["Spanish"]["Imputable"] = "Imputable";
	$fieldToolTipscgc_1["Spanish"]["Imputable"] = "";
	$placeHolderscgc_1["Spanish"]["Imputable"] = "";
	$fieldLabelscgc_1["Spanish"]["cgc_di"] = "Cgc Di";
	$fieldToolTipscgc_1["Spanish"]["cgc_di"] = "";
	$placeHolderscgc_1["Spanish"]["cgc_di"] = "";
	$fieldLabelscgc_1["Spanish"]["pos_1"] = "Pos 1";
	$fieldToolTipscgc_1["Spanish"]["pos_1"] = "";
	$placeHolderscgc_1["Spanish"]["pos_1"] = "";
	$fieldLabelscgc_1["Spanish"]["pos_2"] = "Pos 2";
	$fieldToolTipscgc_1["Spanish"]["pos_2"] = "";
	$placeHolderscgc_1["Spanish"]["pos_2"] = "";
	if (count($fieldToolTipscgc_1["Spanish"]))
		$tdatacgc_1[".isUseToolTips"] = true;
}


	$tdatacgc_1[".NCSearch"] = true;



$tdatacgc_1[".shortTableName"] = "cgc_1";
$tdatacgc_1[".nSecOptions"] = 0;

$tdatacgc_1[".mainTableOwnerID"] = "";
$tdatacgc_1[".entityType"] = 0;
$tdatacgc_1[".connId"] = "dbrf_at_127_0_0_1";


$tdatacgc_1[".strOriginalTableName"] = "cgc_1";

	



$tdatacgc_1[".showAddInPopup"] = false;

$tdatacgc_1[".showEditInPopup"] = false;

$tdatacgc_1[".showViewInPopup"] = false;

$tdatacgc_1[".listAjax"] = false;
//	temporary
//$tdatacgc_1[".listAjax"] = false;

	$tdatacgc_1[".audit"] = false;

	$tdatacgc_1[".locking"] = false;


$pages = $tdatacgc_1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacgc_1[".edit"] = true;
	$tdatacgc_1[".afterEditAction"] = 1;
	$tdatacgc_1[".closePopupAfterEdit"] = 1;
	$tdatacgc_1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacgc_1[".add"] = true;
$tdatacgc_1[".afterAddAction"] = 1;
$tdatacgc_1[".closePopupAfterAdd"] = 1;
$tdatacgc_1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacgc_1[".list"] = true;
}



$tdatacgc_1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacgc_1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacgc_1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacgc_1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacgc_1[".printFriendly"] = true;
}



$tdatacgc_1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacgc_1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacgc_1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacgc_1[".isUseAjaxSuggest"] = true;



																								

$tdatacgc_1[".ajaxCodeSnippetAdded"] = false;

$tdatacgc_1[".buttonsAdded"] = false;

$tdatacgc_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacgc_1[".isUseTimeForSearch"] = false;


$tdatacgc_1[".badgeColor"] = "4169e1";


$tdatacgc_1[".allSearchFields"] = array();
$tdatacgc_1[".filterFields"] = array();
$tdatacgc_1[".requiredSearchFields"] = array();

$tdatacgc_1[".googleLikeFields"] = array();
$tdatacgc_1[".googleLikeFields"][] = "CodigoContable";
$tdatacgc_1[".googleLikeFields"][] = "Descripcion_2";
$tdatacgc_1[".googleLikeFields"][] = "Imputable";
$tdatacgc_1[".googleLikeFields"][] = "cgc_di";
$tdatacgc_1[".googleLikeFields"][] = "pos_1";
$tdatacgc_1[".googleLikeFields"][] = "pos_2";



$tdatacgc_1[".tableType"] = "list";

$tdatacgc_1[".printerPageOrientation"] = 0;
$tdatacgc_1[".nPrinterPageScale"] = 100;

$tdatacgc_1[".nPrinterSplitRecords"] = 40;

$tdatacgc_1[".geocodingEnabled"] = false;










$tdatacgc_1[".pageSize"] = 20;

$tdatacgc_1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacgc_1[".strOrderBy"] = $tstrOrderBy;

$tdatacgc_1[".orderindexes"] = array();


$tdatacgc_1[".sqlHead"] = "SELECT CodigoContable,  Descripcion_2,  Imputable,  cgc_di,  pos_1,  pos_2";
$tdatacgc_1[".sqlFrom"] = "FROM cgc_1";
$tdatacgc_1[".sqlWhereExpr"] = "(pos_2 is not null)";
$tdatacgc_1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacgc_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacgc_1[".arrGroupsPerPage"] = $arrGPP;

$tdatacgc_1[".highlightSearchResults"] = true;

$tableKeyscgc_1 = array();
$tdatacgc_1[".Keys"] = $tableKeyscgc_1;


$tdatacgc_1[".hideMobileList"] = array();




//	CodigoContable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CodigoContable";
	$fdata["GoodName"] = "CodigoContable";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","CodigoContable");
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


	$tdatacgc_1["CodigoContable"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "CodigoContable";
//	Descripcion_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion_2";
	$fdata["GoodName"] = "Descripcion_2";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","Descripcion_2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion_2";

		$fdata["sourceSingle"] = "Descripcion_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion_2";

	
	
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


	$tdatacgc_1["Descripcion_2"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "Descripcion_2";
//	Imputable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Imputable";
	$fdata["GoodName"] = "Imputable";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","Imputable");
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


	$tdatacgc_1["Imputable"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "Imputable";
//	cgc_di
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cgc_di";
	$fdata["GoodName"] = "cgc_di";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","cgc_di");
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


	$tdatacgc_1["cgc_di"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "cgc_di";
//	pos_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pos_1";
	$fdata["GoodName"] = "pos_1";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","pos_1");
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


	$tdatacgc_1["pos_1"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "pos_1";
//	pos_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pos_2";
	$fdata["GoodName"] = "pos_2";
	$fdata["ownerTable"] = "cgc_1";
	$fdata["Label"] = GetFieldLabel("cgc_1","pos_2");
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


	$tdatacgc_1["pos_2"] = $fdata;
		$tdatacgc_1[".searchableFields"][] = "pos_2";


$tables_data["cgc_1"]=&$tdatacgc_1;
$field_labels["cgc_1"] = &$fieldLabelscgc_1;
$fieldToolTips["cgc_1"] = &$fieldToolTipscgc_1;
$placeHolders["cgc_1"] = &$placeHolderscgc_1;
$page_titles["cgc_1"] = &$pageTitlescgc_1;


changeTextControlsToDate( "cgc_1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cgc_1"] = array();
//	cgc_2
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cgc_2";
		$detailsParam["dOriginalTable"] = "cgc_2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cgc_2";
	$detailsParam["dCaptionTable"] = GetTableCaption("cgc_2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cgc_1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cgc_1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cgc_1"][$dIndex]["masterKeys"][]="pos_2";

				$detailsTablesData["cgc_1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cgc_1"][$dIndex]["detailKeys"][]="pos_2";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cgc_1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cgc_0";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cgc_0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cgc_0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cgc_1"][0] = $masterParams;
				$masterTablesData["cgc_1"][0]["masterKeys"] = array();
	$masterTablesData["cgc_1"][0]["masterKeys"][]="pos_0";
				$masterTablesData["cgc_1"][0]["detailKeys"] = array();
	$masterTablesData["cgc_1"][0]["detailKeys"][]="pos_1";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cgc_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CodigoContable,  Descripcion_2,  Imputable,  cgc_di,  pos_1,  pos_2";
$proto0["m_strFrom"] = "FROM cgc_1";
$proto0["m_strWhere"] = "(pos_2 is not null)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "pos_2 is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_2",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
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
	"m_strName" => "CodigoContable",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto6["m_sql"] = "CodigoContable";
$proto6["m_srcTableName"] = "cgc_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion_2",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto8["m_sql"] = "Descripcion_2";
$proto8["m_srcTableName"] = "cgc_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Imputable",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto10["m_sql"] = "Imputable";
$proto10["m_srcTableName"] = "cgc_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cgc_di",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto12["m_sql"] = "cgc_di";
$proto12["m_srcTableName"] = "cgc_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_1",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto14["m_sql"] = "pos_1";
$proto14["m_srcTableName"] = "cgc_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_2",
	"m_strTable" => "cgc_1",
	"m_srcTableName" => "cgc_1"
));

$proto16["m_sql"] = "pos_2";
$proto16["m_srcTableName"] = "cgc_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cgc_1";
$proto19["m_srcTableName"] = "cgc_1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cgc_di";
$proto19["m_columns"][] = "pos_1";
$proto19["m_columns"][] = "pos_2";
$proto19["m_columns"][] = "pos_4";
$proto19["m_columns"][] = "pos_6";
$proto19["m_columns"][] = "pos_9";
$proto19["m_columns"][] = "CodigoContable";
$proto19["m_columns"][] = "Descripcion_2";
$proto19["m_columns"][] = "Imputable";
$proto19["m_columns"][] = "Clasifica";
$proto19["m_columns"][] = "Manual";
$proto19["m_columns"][] = "Reciproca";
$proto19["m_columns"][] = "AplBanco";
$proto19["m_columns"][] = "Naturaleza";
$proto19["m_columns"][] = "Saldo";
$proto19["m_columns"][] = "Vigente";
$proto19["m_columns"][] = "CodigoEntidad";
$proto19["m_columns"][] = "EntidadContablePublica";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cgc_1";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cgc_1";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cgc_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cgc_1 = createSqlQuery_cgc_1();


	
								;

						

$tdatacgc_1[".sqlquery"] = $queryData_cgc_1;



$tdatacgc_1[".hasEvents"] = false;

?>