<?php
$tdataalconceptos = array();
$tdataalconceptos[".searchableFields"] = array();
$tdataalconceptos[".ShortName"] = "alconceptos";
$tdataalconceptos[".OwnerID"] = "";
$tdataalconceptos[".OriginalTable"] = "alconceptos";


$tdataalconceptos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalconceptos[".originalPagesByType"] = $tdataalconceptos[".pagesByType"];
$tdataalconceptos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalconceptos[".originalPages"] = $tdataalconceptos[".pages"];
$tdataalconceptos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalconceptos[".originalDefaultPages"] = $tdataalconceptos[".defaultPages"];

//	field labels
$fieldLabelsalconceptos = array();
$fieldToolTipsalconceptos = array();
$pageTitlesalconceptos = array();
$placeHoldersalconceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalconceptos["Spanish"] = array();
	$fieldToolTipsalconceptos["Spanish"] = array();
	$placeHoldersalconceptos["Spanish"] = array();
	$pageTitlesalconceptos["Spanish"] = array();
	$fieldLabelsalconceptos["Spanish"]["co_codconcepto"] = "Código concepto";
	$fieldToolTipsalconceptos["Spanish"]["co_codconcepto"] = "";
	$placeHoldersalconceptos["Spanish"]["co_codconcepto"] = "";
	$fieldLabelsalconceptos["Spanish"]["co_ctrl"] = "Estado";
	$fieldToolTipsalconceptos["Spanish"]["co_ctrl"] = "";
	$placeHoldersalconceptos["Spanish"]["co_ctrl"] = "";
	$fieldLabelsalconceptos["Spanish"]["co_nomconcepto"] = "Nombre de concepto";
	$fieldToolTipsalconceptos["Spanish"]["co_nomconcepto"] = "";
	$placeHoldersalconceptos["Spanish"]["co_nomconcepto"] = "";
	$fieldLabelsalconceptos["Spanish"]["co_otronomconcepto"] = "Descripción";
	$fieldToolTipsalconceptos["Spanish"]["co_otronomconcepto"] = "";
	$placeHoldersalconceptos["Spanish"]["co_otronomconcepto"] = "";
	$fieldLabelsalconceptos["Spanish"]["co_tipomovto"] = "Tipo de movimiento";
	$fieldToolTipsalconceptos["Spanish"]["co_tipomovto"] = "";
	$placeHoldersalconceptos["Spanish"]["co_tipomovto"] = "";
	$fieldLabelsalconceptos["Spanish"]["cod_concepto_id"] = "Ordinal";
	$fieldToolTipsalconceptos["Spanish"]["cod_concepto_id"] = "";
	$placeHoldersalconceptos["Spanish"]["cod_concepto_id"] = "";
	if (count($fieldToolTipsalconceptos["Spanish"]))
		$tdataalconceptos[".isUseToolTips"] = true;
}


	$tdataalconceptos[".NCSearch"] = true;



$tdataalconceptos[".shortTableName"] = "alconceptos";
$tdataalconceptos[".nSecOptions"] = 0;

$tdataalconceptos[".mainTableOwnerID"] = "";
$tdataalconceptos[".entityType"] = 0;
$tdataalconceptos[".connId"] = "dbrf_at_127_0_0_1";


$tdataalconceptos[".strOriginalTableName"] = "alconceptos";

	



$tdataalconceptos[".showAddInPopup"] = false;

$tdataalconceptos[".showEditInPopup"] = false;

$tdataalconceptos[".showViewInPopup"] = false;

$tdataalconceptos[".listAjax"] = false;
//	temporary
//$tdataalconceptos[".listAjax"] = false;

	$tdataalconceptos[".audit"] = false;

	$tdataalconceptos[".locking"] = false;


$pages = $tdataalconceptos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalconceptos[".edit"] = true;
	$tdataalconceptos[".afterEditAction"] = 1;
	$tdataalconceptos[".closePopupAfterEdit"] = 1;
	$tdataalconceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalconceptos[".add"] = true;
$tdataalconceptos[".afterAddAction"] = 1;
$tdataalconceptos[".closePopupAfterAdd"] = 1;
$tdataalconceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalconceptos[".list"] = true;
}



$tdataalconceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalconceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalconceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalconceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalconceptos[".printFriendly"] = true;
}



$tdataalconceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalconceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalconceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalconceptos[".isUseAjaxSuggest"] = true;



												

$tdataalconceptos[".ajaxCodeSnippetAdded"] = false;

$tdataalconceptos[".buttonsAdded"] = false;

$tdataalconceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalconceptos[".isUseTimeForSearch"] = false;


$tdataalconceptos[".badgeColor"] = "CD853F";


$tdataalconceptos[".allSearchFields"] = array();
$tdataalconceptos[".filterFields"] = array();
$tdataalconceptos[".requiredSearchFields"] = array();

$tdataalconceptos[".googleLikeFields"] = array();
$tdataalconceptos[".googleLikeFields"][] = "cod_concepto_id";
$tdataalconceptos[".googleLikeFields"][] = "co_codconcepto";
$tdataalconceptos[".googleLikeFields"][] = "co_nomconcepto";
$tdataalconceptos[".googleLikeFields"][] = "co_otronomconcepto";
$tdataalconceptos[".googleLikeFields"][] = "co_ctrl";
$tdataalconceptos[".googleLikeFields"][] = "co_tipomovto";



$tdataalconceptos[".tableType"] = "list";

$tdataalconceptos[".printerPageOrientation"] = 0;
$tdataalconceptos[".nPrinterPageScale"] = 100;

$tdataalconceptos[".nPrinterSplitRecords"] = 40;

$tdataalconceptos[".geocodingEnabled"] = false;










$tdataalconceptos[".pageSize"] = 20;

$tdataalconceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY co_codconcepto";
$tdataalconceptos[".strOrderBy"] = $tstrOrderBy;

$tdataalconceptos[".orderindexes"] = array();
			$tdataalconceptos[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "co_codconcepto");


$tdataalconceptos[".sqlHead"] = "SELECT cod_concepto_id,  co_codconcepto,  co_nomconcepto,  co_otronomconcepto,  co_ctrl,  co_tipomovto";
$tdataalconceptos[".sqlFrom"] = "FROM alconceptos";
$tdataalconceptos[".sqlWhereExpr"] = "";
$tdataalconceptos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "ENTRADAS",
	'nameType' => 'Text',
	'where' => "co_tipomovto = 'E'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "SALIDAS",
	'nameType' => 'Text',
	'where' => "co_tipomovto = 'S'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "DESMEJORAS",
	'name' => "TRASLADOS",
	'nameType' => 'Text',
	'where' => "co_tipomovto = 'T'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataalconceptos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalconceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalconceptos[".arrGroupsPerPage"] = $arrGPP;

$tdataalconceptos[".highlightSearchResults"] = true;

$tableKeysalconceptos = array();
$tableKeysalconceptos[] = "cod_concepto_id";
$tdataalconceptos[".Keys"] = $tableKeysalconceptos;


$tdataalconceptos[".hideMobileList"] = array();




//	cod_concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_concepto_id";
	$fdata["GoodName"] = "cod_concepto_id";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","cod_concepto_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod_concepto_id";

		$fdata["sourceSingle"] = "cod_concepto_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_concepto_id";

	
	
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


	$tdataalconceptos["cod_concepto_id"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "cod_concepto_id";
//	co_codconcepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "co_codconcepto";
	$fdata["GoodName"] = "co_codconcepto";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","co_codconcepto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "co_codconcepto";

		$fdata["sourceSingle"] = "co_codconcepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co_codconcepto";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Concepto \"%value%\" ya existe!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataalconceptos["co_codconcepto"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "co_codconcepto";
//	co_nomconcepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "co_nomconcepto";
	$fdata["GoodName"] = "co_nomconcepto";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","co_nomconcepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "co_nomconcepto";

		$fdata["sourceSingle"] = "co_nomconcepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co_nomconcepto";

	
	
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


	$tdataalconceptos["co_nomconcepto"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "co_nomconcepto";
//	co_otronomconcepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "co_otronomconcepto";
	$fdata["GoodName"] = "co_otronomconcepto";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","co_otronomconcepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "co_otronomconcepto";

		$fdata["sourceSingle"] = "co_otronomconcepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co_otronomconcepto";

	
	
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


	$tdataalconceptos["co_otronomconcepto"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "co_otronomconcepto";
//	co_ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "co_ctrl";
	$fdata["GoodName"] = "co_ctrl";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","co_ctrl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "co_ctrl";

		$fdata["sourceSingle"] = "co_ctrl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co_ctrl";

	
	
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
	$edata["LookupTable"] = "tparam_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_name_a";

	

	
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


	$tdataalconceptos["co_ctrl"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "co_ctrl";
//	co_tipomovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "co_tipomovto";
	$fdata["GoodName"] = "co_tipomovto";
	$fdata["ownerTable"] = "alconceptos";
	$fdata["Label"] = GetFieldLabel("alconceptos","co_tipomovto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "co_tipomovto";

		$fdata["sourceSingle"] = "co_tipomovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co_tipomovto";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_movimiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "tipo_movimiento";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nmovimiento";

	

	
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


	$tdataalconceptos["co_tipomovto"] = $fdata;
		$tdataalconceptos[".searchableFields"][] = "co_tipomovto";


$tables_data["alconceptos"]=&$tdataalconceptos;
$field_labels["alconceptos"] = &$fieldLabelsalconceptos;
$fieldToolTips["alconceptos"] = &$fieldToolTipsalconceptos;
$placeHolders["alconceptos"] = &$placeHoldersalconceptos;
$page_titles["alconceptos"] = &$pageTitlesalconceptos;


changeTextControlsToDate( "alconceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alconceptos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alconceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alconceptos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod_concepto_id,  co_codconcepto,  co_nomconcepto,  co_otronomconcepto,  co_ctrl,  co_tipomovto";
$proto0["m_strFrom"] = "FROM alconceptos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY co_codconcepto";
	
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
	"m_strName" => "cod_concepto_id",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto6["m_sql"] = "cod_concepto_id";
$proto6["m_srcTableName"] = "alconceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "co_codconcepto",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto8["m_sql"] = "co_codconcepto";
$proto8["m_srcTableName"] = "alconceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "co_nomconcepto",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto10["m_sql"] = "co_nomconcepto";
$proto10["m_srcTableName"] = "alconceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "co_otronomconcepto",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto12["m_sql"] = "co_otronomconcepto";
$proto12["m_srcTableName"] = "alconceptos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "co_ctrl",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto14["m_sql"] = "co_ctrl";
$proto14["m_srcTableName"] = "alconceptos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "co_tipomovto",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto16["m_sql"] = "co_tipomovto";
$proto16["m_srcTableName"] = "alconceptos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "alconceptos";
$proto19["m_srcTableName"] = "alconceptos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cod_concepto_id";
$proto19["m_columns"][] = "co_codconcepto";
$proto19["m_columns"][] = "co_nomconcepto";
$proto19["m_columns"][] = "co_otronomconcepto";
$proto19["m_columns"][] = "co_tipomovto";
$proto19["m_columns"][] = "co_activo";
$proto19["m_columns"][] = "co_ctrl";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "alconceptos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "alconceptos";
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
	"m_strName" => "co_codconcepto",
	"m_strTable" => "alconceptos",
	"m_srcTableName" => "alconceptos"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alconceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alconceptos = createSqlQuery_alconceptos();


	
								;

						

$tdataalconceptos[".sqlquery"] = $queryData_alconceptos;



$tdataalconceptos[".hasEvents"] = false;

?>