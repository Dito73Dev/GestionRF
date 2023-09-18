<?php
$tdataalelemdevolutivo_consulta = array();
$tdataalelemdevolutivo_consulta[".searchableFields"] = array();
$tdataalelemdevolutivo_consulta[".ShortName"] = "alelemdevolutivo_consulta";
$tdataalelemdevolutivo_consulta[".OwnerID"] = "";
$tdataalelemdevolutivo_consulta[".OriginalTable"] = "alelemdevolutivo";


$tdataalelemdevolutivo_consulta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalelemdevolutivo_consulta[".originalPagesByType"] = $tdataalelemdevolutivo_consulta[".pagesByType"];
$tdataalelemdevolutivo_consulta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalelemdevolutivo_consulta[".originalPages"] = $tdataalelemdevolutivo_consulta[".pages"];
$tdataalelemdevolutivo_consulta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalelemdevolutivo_consulta[".originalDefaultPages"] = $tdataalelemdevolutivo_consulta[".defaultPages"];

//	field labels
$fieldLabelsalelemdevolutivo_consulta = array();
$fieldToolTipsalelemdevolutivo_consulta = array();
$pageTitlesalelemdevolutivo_consulta = array();
$placeHoldersalelemdevolutivo_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalelemdevolutivo_consulta["Spanish"] = array();
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"] = array();
	$placeHoldersalelemdevolutivo_consulta["Spanish"] = array();
	$pageTitlesalelemdevolutivo_consulta["Spanish"] = array();
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["alelemdevolutivo_id"] = "Elemento ID";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["alelemdevolutivo_id"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["alelemdevolutivo_id"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["edcuenta"] = "Cuenta";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["edcuenta"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["edcuenta"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["ed_codelem"] = "Código elemento";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["ed_codelem"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["ed_codelem"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["ed_nomelemento"] = "Nombre de elemento";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["ed_nomelemento"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["ed_nomelemento"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["edunidad"] = "Unidad medida";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["edunidad"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["edunidad"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["edmarca"] = "Marca";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["edmarca"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["edmarca"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["ed_modeloelem"] = "Modelo elemento";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["ed_modeloelem"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["ed_modeloelem"] = "";
	$fieldLabelsalelemdevolutivo_consulta["Spanish"]["ed_valunit"] = "Valor unitario";
	$fieldToolTipsalelemdevolutivo_consulta["Spanish"]["ed_valunit"] = "";
	$placeHoldersalelemdevolutivo_consulta["Spanish"]["ed_valunit"] = "";
	if (count($fieldToolTipsalelemdevolutivo_consulta["Spanish"]))
		$tdataalelemdevolutivo_consulta[".isUseToolTips"] = true;
}


	$tdataalelemdevolutivo_consulta[".NCSearch"] = true;



$tdataalelemdevolutivo_consulta[".shortTableName"] = "alelemdevolutivo_consulta";
$tdataalelemdevolutivo_consulta[".nSecOptions"] = 0;

$tdataalelemdevolutivo_consulta[".mainTableOwnerID"] = "";
$tdataalelemdevolutivo_consulta[".entityType"] = 1;
$tdataalelemdevolutivo_consulta[".connId"] = "dbrf_at_127_0_0_1";


$tdataalelemdevolutivo_consulta[".strOriginalTableName"] = "alelemdevolutivo";

	



$tdataalelemdevolutivo_consulta[".showAddInPopup"] = false;

$tdataalelemdevolutivo_consulta[".showEditInPopup"] = false;

$tdataalelemdevolutivo_consulta[".showViewInPopup"] = false;

$tdataalelemdevolutivo_consulta[".listAjax"] = false;
//	temporary
//$tdataalelemdevolutivo_consulta[".listAjax"] = false;

	$tdataalelemdevolutivo_consulta[".audit"] = false;

	$tdataalelemdevolutivo_consulta[".locking"] = false;


$pages = $tdataalelemdevolutivo_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalelemdevolutivo_consulta[".edit"] = true;
	$tdataalelemdevolutivo_consulta[".afterEditAction"] = 1;
	$tdataalelemdevolutivo_consulta[".closePopupAfterEdit"] = 1;
	$tdataalelemdevolutivo_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalelemdevolutivo_consulta[".add"] = true;
$tdataalelemdevolutivo_consulta[".afterAddAction"] = 1;
$tdataalelemdevolutivo_consulta[".closePopupAfterAdd"] = 1;
$tdataalelemdevolutivo_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalelemdevolutivo_consulta[".list"] = true;
}



$tdataalelemdevolutivo_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalelemdevolutivo_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalelemdevolutivo_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalelemdevolutivo_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalelemdevolutivo_consulta[".printFriendly"] = true;
}



$tdataalelemdevolutivo_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalelemdevolutivo_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalelemdevolutivo_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalelemdevolutivo_consulta[".isUseAjaxSuggest"] = true;



												

$tdataalelemdevolutivo_consulta[".ajaxCodeSnippetAdded"] = false;

$tdataalelemdevolutivo_consulta[".buttonsAdded"] = false;

$tdataalelemdevolutivo_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalelemdevolutivo_consulta[".isUseTimeForSearch"] = false;


$tdataalelemdevolutivo_consulta[".badgeColor"] = "E8926F";


$tdataalelemdevolutivo_consulta[".allSearchFields"] = array();
$tdataalelemdevolutivo_consulta[".filterFields"] = array();
$tdataalelemdevolutivo_consulta[".requiredSearchFields"] = array();

$tdataalelemdevolutivo_consulta[".googleLikeFields"] = array();
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "alelemdevolutivo_id";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "edcuenta";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "ed_codelem";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "ed_modeloelem";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "ed_nomelemento";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "ed_valunit";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "edmarca";
$tdataalelemdevolutivo_consulta[".googleLikeFields"][] = "edunidad";



$tdataalelemdevolutivo_consulta[".tableType"] = "list";

$tdataalelemdevolutivo_consulta[".printerPageOrientation"] = 0;
$tdataalelemdevolutivo_consulta[".nPrinterPageScale"] = 100;

$tdataalelemdevolutivo_consulta[".nPrinterSplitRecords"] = 40;

$tdataalelemdevolutivo_consulta[".geocodingEnabled"] = false;










$tdataalelemdevolutivo_consulta[".pageSize"] = 20;

$tdataalelemdevolutivo_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ed_codelem, alelemdevolutivo_id DESC";
$tdataalelemdevolutivo_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataalelemdevolutivo_consulta[".orderindexes"] = array();
			$tdataalelemdevolutivo_consulta[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "ed_codelem");
			$tdataalelemdevolutivo_consulta[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "alelemdevolutivo_id");


$tdataalelemdevolutivo_consulta[".sqlHead"] = "SELECT alelemdevolutivo_id,  edcuenta,  ed_codelem,  ed_modeloelem,  ed_nomelemento,  ed_valunit,  edmarca,  edunidad";
$tdataalelemdevolutivo_consulta[".sqlFrom"] = "FROM alelemdevolutivo";
$tdataalelemdevolutivo_consulta[".sqlWhereExpr"] = "";
$tdataalelemdevolutivo_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalelemdevolutivo_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalelemdevolutivo_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdataalelemdevolutivo_consulta[".highlightSearchResults"] = true;

$tableKeysalelemdevolutivo_consulta = array();
$tableKeysalelemdevolutivo_consulta[] = "alelemdevolutivo_id";
$tdataalelemdevolutivo_consulta[".Keys"] = $tableKeysalelemdevolutivo_consulta;


$tdataalelemdevolutivo_consulta[".hideMobileList"] = array();




//	alelemdevolutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "alelemdevolutivo_id";
	$fdata["GoodName"] = "alelemdevolutivo_id";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","alelemdevolutivo_id");
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


	$tdataalelemdevolutivo_consulta["alelemdevolutivo_id"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "alelemdevolutivo_id";
//	edcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edcuenta";
	$fdata["GoodName"] = "edcuenta";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","edcuenta");
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


	$tdataalelemdevolutivo_consulta["edcuenta"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "edcuenta";
//	ed_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ed_codelem";
	$fdata["GoodName"] = "ed_codelem";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","ed_codelem");
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


	$tdataalelemdevolutivo_consulta["ed_codelem"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "ed_codelem";
//	ed_modeloelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ed_modeloelem";
	$fdata["GoodName"] = "ed_modeloelem";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","ed_modeloelem");
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


	$tdataalelemdevolutivo_consulta["ed_modeloelem"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "ed_modeloelem";
//	ed_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ed_nomelemento";
	$fdata["GoodName"] = "ed_nomelemento";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","ed_nomelemento");
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


	$tdataalelemdevolutivo_consulta["ed_nomelemento"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "ed_nomelemento";
//	ed_valunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ed_valunit";
	$fdata["GoodName"] = "ed_valunit";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","ed_valunit");
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


	$tdataalelemdevolutivo_consulta["ed_valunit"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "ed_valunit";
//	edmarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "edmarca";
	$fdata["GoodName"] = "edmarca";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","edmarca");
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


	$tdataalelemdevolutivo_consulta["edmarca"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "edmarca";
//	edunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edunidad";
	$fdata["GoodName"] = "edunidad";
	$fdata["ownerTable"] = "alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("alelemdevolutivo_consulta","edunidad");
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


	$tdataalelemdevolutivo_consulta["edunidad"] = $fdata;
		$tdataalelemdevolutivo_consulta[".searchableFields"][] = "edunidad";


$tables_data["alelemdevolutivo_consulta"]=&$tdataalelemdevolutivo_consulta;
$field_labels["alelemdevolutivo_consulta"] = &$fieldLabelsalelemdevolutivo_consulta;
$fieldToolTips["alelemdevolutivo_consulta"] = &$fieldToolTipsalelemdevolutivo_consulta;
$placeHolders["alelemdevolutivo_consulta"] = &$placeHoldersalelemdevolutivo_consulta;
$page_titles["alelemdevolutivo_consulta"] = &$pageTitlesalelemdevolutivo_consulta;


changeTextControlsToDate( "alelemdevolutivo_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alelemdevolutivo_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alelemdevolutivo_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alelemdevolutivo_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "alelemdevolutivo_id,  edcuenta,  ed_codelem,  ed_modeloelem,  ed_nomelemento,  ed_valunit,  edmarca,  edunidad";
$proto0["m_strFrom"] = "FROM alelemdevolutivo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ed_codelem, alelemdevolutivo_id DESC";
	
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
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto6["m_sql"] = "alelemdevolutivo_id";
$proto6["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "edcuenta",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto8["m_sql"] = "edcuenta";
$proto8["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_codelem",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto10["m_sql"] = "ed_codelem";
$proto10["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_modeloelem",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto12["m_sql"] = "ed_modeloelem";
$proto12["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_nomelemento",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto14["m_sql"] = "ed_nomelemento";
$proto14["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ed_valunit",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto16["m_sql"] = "ed_valunit";
$proto16["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "edmarca",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto18["m_sql"] = "edmarca";
$proto18["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edunidad",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto20["m_sql"] = "edunidad";
$proto20["m_srcTableName"] = "alelemdevolutivo_consulta";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "alelemdevolutivo";
$proto23["m_srcTableName"] = "alelemdevolutivo_consulta";
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
$proto22["m_srcTableName"] = "alelemdevolutivo_consulta";
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
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "alelemdevolutivo_id",
	"m_strTable" => "alelemdevolutivo",
	"m_srcTableName" => "alelemdevolutivo_consulta"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alelemdevolutivo_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alelemdevolutivo_consulta = createSqlQuery_alelemdevolutivo_consulta();


	
								;

								

$tdataalelemdevolutivo_consulta[".sqlquery"] = $queryData_alelemdevolutivo_consulta;



$tdataalelemdevolutivo_consulta[".hasEvents"] = false;

?>