<?php
$tdataalelemconsumo_consulta = array();
$tdataalelemconsumo_consulta[".searchableFields"] = array();
$tdataalelemconsumo_consulta[".ShortName"] = "alelemconsumo_consulta";
$tdataalelemconsumo_consulta[".OwnerID"] = "";
$tdataalelemconsumo_consulta[".OriginalTable"] = "alelemconsumo";


$tdataalelemconsumo_consulta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalelemconsumo_consulta[".originalPagesByType"] = $tdataalelemconsumo_consulta[".pagesByType"];
$tdataalelemconsumo_consulta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalelemconsumo_consulta[".originalPages"] = $tdataalelemconsumo_consulta[".pages"];
$tdataalelemconsumo_consulta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalelemconsumo_consulta[".originalDefaultPages"] = $tdataalelemconsumo_consulta[".defaultPages"];

//	field labels
$fieldLabelsalelemconsumo_consulta = array();
$fieldToolTipsalelemconsumo_consulta = array();
$pageTitlesalelemconsumo_consulta = array();
$placeHoldersalelemconsumo_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalelemconsumo_consulta["Spanish"] = array();
	$fieldToolTipsalelemconsumo_consulta["Spanish"] = array();
	$placeHoldersalelemconsumo_consulta["Spanish"] = array();
	$pageTitlesalelemconsumo_consulta["Spanish"] = array();
	$fieldLabelsalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "Alelemenconsumo Id";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ec_codelem"] = "Código elemento";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ec_codelem"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ec_codelem"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "Nombre elemento";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["eccuenta"] = "Cuenta";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["eccuenta"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["eccuenta"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ecunidad"] = "Unidad medida";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ecunidad"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ecunidad"] = "";
	if (count($fieldToolTipsalelemconsumo_consulta["Spanish"]))
		$tdataalelemconsumo_consulta[".isUseToolTips"] = true;
}


	$tdataalelemconsumo_consulta[".NCSearch"] = true;



$tdataalelemconsumo_consulta[".shortTableName"] = "alelemconsumo_consulta";
$tdataalelemconsumo_consulta[".nSecOptions"] = 0;

$tdataalelemconsumo_consulta[".mainTableOwnerID"] = "";
$tdataalelemconsumo_consulta[".entityType"] = 1;
$tdataalelemconsumo_consulta[".connId"] = "dbrf_at_127_0_0_1";


$tdataalelemconsumo_consulta[".strOriginalTableName"] = "alelemconsumo";

	



$tdataalelemconsumo_consulta[".showAddInPopup"] = false;

$tdataalelemconsumo_consulta[".showEditInPopup"] = false;

$tdataalelemconsumo_consulta[".showViewInPopup"] = false;

$tdataalelemconsumo_consulta[".listAjax"] = false;
//	temporary
//$tdataalelemconsumo_consulta[".listAjax"] = false;

	$tdataalelemconsumo_consulta[".audit"] = false;

	$tdataalelemconsumo_consulta[".locking"] = false;


$pages = $tdataalelemconsumo_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalelemconsumo_consulta[".edit"] = true;
	$tdataalelemconsumo_consulta[".afterEditAction"] = 1;
	$tdataalelemconsumo_consulta[".closePopupAfterEdit"] = 1;
	$tdataalelemconsumo_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalelemconsumo_consulta[".add"] = true;
$tdataalelemconsumo_consulta[".afterAddAction"] = 1;
$tdataalelemconsumo_consulta[".closePopupAfterAdd"] = 1;
$tdataalelemconsumo_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalelemconsumo_consulta[".list"] = true;
}



$tdataalelemconsumo_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalelemconsumo_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalelemconsumo_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalelemconsumo_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalelemconsumo_consulta[".printFriendly"] = true;
}



$tdataalelemconsumo_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalelemconsumo_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalelemconsumo_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalelemconsumo_consulta[".isUseAjaxSuggest"] = true;



												

$tdataalelemconsumo_consulta[".ajaxCodeSnippetAdded"] = false;

$tdataalelemconsumo_consulta[".buttonsAdded"] = false;

$tdataalelemconsumo_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalelemconsumo_consulta[".isUseTimeForSearch"] = false;


$tdataalelemconsumo_consulta[".badgeColor"] = "DB7093";


$tdataalelemconsumo_consulta[".allSearchFields"] = array();
$tdataalelemconsumo_consulta[".filterFields"] = array();
$tdataalelemconsumo_consulta[".requiredSearchFields"] = array();

$tdataalelemconsumo_consulta[".googleLikeFields"] = array();
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "alelemenconsumo_id";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "eccuenta";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ec_codelem";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ec_nomelemento";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ecunidad";



$tdataalelemconsumo_consulta[".tableType"] = "list";

$tdataalelemconsumo_consulta[".printerPageOrientation"] = 0;
$tdataalelemconsumo_consulta[".nPrinterPageScale"] = 100;

$tdataalelemconsumo_consulta[".nPrinterSplitRecords"] = 40;

$tdataalelemconsumo_consulta[".geocodingEnabled"] = false;










$tdataalelemconsumo_consulta[".pageSize"] = 20;

$tdataalelemconsumo_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalelemconsumo_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataalelemconsumo_consulta[".orderindexes"] = array();


$tdataalelemconsumo_consulta[".sqlHead"] = "SELECT alelemenconsumo_id,  eccuenta,  ec_codelem,  ec_nomelemento,  ecunidad";
$tdataalelemconsumo_consulta[".sqlFrom"] = "FROM alelemconsumo";
$tdataalelemconsumo_consulta[".sqlWhereExpr"] = "";
$tdataalelemconsumo_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalelemconsumo_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalelemconsumo_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdataalelemconsumo_consulta[".highlightSearchResults"] = true;

$tableKeysalelemconsumo_consulta = array();
$tableKeysalelemconsumo_consulta[] = "alelemenconsumo_id";
$tdataalelemconsumo_consulta[".Keys"] = $tableKeysalelemconsumo_consulta;


$tdataalelemconsumo_consulta[".hideMobileList"] = array();




//	alelemenconsumo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "alelemenconsumo_id";
	$fdata["GoodName"] = "alelemenconsumo_id";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","alelemenconsumo_id");
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


	$tdataalelemconsumo_consulta["alelemenconsumo_id"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "alelemenconsumo_id";
//	eccuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eccuenta";
	$fdata["GoodName"] = "eccuenta";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","eccuenta");
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


	$tdataalelemconsumo_consulta["eccuenta"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "eccuenta";
//	ec_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ec_codelem";
	$fdata["GoodName"] = "ec_codelem";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ec_codelem");
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


	$tdataalelemconsumo_consulta["ec_codelem"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ec_codelem";
//	ec_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ec_nomelemento";
	$fdata["GoodName"] = "ec_nomelemento";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ec_nomelemento");
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


	$tdataalelemconsumo_consulta["ec_nomelemento"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ec_nomelemento";
//	ecunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ecunidad";
	$fdata["GoodName"] = "ecunidad";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ecunidad");
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


	$tdataalelemconsumo_consulta["ecunidad"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ecunidad";


$tables_data["alelemconsumo_consulta"]=&$tdataalelemconsumo_consulta;
$field_labels["alelemconsumo_consulta"] = &$fieldLabelsalelemconsumo_consulta;
$fieldToolTips["alelemconsumo_consulta"] = &$fieldToolTipsalelemconsumo_consulta;
$placeHolders["alelemconsumo_consulta"] = &$placeHoldersalelemconsumo_consulta;
$page_titles["alelemconsumo_consulta"] = &$pageTitlesalelemconsumo_consulta;


changeTextControlsToDate( "alelemconsumo_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alelemconsumo_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alelemconsumo_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alelemconsumo_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "alelemenconsumo_id,  eccuenta,  ec_codelem,  ec_nomelemento,  ecunidad";
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
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto6["m_sql"] = "alelemenconsumo_id";
$proto6["m_srcTableName"] = "alelemconsumo_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "eccuenta",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto8["m_sql"] = "eccuenta";
$proto8["m_srcTableName"] = "alelemconsumo_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_codelem",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto10["m_sql"] = "ec_codelem";
$proto10["m_srcTableName"] = "alelemconsumo_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_nomelemento",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto12["m_sql"] = "ec_nomelemento";
$proto12["m_srcTableName"] = "alelemconsumo_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ecunidad",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto14["m_sql"] = "ecunidad";
$proto14["m_srcTableName"] = "alelemconsumo_consulta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "alelemconsumo";
$proto17["m_srcTableName"] = "alelemconsumo_consulta";
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
$proto16["m_srcTableName"] = "alelemconsumo_consulta";
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
$proto0["m_srcTableName"]="alelemconsumo_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alelemconsumo_consulta = createSqlQuery_alelemconsumo_consulta();


	
								;

					

$tdataalelemconsumo_consulta[".sqlquery"] = $queryData_alelemconsumo_consulta;



$tdataalelemconsumo_consulta[".hasEvents"] = false;

?>