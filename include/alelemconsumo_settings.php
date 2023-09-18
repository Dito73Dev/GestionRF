<?php
$tdataalelemconsumo = array();
$tdataalelemconsumo[".searchableFields"] = array();
$tdataalelemconsumo[".ShortName"] = "alelemconsumo";
$tdataalelemconsumo[".OwnerID"] = "";
$tdataalelemconsumo[".OriginalTable"] = "alelemconsumo";


$tdataalelemconsumo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalelemconsumo[".originalPagesByType"] = $tdataalelemconsumo[".pagesByType"];
$tdataalelemconsumo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalelemconsumo[".originalPages"] = $tdataalelemconsumo[".pages"];
$tdataalelemconsumo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalelemconsumo[".originalDefaultPages"] = $tdataalelemconsumo[".defaultPages"];

//	field labels
$fieldLabelsalelemconsumo = array();
$fieldToolTipsalelemconsumo = array();
$pageTitlesalelemconsumo = array();
$placeHoldersalelemconsumo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalelemconsumo["Spanish"] = array();
	$fieldToolTipsalelemconsumo["Spanish"] = array();
	$placeHoldersalelemconsumo["Spanish"] = array();
	$pageTitlesalelemconsumo["Spanish"] = array();
	$fieldLabelsalelemconsumo["Spanish"]["alelemenconsumo_id"] = "Alelemenconsumo Id";
	$fieldToolTipsalelemconsumo["Spanish"]["alelemenconsumo_id"] = "";
	$placeHoldersalelemconsumo["Spanish"]["alelemenconsumo_id"] = "";
	$fieldLabelsalelemconsumo["Spanish"]["ec_codelem"] = "Código elemento";
	$fieldToolTipsalelemconsumo["Spanish"]["ec_codelem"] = "";
	$placeHoldersalelemconsumo["Spanish"]["ec_codelem"] = "";
	$fieldLabelsalelemconsumo["Spanish"]["ec_nomelemento"] = "Nombre elemento";
	$fieldToolTipsalelemconsumo["Spanish"]["ec_nomelemento"] = "";
	$placeHoldersalelemconsumo["Spanish"]["ec_nomelemento"] = "";
	$fieldLabelsalelemconsumo["Spanish"]["eccuenta"] = "Cuenta";
	$fieldToolTipsalelemconsumo["Spanish"]["eccuenta"] = "";
	$placeHoldersalelemconsumo["Spanish"]["eccuenta"] = "";
	$fieldLabelsalelemconsumo["Spanish"]["ecunidad"] = "Unidad medida";
	$fieldToolTipsalelemconsumo["Spanish"]["ecunidad"] = "";
	$placeHoldersalelemconsumo["Spanish"]["ecunidad"] = "";
	if (count($fieldToolTipsalelemconsumo["Spanish"]))
		$tdataalelemconsumo[".isUseToolTips"] = true;
}


	$tdataalelemconsumo[".NCSearch"] = true;



$tdataalelemconsumo[".shortTableName"] = "alelemconsumo";
$tdataalelemconsumo[".nSecOptions"] = 0;

$tdataalelemconsumo[".mainTableOwnerID"] = "";
$tdataalelemconsumo[".entityType"] = 0;
$tdataalelemconsumo[".connId"] = "dbrf_at_127_0_0_1";


$tdataalelemconsumo[".strOriginalTableName"] = "alelemconsumo";

	



$tdataalelemconsumo[".showAddInPopup"] = false;

$tdataalelemconsumo[".showEditInPopup"] = false;

$tdataalelemconsumo[".showViewInPopup"] = false;

$tdataalelemconsumo[".listAjax"] = false;
//	temporary
//$tdataalelemconsumo[".listAjax"] = false;

	$tdataalelemconsumo[".audit"] = false;

	$tdataalelemconsumo[".locking"] = false;


$pages = $tdataalelemconsumo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalelemconsumo[".edit"] = true;
	$tdataalelemconsumo[".afterEditAction"] = 1;
	$tdataalelemconsumo[".closePopupAfterEdit"] = 1;
	$tdataalelemconsumo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalelemconsumo[".add"] = true;
$tdataalelemconsumo[".afterAddAction"] = 1;
$tdataalelemconsumo[".closePopupAfterAdd"] = 1;
$tdataalelemconsumo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalelemconsumo[".list"] = true;
}



$tdataalelemconsumo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalelemconsumo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalelemconsumo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalelemconsumo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalelemconsumo[".printFriendly"] = true;
}



$tdataalelemconsumo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalelemconsumo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalelemconsumo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalelemconsumo[".isUseAjaxSuggest"] = true;



																								

$tdataalelemconsumo[".ajaxCodeSnippetAdded"] = false;

$tdataalelemconsumo[".buttonsAdded"] = false;

$tdataalelemconsumo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalelemconsumo[".isUseTimeForSearch"] = false;


$tdataalelemconsumo[".badgeColor"] = "0000ff";


$tdataalelemconsumo[".allSearchFields"] = array();
$tdataalelemconsumo[".filterFields"] = array();
$tdataalelemconsumo[".requiredSearchFields"] = array();

$tdataalelemconsumo[".googleLikeFields"] = array();
$tdataalelemconsumo[".googleLikeFields"][] = "alelemenconsumo_id";
$tdataalelemconsumo[".googleLikeFields"][] = "ec_codelem";
$tdataalelemconsumo[".googleLikeFields"][] = "ec_nomelemento";
$tdataalelemconsumo[".googleLikeFields"][] = "eccuenta";
$tdataalelemconsumo[".googleLikeFields"][] = "ecunidad";



$tdataalelemconsumo[".tableType"] = "list";

$tdataalelemconsumo[".printerPageOrientation"] = 0;
$tdataalelemconsumo[".nPrinterPageScale"] = 100;

$tdataalelemconsumo[".nPrinterSplitRecords"] = 40;

$tdataalelemconsumo[".geocodingEnabled"] = false;










$tdataalelemconsumo[".pageSize"] = 20;

$tdataalelemconsumo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalelemconsumo[".strOrderBy"] = $tstrOrderBy;

$tdataalelemconsumo[".orderindexes"] = array();


$tdataalelemconsumo[".sqlHead"] = "SELECT alelemenconsumo_id,  ec_codelem,  ec_nomelemento,  eccuenta,  ecunidad";
$tdataalelemconsumo[".sqlFrom"] = "FROM alelemconsumo";
$tdataalelemconsumo[".sqlWhereExpr"] = "";
$tdataalelemconsumo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalelemconsumo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalelemconsumo[".arrGroupsPerPage"] = $arrGPP;

$tdataalelemconsumo[".highlightSearchResults"] = true;

$tableKeysalelemconsumo = array();
$tableKeysalelemconsumo[] = "alelemenconsumo_id";
$tdataalelemconsumo[".Keys"] = $tableKeysalelemconsumo;


$tdataalelemconsumo[".hideMobileList"] = array();




//	alelemenconsumo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "alelemenconsumo_id";
	$fdata["GoodName"] = "alelemenconsumo_id";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo","alelemenconsumo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "alelemenconsumo_id";

		$fdata["sourceSingle"] = "alelemenconsumo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alelemenconsumo_id";

	
	
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


	$tdataalelemconsumo["alelemenconsumo_id"] = $fdata;
		$tdataalelemconsumo[".searchableFields"][] = "alelemenconsumo_id";
//	ec_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ec_codelem";
	$fdata["GoodName"] = "ec_codelem";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo","ec_codelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ec_codelem";

		$fdata["sourceSingle"] = "ec_codelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ec_codelem";

	
	
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
	$edata["LookupTable"] = "q_ctrl_alelemconsumo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "newval";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "newval";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "eccuenta", "lookup" => "ca_codcuenta" );

	
	

	
	
	
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


	$tdataalelemconsumo["ec_codelem"] = $fdata;
		$tdataalelemconsumo[".searchableFields"][] = "ec_codelem";
//	ec_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ec_nomelemento";
	$fdata["GoodName"] = "ec_nomelemento";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo","ec_nomelemento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ec_nomelemento";

		$fdata["sourceSingle"] = "ec_nomelemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ec_nomelemento";

	
	
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


	$tdataalelemconsumo["ec_nomelemento"] = $fdata;
		$tdataalelemconsumo[".searchableFields"][] = "ec_nomelemento";
//	eccuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eccuenta";
	$fdata["GoodName"] = "eccuenta";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo","eccuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "eccuenta";

		$fdata["sourceSingle"] = "eccuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eccuenta";

	
	
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
	$edata["LookupTable"] = "alcuentasalma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ca_codcuenta";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ca_codcuentat";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ec_codelem";

	
	
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


	$tdataalelemconsumo["eccuenta"] = $fdata;
		$tdataalelemconsumo[".searchableFields"][] = "eccuenta";
//	ecunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ecunidad";
	$fdata["GoodName"] = "ecunidad";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo","ecunidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ecunidad";

		$fdata["sourceSingle"] = "ecunidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecunidad";

	
	
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
	$edata["LookupTable"] = "geunidmedida";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "um_nomunimed";

	

	
	$edata["LookupOrderBy"] = "um_nomunimed";

	
	
	
	

	
	
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


	$tdataalelemconsumo["ecunidad"] = $fdata;
		$tdataalelemconsumo[".searchableFields"][] = "ecunidad";


$tables_data["alelemconsumo"]=&$tdataalelemconsumo;
$field_labels["alelemconsumo"] = &$fieldLabelsalelemconsumo;
$fieldToolTips["alelemconsumo"] = &$fieldToolTipsalelemconsumo;
$placeHolders["alelemconsumo"] = &$placeHoldersalelemconsumo;
$page_titles["alelemconsumo"] = &$pageTitlesalelemconsumo;


changeTextControlsToDate( "alelemconsumo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alelemconsumo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alelemconsumo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="alcuentasalma";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="alcuentasalma";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alcuentasalma";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["alelemconsumo"][0] = $masterParams;
				$masterTablesData["alelemconsumo"][0]["masterKeys"] = array();
	$masterTablesData["alelemconsumo"][0]["masterKeys"][]="ca_codcuenta";
				$masterTablesData["alelemconsumo"][0]["detailKeys"] = array();
	$masterTablesData["alelemconsumo"][0]["detailKeys"][]="eccuenta";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alelemconsumo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "alelemenconsumo_id,  ec_codelem,  ec_nomelemento,  eccuenta,  ecunidad";
$proto0["m_strFrom"] = "FROM alelemconsumo";
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
	"m_strName" => "alelemenconsumo_id",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo"
));

$proto6["m_sql"] = "alelemenconsumo_id";
$proto6["m_srcTableName"] = "alelemconsumo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_codelem",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo"
));

$proto8["m_sql"] = "ec_codelem";
$proto8["m_srcTableName"] = "alelemconsumo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_nomelemento",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo"
));

$proto10["m_sql"] = "ec_nomelemento";
$proto10["m_srcTableName"] = "alelemconsumo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "eccuenta",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo"
));

$proto12["m_sql"] = "eccuenta";
$proto12["m_srcTableName"] = "alelemconsumo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ecunidad",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo"
));

$proto14["m_sql"] = "ecunidad";
$proto14["m_srcTableName"] = "alelemconsumo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "alelemconsumo";
$proto17["m_srcTableName"] = "alelemconsumo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "alelemenconsumo_id";
$proto17["m_columns"][] = "ectipoestruc";
$proto17["m_columns"][] = "eccuenta";
$proto17["m_columns"][] = "ec_codelem";
$proto17["m_columns"][] = "ec_nomelemento";
$proto17["m_columns"][] = "ecunidad";
$proto17["m_columns"][] = "ec_codelemrel";
$proto17["m_columns"][] = "ec_localizacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "alelemconsumo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "alelemconsumo";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="alelemconsumo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alelemconsumo = createSqlQuery_alelemconsumo();


	
								;

					

$tdataalelemconsumo[".sqlquery"] = $queryData_alelemconsumo;



$tdataalelemconsumo[".hasEvents"] = false;

?>