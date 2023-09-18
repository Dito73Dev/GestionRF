<?php
$tdataalelemdevolutivo = array();
$tdataalelemdevolutivo[".searchableFields"] = array();
$tdataalelemdevolutivo[".ShortName"] = "alelemdevolutivo";
$tdataalelemdevolutivo[".OwnerID"] = "";
$tdataalelemdevolutivo[".OriginalTable"] = "alelemdevolutivo";


$tdataalelemdevolutivo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalelemdevolutivo[".originalPagesByType"] = $tdataalelemdevolutivo[".pagesByType"];
$tdataalelemdevolutivo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalelemdevolutivo[".originalPages"] = $tdataalelemdevolutivo[".pages"];
$tdataalelemdevolutivo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalelemdevolutivo[".originalDefaultPages"] = $tdataalelemdevolutivo[".defaultPages"];

//	field labels
$fieldLabelsalelemdevolutivo = array();
$fieldToolTipsalelemdevolutivo = array();
$pageTitlesalelemdevolutivo = array();
$placeHoldersalelemdevolutivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalelemdevolutivo["Spanish"] = array();
	$fieldToolTipsalelemdevolutivo["Spanish"] = array();
	$placeHoldersalelemdevolutivo["Spanish"] = array();
	$pageTitlesalelemdevolutivo["Spanish"] = array();
	$fieldLabelsalelemdevolutivo["Spanish"]["alelemdevolutivo_id"] = "Alelemdevolutivo Id";
	$fieldToolTipsalelemdevolutivo["Spanish"]["alelemdevolutivo_id"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["alelemdevolutivo_id"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["edcuenta"] = "Cuenta";
	$fieldToolTipsalelemdevolutivo["Spanish"]["edcuenta"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["edcuenta"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["ed_codelem"] = "Código elemento";
	$fieldToolTipsalelemdevolutivo["Spanish"]["ed_codelem"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["ed_codelem"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["ed_nomelemento"] = "Nombre de elemento";
	$fieldToolTipsalelemdevolutivo["Spanish"]["ed_nomelemento"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["ed_nomelemento"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["edunidad"] = "Unidad medida";
	$fieldToolTipsalelemdevolutivo["Spanish"]["edunidad"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["edunidad"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["edmarca"] = "Marca";
	$fieldToolTipsalelemdevolutivo["Spanish"]["edmarca"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["edmarca"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["ed_modeloelem"] = "Modelo elemento";
	$fieldToolTipsalelemdevolutivo["Spanish"]["ed_modeloelem"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["ed_modeloelem"] = "";
	$fieldLabelsalelemdevolutivo["Spanish"]["ed_valunit"] = "Valor unitario";
	$fieldToolTipsalelemdevolutivo["Spanish"]["ed_valunit"] = "";
	$placeHoldersalelemdevolutivo["Spanish"]["ed_valunit"] = "";
	if (count($fieldToolTipsalelemdevolutivo["Spanish"]))
		$tdataalelemdevolutivo[".isUseToolTips"] = true;
}


	$tdataalelemdevolutivo[".NCSearch"] = true;



$tdataalelemdevolutivo[".shortTableName"] = "alelemdevolutivo";
$tdataalelemdevolutivo[".nSecOptions"] = 0;

$tdataalelemdevolutivo[".mainTableOwnerID"] = "";
$tdataalelemdevolutivo[".entityType"] = 0;
$tdataalelemdevolutivo[".connId"] = "dbrf_at_127_0_0_1";


$tdataalelemdevolutivo[".strOriginalTableName"] = "alelemdevolutivo";

	



$tdataalelemdevolutivo[".showAddInPopup"] = false;

$tdataalelemdevolutivo[".showEditInPopup"] = false;

$tdataalelemdevolutivo[".showViewInPopup"] = false;

$tdataalelemdevolutivo[".listAjax"] = false;
//	temporary
//$tdataalelemdevolutivo[".listAjax"] = false;

	$tdataalelemdevolutivo[".audit"] = false;

	$tdataalelemdevolutivo[".locking"] = false;


$pages = $tdataalelemdevolutivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalelemdevolutivo[".edit"] = true;
	$tdataalelemdevolutivo[".afterEditAction"] = 1;
	$tdataalelemdevolutivo[".closePopupAfterEdit"] = 1;
	$tdataalelemdevolutivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalelemdevolutivo[".add"] = true;
$tdataalelemdevolutivo[".afterAddAction"] = 1;
$tdataalelemdevolutivo[".closePopupAfterAdd"] = 1;
$tdataalelemdevolutivo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalelemdevolutivo[".list"] = true;
}



$tdataalelemdevolutivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalelemdevolutivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalelemdevolutivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalelemdevolutivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalelemdevolutivo[".printFriendly"] = true;
}



$tdataalelemdevolutivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalelemdevolutivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalelemdevolutivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalelemdevolutivo[".isUseAjaxSuggest"] = true;



																								

$tdataalelemdevolutivo[".ajaxCodeSnippetAdded"] = false;

$tdataalelemdevolutivo[".buttonsAdded"] = false;

$tdataalelemdevolutivo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalelemdevolutivo[".isUseTimeForSearch"] = false;


$tdataalelemdevolutivo[".badgeColor"] = "00c2c5";


$tdataalelemdevolutivo[".allSearchFields"] = array();
$tdataalelemdevolutivo[".filterFields"] = array();
$tdataalelemdevolutivo[".requiredSearchFields"] = array();

$tdataalelemdevolutivo[".googleLikeFields"] = array();
$tdataalelemdevolutivo[".googleLikeFields"][] = "alelemdevolutivo_id";
$tdataalelemdevolutivo[".googleLikeFields"][] = "ed_codelem";
$tdataalelemdevolutivo[".googleLikeFields"][] = "ed_modeloelem";
$tdataalelemdevolutivo[".googleLikeFields"][] = "ed_nomelemento";
$tdataalelemdevolutivo[".googleLikeFields"][] = "ed_valunit";
$tdataalelemdevolutivo[".googleLikeFields"][] = "edcuenta";
$tdataalelemdevolutivo[".googleLikeFields"][] = "edmarca";
$tdataalelemdevolutivo[".googleLikeFields"][] = "edunidad";



$tdataalelemdevolutivo[".tableType"] = "list";

$tdataalelemdevolutivo[".printerPageOrientation"] = 0;
$tdataalelemdevolutivo[".nPrinterPageScale"] = 100;

$tdataalelemdevolutivo[".nPrinterSplitRecords"] = 40;

$tdataalelemdevolutivo[".geocodingEnabled"] = false;










$tdataalelemdevolutivo[".pageSize"] = 20;

$tdataalelemdevolutivo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ed_codelem";
$tdataalelemdevolutivo[".strOrderBy"] = $tstrOrderBy;

$tdataalelemdevolutivo[".orderindexes"] = array();
			$tdataalelemdevolutivo[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "ed_codelem");


$tdataalelemdevolutivo[".sqlHead"] = "SELECT alelemdevolutivo_id,  ed_codelem,  ed_modeloelem,  ed_nomelemento,  ed_valunit,  edcuenta,  edmarca,  edunidad";
$tdataalelemdevolutivo[".sqlFrom"] = "FROM alelemdevolutivo";
$tdataalelemdevolutivo[".sqlWhereExpr"] = "";
$tdataalelemdevolutivo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalelemdevolutivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalelemdevolutivo[".arrGroupsPerPage"] = $arrGPP;

$tdataalelemdevolutivo[".highlightSearchResults"] = true;

$tableKeysalelemdevolutivo = array();
$tableKeysalelemdevolutivo[] = "alelemdevolutivo_id";
$tdataalelemdevolutivo[".Keys"] = $tableKeysalelemdevolutivo;


$tdataalelemdevolutivo[".hideMobileList"] = array();




//	alelemdevolutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "alelemdevolutivo_id";
	$fdata["GoodName"] = "alelemdevolutivo_id";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","alelemdevolutivo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "alelemdevolutivo_id";

		$fdata["sourceSingle"] = "alelemdevolutivo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alelemdevolutivo_id";

	
	
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


	$tdataalelemdevolutivo["alelemdevolutivo_id"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "alelemdevolutivo_id";
//	ed_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ed_codelem";
	$fdata["GoodName"] = "ed_codelem";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","ed_codelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ed_codelem";

		$fdata["sourceSingle"] = "ed_codelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ed_codelem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_ctrl_alelemdevolutivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "newval";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "newval";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "edcuenta", "lookup" => "ca_codcuenta" );

	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_ctrl_alelemdevolutivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "newval";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "newval";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "edcuenta", "lookup" => "ca_codcuenta" );

	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataalelemdevolutivo["ed_codelem"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "ed_codelem";
//	ed_modeloelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ed_modeloelem";
	$fdata["GoodName"] = "ed_modeloelem";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","ed_modeloelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ed_modeloelem";

		$fdata["sourceSingle"] = "ed_modeloelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ed_modeloelem";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataalelemdevolutivo["ed_modeloelem"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "ed_modeloelem";
//	ed_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ed_nomelemento";
	$fdata["GoodName"] = "ed_nomelemento";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","ed_nomelemento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ed_nomelemento";

		$fdata["sourceSingle"] = "ed_nomelemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ed_nomelemento";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataalelemdevolutivo["ed_nomelemento"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "ed_nomelemento";
//	ed_valunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ed_valunit";
	$fdata["GoodName"] = "ed_valunit";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","ed_valunit");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ed_valunit";

		$fdata["sourceSingle"] = "ed_valunit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ed_valunit";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdataalelemdevolutivo["ed_valunit"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "ed_valunit";
//	edcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "edcuenta";
	$fdata["GoodName"] = "edcuenta";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","edcuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edcuenta";

		$fdata["sourceSingle"] = "edcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edcuenta";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdataalelemdevolutivo["edcuenta"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "edcuenta";
//	edmarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "edmarca";
	$fdata["GoodName"] = "edmarca";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","edmarca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edmarca";

		$fdata["sourceSingle"] = "edmarca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edmarca";

	
	
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
	$edata["LookupTable"] = "almarcas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "almarcas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ma_nommarca";

	

	
	$edata["LookupOrderBy"] = "ma_nommarca";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdataalelemdevolutivo["edmarca"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "edmarca";
//	edunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edunidad";
	$fdata["GoodName"] = "edunidad";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo","edunidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edunidad";

		$fdata["sourceSingle"] = "edunidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edunidad";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdataalelemdevolutivo["edunidad"] = $fdata;
		$tdataalelemdevolutivo[".searchableFields"][] = "edunidad";


$tables_data["alelemdevolutivo"]=&$tdataalelemdevolutivo;
$field_labels["alelemdevolutivo"] = &$fieldLabelsalelemdevolutivo;
$fieldToolTips["alelemdevolutivo"] = &$fieldToolTipsalelemdevolutivo;
$placeHolders["alelemdevolutivo"] = &$placeHoldersalelemdevolutivo;
$page_titles["alelemdevolutivo"] = &$pageTitlesalelemdevolutivo;


changeTextControlsToDate( "alelemdevolutivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alelemdevolutivo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alelemdevolutivo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="alcuentasalma";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="alcuentasalma";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alcuentasalma";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["alelemdevolutivo"][0] = $masterParams;
				$masterTablesData["alelemdevolutivo"][0]["masterKeys"] = array();
	$masterTablesData["alelemdevolutivo"][0]["masterKeys"][]="ca_codcuenta";
				$masterTablesData["alelemdevolutivo"][0]["detailKeys"] = array();
	$masterTablesData["alelemdevolutivo"][0]["detailKeys"][]="edcuenta";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alelemdevolutivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "alelemdevolutivo_id,  ed_codelem,  ed_modeloelem,  ed_nomelemento,  ed_valunit,  edcuenta,  edmarca,  edunidad";
$proto0["m_strFrom"] = "FROM alelemdevolutivo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ed_codelem";
	
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
	"m_strName" => "alelemdevolutivo_id",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto6["m_sql"] = "alelemdevolutivo_id";
$proto6["m_srcTableName"] = "alelemdevolutivo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_codelem",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto8["m_sql"] = "ed_codelem";
$proto8["m_srcTableName"] = "alelemdevolutivo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_modeloelem",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto10["m_sql"] = "ed_modeloelem";
$proto10["m_srcTableName"] = "alelemdevolutivo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_nomelemento",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto12["m_sql"] = "ed_nomelemento";
$proto12["m_srcTableName"] = "alelemdevolutivo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_valunit",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto14["m_sql"] = "ed_valunit";
$proto14["m_srcTableName"] = "alelemdevolutivo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "edcuenta",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto16["m_sql"] = "edcuenta";
$proto16["m_srcTableName"] = "alelemdevolutivo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "edmarca",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto18["m_sql"] = "edmarca";
$proto18["m_srcTableName"] = "alelemdevolutivo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edunidad",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto20["m_sql"] = "edunidad";
$proto20["m_srcTableName"] = "alelemdevolutivo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "alelemdevolutivo";
$proto23["m_srcTableName"] = "alelemdevolutivo";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "alelemdevolutivo_id";
$proto23["m_columns"][] = "edtipoestruc";
$proto23["m_columns"][] = "edcuenta";
$proto23["m_columns"][] = "ed_codelem";
$proto23["m_columns"][] = "ed_nomelemento";
$proto23["m_columns"][] = "edunidad";
$proto23["m_columns"][] = "edmarca";
$proto23["m_columns"][] = "ed_modeloelem";
$proto23["m_columns"][] = "edproveedor";
$proto23["m_columns"][] = "ed_valunit";
$proto23["m_columns"][] = "ed_codelemrel";
$proto23["m_columns"][] = "ed_localizacion";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "alelemdevolutivo";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "alelemdevolutivo";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "ed_codelem",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alelemdevolutivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alelemdevolutivo = createSqlQuery_alelemdevolutivo();


	
								;

								

$tdataalelemdevolutivo[".sqlquery"] = $queryData_alelemdevolutivo;



$tdataalelemdevolutivo[".hasEvents"] = false;

?>