<?php
$tdataalasientos_gestion_e = array();
$tdataalasientos_gestion_e[".searchableFields"] = array();
$tdataalasientos_gestion_e[".ShortName"] = "alasientos_gestion_e";
$tdataalasientos_gestion_e[".OwnerID"] = "";
$tdataalasientos_gestion_e[".OriginalTable"] = "alasientos";


$tdataalasientos_gestion_e[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalasientos_gestion_e[".originalPagesByType"] = $tdataalasientos_gestion_e[".pagesByType"];
$tdataalasientos_gestion_e[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalasientos_gestion_e[".originalPages"] = $tdataalasientos_gestion_e[".pages"];
$tdataalasientos_gestion_e[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalasientos_gestion_e[".originalDefaultPages"] = $tdataalasientos_gestion_e[".defaultPages"];

//	field labels
$fieldLabelsalasientos_gestion_e = array();
$fieldToolTipsalasientos_gestion_e = array();
$pageTitlesalasientos_gestion_e = array();
$placeHoldersalasientos_gestion_e = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalasientos_gestion_e["Spanish"] = array();
	$fieldToolTipsalasientos_gestion_e["Spanish"] = array();
	$placeHoldersalasientos_gestion_e["Spanish"] = array();
	$pageTitlesalasientos_gestion_e["Spanish"] = array();
	$fieldLabelsalasientos_gestion_e["Spanish"]["as_estadoasien"] = "Estado";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["as_estadoasien"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["as_estadoasien"] = "";
	$fieldLabelsalasientos_gestion_e["Spanish"]["as_fechaasiento"] = "Fecha de asiento";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["as_fechaasiento"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["as_fechaasiento"] = "";
	$fieldLabelsalasientos_gestion_e["Spanish"]["as_id"] = "As Id";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["as_id"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["as_id"] = "";
	$fieldLabelsalasientos_gestion_e["Spanish"]["as_nroasiento"] = "Número de asiento";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["as_nroasiento"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["as_nroasiento"] = "";
	$fieldLabelsalasientos_gestion_e["Spanish"]["ascodalmacen"] = "Almacén";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["ascodalmacen"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsalasientos_gestion_e["Spanish"]["sys_user"] = "Creado por:";
	$fieldToolTipsalasientos_gestion_e["Spanish"]["sys_user"] = "";
	$placeHoldersalasientos_gestion_e["Spanish"]["sys_user"] = "";
	if (count($fieldToolTipsalasientos_gestion_e["Spanish"]))
		$tdataalasientos_gestion_e[".isUseToolTips"] = true;
}


	$tdataalasientos_gestion_e[".NCSearch"] = true;



$tdataalasientos_gestion_e[".shortTableName"] = "alasientos_gestion_e";
$tdataalasientos_gestion_e[".nSecOptions"] = 0;

$tdataalasientos_gestion_e[".mainTableOwnerID"] = "";
$tdataalasientos_gestion_e[".entityType"] = 1;
$tdataalasientos_gestion_e[".connId"] = "dbrf_at_127_0_0_1";


$tdataalasientos_gestion_e[".strOriginalTableName"] = "alasientos";

	



$tdataalasientos_gestion_e[".showAddInPopup"] = false;

$tdataalasientos_gestion_e[".showEditInPopup"] = false;

$tdataalasientos_gestion_e[".showViewInPopup"] = false;

$tdataalasientos_gestion_e[".listAjax"] = false;
//	temporary
//$tdataalasientos_gestion_e[".listAjax"] = false;

	$tdataalasientos_gestion_e[".audit"] = false;

	$tdataalasientos_gestion_e[".locking"] = false;


$pages = $tdataalasientos_gestion_e[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalasientos_gestion_e[".edit"] = true;
	$tdataalasientos_gestion_e[".afterEditAction"] = 1;
	$tdataalasientos_gestion_e[".closePopupAfterEdit"] = 1;
	$tdataalasientos_gestion_e[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalasientos_gestion_e[".add"] = true;
$tdataalasientos_gestion_e[".afterAddAction"] = 1;
$tdataalasientos_gestion_e[".closePopupAfterAdd"] = 1;
$tdataalasientos_gestion_e[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalasientos_gestion_e[".list"] = true;
}



$tdataalasientos_gestion_e[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalasientos_gestion_e[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalasientos_gestion_e[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalasientos_gestion_e[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalasientos_gestion_e[".printFriendly"] = true;
}



$tdataalasientos_gestion_e[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalasientos_gestion_e[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalasientos_gestion_e[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalasientos_gestion_e[".isUseAjaxSuggest"] = true;



												

$tdataalasientos_gestion_e[".ajaxCodeSnippetAdded"] = false;

$tdataalasientos_gestion_e[".buttonsAdded"] = false;

$tdataalasientos_gestion_e[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalasientos_gestion_e[".isUseTimeForSearch"] = false;


$tdataalasientos_gestion_e[".badgeColor"] = "CFAE83";


$tdataalasientos_gestion_e[".allSearchFields"] = array();
$tdataalasientos_gestion_e[".filterFields"] = array();
$tdataalasientos_gestion_e[".requiredSearchFields"] = array();

$tdataalasientos_gestion_e[".googleLikeFields"] = array();
$tdataalasientos_gestion_e[".googleLikeFields"][] = "as_id";
$tdataalasientos_gestion_e[".googleLikeFields"][] = "as_estadoasien";
$tdataalasientos_gestion_e[".googleLikeFields"][] = "as_fechaasiento";
$tdataalasientos_gestion_e[".googleLikeFields"][] = "as_nroasiento";
$tdataalasientos_gestion_e[".googleLikeFields"][] = "ascodalmacen";
$tdataalasientos_gestion_e[".googleLikeFields"][] = "sys_user";



$tdataalasientos_gestion_e[".tableType"] = "list";

$tdataalasientos_gestion_e[".printerPageOrientation"] = 0;
$tdataalasientos_gestion_e[".nPrinterPageScale"] = 100;

$tdataalasientos_gestion_e[".nPrinterSplitRecords"] = 40;

$tdataalasientos_gestion_e[".geocodingEnabled"] = false;










$tdataalasientos_gestion_e[".pageSize"] = 20;

$tdataalasientos_gestion_e[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY as_id DESC";
$tdataalasientos_gestion_e[".strOrderBy"] = $tstrOrderBy;

$tdataalasientos_gestion_e[".orderindexes"] = array();
			$tdataalasientos_gestion_e[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "as_id");


$tdataalasientos_gestion_e[".sqlHead"] = "SELECT as_id,  as_estadoasien,  as_fechaasiento,  as_nroasiento,  ascodalmacen,  sys_user";
$tdataalasientos_gestion_e[".sqlFrom"] = "FROM alasientos";
$tdataalasientos_gestion_e[".sqlWhereExpr"] = "";
$tdataalasientos_gestion_e[".sqlTail"] = "";

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
$tdataalasientos_gestion_e[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalasientos_gestion_e[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalasientos_gestion_e[".arrGroupsPerPage"] = $arrGPP;

$tdataalasientos_gestion_e[".highlightSearchResults"] = true;

$tableKeysalasientos_gestion_e = array();
$tableKeysalasientos_gestion_e[] = "as_id";
$tdataalasientos_gestion_e[".Keys"] = $tableKeysalasientos_gestion_e;


$tdataalasientos_gestion_e[".hideMobileList"] = array();




//	as_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "as_id";
	$fdata["GoodName"] = "as_id";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","as_id");
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


	$tdataalasientos_gestion_e["as_id"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "as_id";
//	as_estadoasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_estadoasien";
	$fdata["GoodName"] = "as_estadoasien";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","as_estadoasien");
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


	$tdataalasientos_gestion_e["as_estadoasien"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "as_estadoasien";
//	as_fechaasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "as_fechaasiento";
	$fdata["GoodName"] = "as_fechaasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","as_fechaasiento");
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


	$tdataalasientos_gestion_e["as_fechaasiento"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "as_fechaasiento";
//	as_nroasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "as_nroasiento";
	$fdata["GoodName"] = "as_nroasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","as_nroasiento");
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


	$tdataalasientos_gestion_e["as_nroasiento"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "as_nroasiento";
//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","ascodalmacen");
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


	$tdataalasientos_gestion_e["ascodalmacen"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "ascodalmacen";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos_gestion_e","sys_user");
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


	$tdataalasientos_gestion_e["sys_user"] = $fdata;
		$tdataalasientos_gestion_e[".searchableFields"][] = "sys_user";


$tables_data["alasientos_gestion_e"]=&$tdataalasientos_gestion_e;
$field_labels["alasientos_gestion_e"] = &$fieldLabelsalasientos_gestion_e;
$fieldToolTips["alasientos_gestion_e"] = &$fieldToolTipsalasientos_gestion_e;
$placeHolders["alasientos_gestion_e"] = &$placeHoldersalasientos_gestion_e;
$page_titles["alasientos_gestion_e"] = &$pageTitlesalasientos_gestion_e;


changeTextControlsToDate( "alasientos_gestion_e" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alasientos_gestion_e"] = array();
//	gedocumentos_egresos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="gedocumentos_egresos";
		$detailsParam["dOriginalTable"] = "gedocumentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gedocumentos_egresos";
	$detailsParam["dCaptionTable"] = GetTableCaption("gedocumentos_egresos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alasientos_gestion_e"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"][]="as_nroasiento";

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"][]="ascodalmacen";

				$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"][]="as_nroasiento_fk";

		
	$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"][]="docodregion";
//	gedocumentos_egresos_consumo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="gedocumentos_egresos_consumo";
		$detailsParam["dOriginalTable"] = "gedocumentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gedocumentos_egresos_consumo";
	$detailsParam["dCaptionTable"] = GetTableCaption("gedocumentos_egresos_consumo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["alasientos_gestion_e"][$dIndex] = $detailsParam;

	
		$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"][]="as_nroasiento";

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["masterKeys"][]="ascodalmacen";

				$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"][]="as_nroasiento_fk";

		
	$detailsTablesData["alasientos_gestion_e"][$dIndex]["detailKeys"][]="docodregion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alasientos_gestion_e"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alasientos_gestion_e()
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
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto6["m_sql"] = "as_id";
$proto6["m_srcTableName"] = "alasientos_gestion_e";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_estadoasien",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto8["m_sql"] = "as_estadoasien";
$proto8["m_srcTableName"] = "alasientos_gestion_e";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "as_fechaasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto10["m_sql"] = "as_fechaasiento";
$proto10["m_srcTableName"] = "alasientos_gestion_e";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto12["m_sql"] = "as_nroasiento";
$proto12["m_srcTableName"] = "alasientos_gestion_e";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto14["m_sql"] = "ascodalmacen";
$proto14["m_srcTableName"] = "alasientos_gestion_e";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "alasientos_gestion_e";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "alasientos";
$proto19["m_srcTableName"] = "alasientos_gestion_e";
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
$proto18["m_srcTableName"] = "alasientos_gestion_e";
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
	"m_srcTableName" => "alasientos_gestion_e"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alasientos_gestion_e";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alasientos_gestion_e = createSqlQuery_alasientos_gestion_e();


	
								;

						

$tdataalasientos_gestion_e[".sqlquery"] = $queryData_alasientos_gestion_e;



include_once(getabspath("include/alasientos_gestion_e_events.php"));
$tdataalasientos_gestion_e[".hasEvents"] = true;

?>