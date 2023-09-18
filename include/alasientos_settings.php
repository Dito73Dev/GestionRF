<?php
$tdataalasientos = array();
$tdataalasientos[".searchableFields"] = array();
$tdataalasientos[".ShortName"] = "alasientos";
$tdataalasientos[".OwnerID"] = "";
$tdataalasientos[".OriginalTable"] = "alasientos";


$tdataalasientos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalasientos[".originalPagesByType"] = $tdataalasientos[".pagesByType"];
$tdataalasientos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalasientos[".originalPages"] = $tdataalasientos[".pages"];
$tdataalasientos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalasientos[".originalDefaultPages"] = $tdataalasientos[".defaultPages"];

//	field labels
$fieldLabelsalasientos = array();
$fieldToolTipsalasientos = array();
$pageTitlesalasientos = array();
$placeHoldersalasientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalasientos["Spanish"] = array();
	$fieldToolTipsalasientos["Spanish"] = array();
	$placeHoldersalasientos["Spanish"] = array();
	$pageTitlesalasientos["Spanish"] = array();
	$fieldLabelsalasientos["Spanish"]["as_estadoasien"] = "Estado";
	$fieldToolTipsalasientos["Spanish"]["as_estadoasien"] = "";
	$placeHoldersalasientos["Spanish"]["as_estadoasien"] = "";
	$fieldLabelsalasientos["Spanish"]["as_fechaasiento"] = "Fecha de asiento";
	$fieldToolTipsalasientos["Spanish"]["as_fechaasiento"] = "";
	$placeHoldersalasientos["Spanish"]["as_fechaasiento"] = "";
	$fieldLabelsalasientos["Spanish"]["as_id"] = "As Id";
	$fieldToolTipsalasientos["Spanish"]["as_id"] = "";
	$placeHoldersalasientos["Spanish"]["as_id"] = "";
	$fieldLabelsalasientos["Spanish"]["as_nroasiento"] = "Número de asiento";
	$fieldToolTipsalasientos["Spanish"]["as_nroasiento"] = "";
	$placeHoldersalasientos["Spanish"]["as_nroasiento"] = "";
	$fieldLabelsalasientos["Spanish"]["ascodalmacen"] = "Almacén";
	$fieldToolTipsalasientos["Spanish"]["ascodalmacen"] = "";
	$placeHoldersalasientos["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsalasientos["Spanish"]["sys_user"] = "Creado por:";
	$fieldToolTipsalasientos["Spanish"]["sys_user"] = "";
	$placeHoldersalasientos["Spanish"]["sys_user"] = "";
	$pageTitlesalasientos["Spanish"]["add"] = "Nuevo asiento";
	$pageTitlesalasientos["Spanish"]["edit"] = "Editar [{%as_id}]";
	if (count($fieldToolTipsalasientos["Spanish"]))
		$tdataalasientos[".isUseToolTips"] = true;
}


	$tdataalasientos[".NCSearch"] = true;



$tdataalasientos[".shortTableName"] = "alasientos";
$tdataalasientos[".nSecOptions"] = 0;

$tdataalasientos[".mainTableOwnerID"] = "";
$tdataalasientos[".entityType"] = 0;
$tdataalasientos[".connId"] = "dbrf_at_127_0_0_1";


$tdataalasientos[".strOriginalTableName"] = "alasientos";

	



$tdataalasientos[".showAddInPopup"] = false;

$tdataalasientos[".showEditInPopup"] = false;

$tdataalasientos[".showViewInPopup"] = false;

$tdataalasientos[".listAjax"] = false;
//	temporary
//$tdataalasientos[".listAjax"] = false;

	$tdataalasientos[".audit"] = false;

	$tdataalasientos[".locking"] = false;


$pages = $tdataalasientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalasientos[".edit"] = true;
	$tdataalasientos[".afterEditAction"] = 1;
	$tdataalasientos[".closePopupAfterEdit"] = 1;
	$tdataalasientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalasientos[".add"] = true;
$tdataalasientos[".afterAddAction"] = 1;
$tdataalasientos[".closePopupAfterAdd"] = 1;
$tdataalasientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalasientos[".list"] = true;
}



$tdataalasientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalasientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalasientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalasientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalasientos[".printFriendly"] = true;
}



$tdataalasientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalasientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalasientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalasientos[".isUseAjaxSuggest"] = true;



												

$tdataalasientos[".ajaxCodeSnippetAdded"] = false;

$tdataalasientos[".buttonsAdded"] = false;

$tdataalasientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalasientos[".isUseTimeForSearch"] = false;


$tdataalasientos[".badgeColor"] = "EDCA00";


$tdataalasientos[".allSearchFields"] = array();
$tdataalasientos[".filterFields"] = array();
$tdataalasientos[".requiredSearchFields"] = array();

$tdataalasientos[".googleLikeFields"] = array();
$tdataalasientos[".googleLikeFields"][] = "as_id";
$tdataalasientos[".googleLikeFields"][] = "as_estadoasien";
$tdataalasientos[".googleLikeFields"][] = "as_fechaasiento";
$tdataalasientos[".googleLikeFields"][] = "as_nroasiento";
$tdataalasientos[".googleLikeFields"][] = "ascodalmacen";
$tdataalasientos[".googleLikeFields"][] = "sys_user";



$tdataalasientos[".tableType"] = "list";

$tdataalasientos[".printerPageOrientation"] = 0;
$tdataalasientos[".nPrinterPageScale"] = 100;

$tdataalasientos[".nPrinterSplitRecords"] = 40;

$tdataalasientos[".geocodingEnabled"] = false;










$tdataalasientos[".pageSize"] = 20;

$tdataalasientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalasientos[".strOrderBy"] = $tstrOrderBy;

$tdataalasientos[".orderindexes"] = array();


$tdataalasientos[".sqlHead"] = "SELECT as_id,  as_estadoasien,  as_fechaasiento,  as_nroasiento,  ascodalmacen,  sys_user";
$tdataalasientos[".sqlFrom"] = "FROM alasientos";
$tdataalasientos[".sqlWhereExpr"] = "";
$tdataalasientos[".sqlTail"] = "";

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
$tdataalasientos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalasientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalasientos[".arrGroupsPerPage"] = $arrGPP;

$tdataalasientos[".highlightSearchResults"] = true;

$tableKeysalasientos = array();
$tableKeysalasientos[] = "as_id";
$tdataalasientos[".Keys"] = $tableKeysalasientos;


$tdataalasientos[".hideMobileList"] = array();




//	as_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "as_id";
	$fdata["GoodName"] = "as_id";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","as_id");
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


	$tdataalasientos["as_id"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "as_id";
//	as_estadoasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_estadoasien";
	$fdata["GoodName"] = "as_estadoasien";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","as_estadoasien");
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


	$tdataalasientos["as_estadoasien"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "as_estadoasien";
//	as_fechaasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "as_fechaasiento";
	$fdata["GoodName"] = "as_fechaasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","as_fechaasiento");
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


	$tdataalasientos["as_fechaasiento"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "as_fechaasiento";
//	as_nroasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "as_nroasiento";
	$fdata["GoodName"] = "as_nroasiento";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","as_nroasiento");
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


	$tdataalasientos["as_nroasiento"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "as_nroasiento";
//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","ascodalmacen");
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


	$tdataalasientos["ascodalmacen"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "ascodalmacen";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "alasientos";
	$fdata["Label"] = GetFieldLabel("alasientos","sys_user");
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


	$tdataalasientos["sys_user"] = $fdata;
		$tdataalasientos[".searchableFields"][] = "sys_user";


$tables_data["alasientos"]=&$tdataalasientos;
$field_labels["alasientos"] = &$fieldLabelsalasientos;
$fieldToolTips["alasientos"] = &$fieldToolTipsalasientos;
$placeHolders["alasientos"] = &$placeHoldersalasientos;
$page_titles["alasientos"] = &$pageTitlesalasientos;


changeTextControlsToDate( "alasientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alasientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alasientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alasientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "as_id,  as_estadoasien,  as_fechaasiento,  as_nroasiento,  ascodalmacen,  sys_user";
$proto0["m_strFrom"] = "FROM alasientos";
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
	"m_strName" => "as_id",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto6["m_sql"] = "as_id";
$proto6["m_srcTableName"] = "alasientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_estadoasien",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto8["m_sql"] = "as_estadoasien";
$proto8["m_srcTableName"] = "alasientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "as_fechaasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto10["m_sql"] = "as_fechaasiento";
$proto10["m_srcTableName"] = "alasientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto12["m_sql"] = "as_nroasiento";
$proto12["m_srcTableName"] = "alasientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto14["m_sql"] = "ascodalmacen";
$proto14["m_srcTableName"] = "alasientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "alasientos",
	"m_srcTableName" => "alasientos"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "alasientos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "alasientos";
$proto19["m_srcTableName"] = "alasientos";
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
$proto18["m_srcTableName"] = "alasientos";
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
$proto0["m_srcTableName"]="alasientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alasientos = createSqlQuery_alasientos();


	
								;

						

$tdataalasientos[".sqlquery"] = $queryData_alasientos;



include_once(getabspath("include/alasientos_events.php"));
$tdataalasientos[".hasEvents"] = true;

?>