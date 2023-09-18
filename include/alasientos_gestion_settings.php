<?php
$tdataalasientos_gestion = array();
$tdataalasientos_gestion[".searchableFields"] = array();
$tdataalasientos_gestion[".ShortName"] = "alasientos_gestion";
$tdataalasientos_gestion[".OwnerID"] = "";
$tdataalasientos_gestion[".OriginalTable"] = "alasientos";


$tdataalasientos_gestion[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalasientos_gestion[".originalPagesByType"] = $tdataalasientos_gestion[".pagesByType"];
$tdataalasientos_gestion[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalasientos_gestion[".originalPages"] = $tdataalasientos_gestion[".pages"];
$tdataalasientos_gestion[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalasientos_gestion[".originalDefaultPages"] = $tdataalasientos_gestion[".defaultPages"];

//	field labels
$fieldLabelsalasientos_gestion = array();
$fieldToolTipsalasientos_gestion = array();
$pageTitlesalasientos_gestion = array();
$placeHoldersalasientos_gestion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalasientos_gestion["Spanish"] = array();
	$fieldToolTipsalasientos_gestion["Spanish"] = array();
	$placeHoldersalasientos_gestion["Spanish"] = array();
	$pageTitlesalasientos_gestion["Spanish"] = array();
	$fieldLabelsalasientos_gestion["Spanish"]["as_estadoasien"] = "Estado";
	$fieldToolTipsalasientos_gestion["Spanish"]["as_estadoasien"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["as_estadoasien"] = "";
	$fieldLabelsalasientos_gestion["Spanish"]["as_fechaasiento"] = "Fecha de asiento";
	$fieldToolTipsalasientos_gestion["Spanish"]["as_fechaasiento"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["as_fechaasiento"] = "";
	$fieldLabelsalasientos_gestion["Spanish"]["as_id"] = "As Id";
	$fieldToolTipsalasientos_gestion["Spanish"]["as_id"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["as_id"] = "";
	$fieldLabelsalasientos_gestion["Spanish"]["as_nroasiento"] = "Número de asiento";
	$fieldToolTipsalasientos_gestion["Spanish"]["as_nroasiento"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["as_nroasiento"] = "";
	$fieldLabelsalasientos_gestion["Spanish"]["ascodalmacen"] = "Almacén";
	$fieldToolTipsalasientos_gestion["Spanish"]["ascodalmacen"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsalasientos_gestion["Spanish"]["sys_user"] = "Creado por:";
	$fieldToolTipsalasientos_gestion["Spanish"]["sys_user"] = "";
	$placeHoldersalasientos_gestion["Spanish"]["sys_user"] = "";
	if (count($fieldToolTipsalasientos_gestion["Spanish"]))
		$tdataalasientos_gestion[".isUseToolTips"] = true;
}


	$tdataalasientos_gestion[".NCSearch"] = true;



$tdataalasientos_gestion[".shortTableName"] = "alasientos_gestion";
$tdataalasientos_gestion[".nSecOptions"] = 0;

$tdataalasientos_gestion[".mainTableOwnerID"] = "";
$tdataalasientos_gestion[".entityType"] = 1;
$tdataalasientos_gestion[".connId"] = "dbrf_at_127_0_0_1";


$tdataalasientos_gestion[".strOriginalTableName"] = "alasientos";

	



$tdataalasientos_gestion[".showAddInPopup"] = false;

$tdataalasientos_gestion[".showEditInPopup"] = false;

$tdataalasientos_gestion[".showViewInPopup"] = false;

$tdataalasientos_gestion[".listAjax"] = false;
//	temporary
//$tdataalasientos_gestion[".listAjax"] = false;

	$tdataalasientos_gestion[".audit"] = false;

	$tdataalasientos_gestion[".locking"] = false;


$pages = $tdataalasientos_gestion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalasientos_gestion[".edit"] = true;
	$tdataalasientos_gestion[".afterEditAction"] = 1;
	$tdataalasientos_gestion[".closePopupAfterEdit"] = 1;
	$tdataalasientos_gestion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalasientos_gestion[".add"] = true;
$tdataalasientos_gestion[".afterAddAction"] = 1;
$tdataalasientos_gestion[".closePopupAfterAdd"] = 1;
$tdataalasientos_gestion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalasientos_gestion[".list"] = true;
}



$tdataalasientos_gestion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalasientos_gestion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalasientos_gestion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalasientos_gestion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalasientos_gestion[".printFriendly"] = true;
}



$tdataalasientos_gestion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalasientos_gestion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalasientos_gestion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalasientos_gestion[".isUseAjaxSuggest"] = true;



												

$tdataalasientos_gestion[".ajaxCodeSnippetAdded"] = false;

$tdataalasientos_gestion[".buttonsAdded"] = false;

$tdataalasientos_gestion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalasientos_gestion[".isUseTimeForSearch"] = false;


$tdataalasientos_gestion[".badgeColor"] = "008B8B";


$tdataalasientos_gestion[".allSearchFields"] = array();
$tdataalasientos_gestion[".filterFields"] = array();
$tdataalasientos_gestion[".requiredSearchFields"] = array();

$tdataalasientos_gestion[".googleLikeFields"] = array();
$tdataalasientos_gestion[".googleLikeFields"][] = "as_id";
$tdataalasientos_gestion[".googleLikeFields"][] = "as_estadoasien";
$tdataalasientos_gestion[".googleLikeFields"][] = "as_fechaasiento";
$tdataalasientos_gestion[".googleLikeFields"][] = "as_nroasiento";
$tdataalasientos_gestion[".googleLikeFields"][] = "ascodalmacen";
$tdataalasientos_gestion[".googleLikeFields"][] = "sys_user";



$tdataalasientos_gestion[".tableType"] = "list";

$tdataalasientos_gestion[".printerPageOrientation"] = 0;
$tdataalasientos_gestion[".nPrinterPageScale"] = 100;

$tdataalasientos_gestion[".nPrinterSplitRecords"] = 40;

$tdataalasientos_gestion[".geocodingEnabled"] = false;










$tdataalasientos_gestion[".pageSize"] = 20;

$tdataalasientos_gestion[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY as_id DESC";
$tdataalasientos_gestion[".strOrderBy"] = $tstrOrderBy;

$tdataalasientos_gestion[".orderindexes"] = array();
			$tdataalasientos_gestion[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "as_id");


$tdataalasientos_gestion[".sqlHead"] = "SELECT as_id,  as_estadoasien,  as_fechaasiento,  as_nroasiento,  ascodalmacen,  sys_user";
$tdataalasientos_gestion[".sqlFrom"] = "FROM alasientos";
$tdataalasientos_gestion[".sqlWhereExpr"] = "";
$tdataalasientos_gestion[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "ABIERTOS",
	'nameType' => 'Text',
	'where' => "as_estadoasien = 'A'",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "CERRADOS",
	'nameType' => 'Text',
	'where' => "as_estadoasien = 'C'",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$tdataalasientos_gestion[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalasientos_gestion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalasientos_gestion[".arrGroupsPerPage"] = $arrGPP;

$tdataalasientos_gestion[".highlightSearchResults"] = true;

$tableKeysalasientos_gestion = array();
$tableKeysalasientos_gestion[] = "as_id";
$tdataalasientos_gestion[".Keys"] = $tableKeysalasientos_gestion;


$tdataalasientos_gestion[".hideMobileList"] = array();




//	as_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "as_id";
	$fdata["GoodName"] = "as_id";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","as_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "as_id";

		$fdata["sourceSingle"] = "as_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_id";

	
	
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


	$tdataalasientos_gestion["as_id"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "as_id";
//	as_estadoasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_estadoasien";
	$fdata["GoodName"] = "as_estadoasien";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","as_estadoasien");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "as_estadoasien";

		$fdata["sourceSingle"] = "as_estadoasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_estadoasien";

	
	
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
	$edata["LookupTable"] = "tparam_estadoasientos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estasi_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "estasi_name";

	

	
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


	$tdataalasientos_gestion["as_estadoasien"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "as_estadoasien";
//	as_fechaasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "as_fechaasiento";
	$fdata["GoodName"] = "as_fechaasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","as_fechaasiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "as_fechaasiento";

		$fdata["sourceSingle"] = "as_fechaasiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_fechaasiento";

	
	
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
	$edata["InitialYearFactor"] = 10;
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


	$tdataalasientos_gestion["as_fechaasiento"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "as_fechaasiento";
//	as_nroasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "as_nroasiento";
	$fdata["GoodName"] = "as_nroasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","as_nroasiento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "as_nroasiento";

		$fdata["sourceSingle"] = "as_nroasiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_nroasiento";

	
	
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


	$tdataalasientos_gestion["as_nroasiento"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "as_nroasiento";
//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","ascodalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ascodalmacen";

		$fdata["sourceSingle"] = "ascodalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen";

	
	
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
	$edata["DisplayField"] = "ascodalmacen";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "as_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalasientos_gestion["ascodalmacen"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "ascodalmacen";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion","sys_user");
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


	$tdataalasientos_gestion["sys_user"] = $fdata;
		$tdataalasientos_gestion[".searchableFields"][] = "sys_user";


$tables_data["alasientos_gestion"]=&$tdataalasientos_gestion;
$field_labels["alasientos_gestion"] = &$fieldLabelsalasientos_gestion;
$fieldToolTips["alasientos_gestion"] = &$fieldToolTipsalasientos_gestion;
$placeHolders["alasientos_gestion"] = &$placeHoldersalasientos_gestion;
$page_titles["alasientos_gestion"] = &$pageTitlesalasientos_gestion;


changeTextControlsToDate( "alasientos_gestion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alasientos_gestion"] = array();
//	gedocumentos_ingresos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="gedocumentos_ingresos";
		$detailsParam["dOriginalTable"] = "gedocumentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gedocumentos_ingresos";
	$detailsParam["dCaptionTable"] = GetTableCaption("gedocumentos_ingresos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alasientos_gestion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"][]="as_nroasiento";

	$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"][]="ascodalmacen";

				$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"][]="as_nroasiento_fk";

		
	$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"][]="docodregion";
//	gedocumentos_ingresos_consumo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="gedocumentos_ingresos_consumo";
		$detailsParam["dOriginalTable"] = "gedocumentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gedocumentos_ingresos_consumo";
	$detailsParam["dCaptionTable"] = GetTableCaption("gedocumentos_ingresos_consumo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alasientos_gestion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"][]="as_nroasiento";

	$detailsTablesData["alasientos_gestion"][$dIndex]["masterKeys"][]="ascodalmacen";

				$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"][]="as_nroasiento_fk";

		
	$detailsTablesData["alasientos_gestion"][$dIndex]["detailKeys"][]="docodregion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alasientos_gestion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alasientos_gestion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "as_id,  as_estadoasien,  as_fechaasiento,  as_nroasiento,  ascodalmacen,  sys_user";
$proto0["m_strFrom"] = "FROM alasientos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY as_id DESC";
	
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
	"m_strName" => "as_id",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto6["m_sql"] = "as_id";
$proto6["m_srcTableName"] = "alasientos_gestion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_estadoasien",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto8["m_sql"] = "as_estadoasien";
$proto8["m_srcTableName"] = "alasientos_gestion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "as_fechaasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto10["m_sql"] = "as_fechaasiento";
$proto10["m_srcTableName"] = "alasientos_gestion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto12["m_sql"] = "as_nroasiento";
$proto12["m_srcTableName"] = "alasientos_gestion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto14["m_sql"] = "ascodalmacen";
$proto14["m_srcTableName"] = "alasientos_gestion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "alasientos_gestion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "alasientos";
$proto19["m_srcTableName"] = "alasientos_gestion";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "as_id";
$proto19["m_columns"][] = "ascodalmacen";
$proto19["m_columns"][] = "as_nroasiento";
$proto19["m_columns"][] = "as_fechaasiento";
$proto19["m_columns"][] = "as_estadoasien";
$proto19["m_columns"][] = "sys_user";
$proto19["m_columns"][] = "sys_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "alasientos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "alasientos_gestion";
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
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "as_id",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alasientos_gestion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alasientos_gestion = createSqlQuery_alasientos_gestion();


	
								;

						

$tdataalasientos_gestion[".sqlquery"] = $queryData_alasientos_gestion;



include_once(getabspath("include/alasientos_gestion_events.php"));
$tdataalasientos_gestion[".hasEvents"] = true;

?>