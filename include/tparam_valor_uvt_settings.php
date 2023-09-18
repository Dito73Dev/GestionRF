<?php
$tdatatparam_valor_uvt = array();
$tdatatparam_valor_uvt[".searchableFields"] = array();
$tdatatparam_valor_uvt[".ShortName"] = "tparam_valor_uvt";
$tdatatparam_valor_uvt[".OwnerID"] = "";
$tdatatparam_valor_uvt[".OriginalTable"] = "tparam_valor_uvt";


$tdatatparam_valor_uvt[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatparam_valor_uvt[".originalPagesByType"] = $tdatatparam_valor_uvt[".pagesByType"];
$tdatatparam_valor_uvt[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatparam_valor_uvt[".originalPages"] = $tdatatparam_valor_uvt[".pages"];
$tdatatparam_valor_uvt[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatparam_valor_uvt[".originalDefaultPages"] = $tdatatparam_valor_uvt[".defaultPages"];

//	field labels
$fieldLabelstparam_valor_uvt = array();
$fieldToolTipstparam_valor_uvt = array();
$pageTitlestparam_valor_uvt = array();
$placeHolderstparam_valor_uvt = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_valor_uvt["Spanish"] = array();
	$fieldToolTipstparam_valor_uvt["Spanish"] = array();
	$placeHolderstparam_valor_uvt["Spanish"] = array();
	$pageTitlestparam_valor_uvt["Spanish"] = array();
	$fieldLabelstparam_valor_uvt["Spanish"]["pmv_id"] = "Pmv Id";
	$fieldToolTipstparam_valor_uvt["Spanish"]["pmv_id"] = "";
	$placeHolderstparam_valor_uvt["Spanish"]["pmv_id"] = "";
	$fieldLabelstparam_valor_uvt["Spanish"]["pmv_numuvt"] = "# UVT | SALARIO";
	$fieldToolTipstparam_valor_uvt["Spanish"]["pmv_numuvt"] = "";
	$placeHolderstparam_valor_uvt["Spanish"]["pmv_numuvt"] = "";
	$fieldLabelstparam_valor_uvt["Spanish"]["pmv_uvt"] = "Valor UVT | SALARIO";
	$fieldToolTipstparam_valor_uvt["Spanish"]["pmv_uvt"] = "";
	$placeHolderstparam_valor_uvt["Spanish"]["pmv_uvt"] = "";
	$fieldLabelstparam_valor_uvt["Spanish"]["pmv_valoruve"] = "Valor de referencia PM";
	$fieldToolTipstparam_valor_uvt["Spanish"]["pmv_valoruve"] = "";
	$placeHolderstparam_valor_uvt["Spanish"]["pmv_valoruve"] = "";
	$fieldLabelstparam_valor_uvt["Spanish"]["pmv_vigencia"] = "Vigencia";
	$fieldToolTipstparam_valor_uvt["Spanish"]["pmv_vigencia"] = "";
	$placeHolderstparam_valor_uvt["Spanish"]["pmv_vigencia"] = "";
	if (count($fieldToolTipstparam_valor_uvt["Spanish"]))
		$tdatatparam_valor_uvt[".isUseToolTips"] = true;
}


	$tdatatparam_valor_uvt[".NCSearch"] = true;



$tdatatparam_valor_uvt[".shortTableName"] = "tparam_valor_uvt";
$tdatatparam_valor_uvt[".nSecOptions"] = 0;

$tdatatparam_valor_uvt[".mainTableOwnerID"] = "";
$tdatatparam_valor_uvt[".entityType"] = 0;
$tdatatparam_valor_uvt[".connId"] = "dbrf_at_127_0_0_1";


$tdatatparam_valor_uvt[".strOriginalTableName"] = "tparam_valor_uvt";

	



$tdatatparam_valor_uvt[".showAddInPopup"] = false;

$tdatatparam_valor_uvt[".showEditInPopup"] = false;

$tdatatparam_valor_uvt[".showViewInPopup"] = false;

$tdatatparam_valor_uvt[".listAjax"] = false;
//	temporary
//$tdatatparam_valor_uvt[".listAjax"] = false;

	$tdatatparam_valor_uvt[".audit"] = false;

	$tdatatparam_valor_uvt[".locking"] = false;


$pages = $tdatatparam_valor_uvt[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_valor_uvt[".edit"] = true;
	$tdatatparam_valor_uvt[".afterEditAction"] = 1;
	$tdatatparam_valor_uvt[".closePopupAfterEdit"] = 1;
	$tdatatparam_valor_uvt[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_valor_uvt[".add"] = true;
$tdatatparam_valor_uvt[".afterAddAction"] = 1;
$tdatatparam_valor_uvt[".closePopupAfterAdd"] = 1;
$tdatatparam_valor_uvt[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_valor_uvt[".list"] = true;
}



$tdatatparam_valor_uvt[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_valor_uvt[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_valor_uvt[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_valor_uvt[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_valor_uvt[".printFriendly"] = true;
}



$tdatatparam_valor_uvt[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_valor_uvt[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_valor_uvt[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_valor_uvt[".isUseAjaxSuggest"] = true;



												

$tdatatparam_valor_uvt[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_valor_uvt[".buttonsAdded"] = false;

$tdatatparam_valor_uvt[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_valor_uvt[".isUseTimeForSearch"] = false;


$tdatatparam_valor_uvt[".badgeColor"] = "E8926F";


$tdatatparam_valor_uvt[".allSearchFields"] = array();
$tdatatparam_valor_uvt[".filterFields"] = array();
$tdatatparam_valor_uvt[".requiredSearchFields"] = array();

$tdatatparam_valor_uvt[".googleLikeFields"] = array();
$tdatatparam_valor_uvt[".googleLikeFields"][] = "pmv_id";
$tdatatparam_valor_uvt[".googleLikeFields"][] = "pmv_vigencia";
$tdatatparam_valor_uvt[".googleLikeFields"][] = "pmv_uvt";
$tdatatparam_valor_uvt[".googleLikeFields"][] = "pmv_numuvt";
$tdatatparam_valor_uvt[".googleLikeFields"][] = "pmv_valoruve";



$tdatatparam_valor_uvt[".tableType"] = "list";

$tdatatparam_valor_uvt[".printerPageOrientation"] = 0;
$tdatatparam_valor_uvt[".nPrinterPageScale"] = 100;

$tdatatparam_valor_uvt[".nPrinterSplitRecords"] = 40;

$tdatatparam_valor_uvt[".geocodingEnabled"] = false;










$tdatatparam_valor_uvt[".pageSize"] = 20;

$tdatatparam_valor_uvt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_valor_uvt[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_valor_uvt[".orderindexes"] = array();


$tdatatparam_valor_uvt[".sqlHead"] = "SELECT pmv_id,  	pmv_vigencia,  	pmv_uvt,  	pmv_numuvt,  	pmv_valoruve";
$tdatatparam_valor_uvt[".sqlFrom"] = "FROM tparam_valor_uvt";
$tdatatparam_valor_uvt[".sqlWhereExpr"] = "";
$tdatatparam_valor_uvt[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_valor_uvt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_valor_uvt[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_valor_uvt[".highlightSearchResults"] = true;

$tableKeystparam_valor_uvt = array();
$tableKeystparam_valor_uvt[] = "pmv_id";
$tdatatparam_valor_uvt[".Keys"] = $tableKeystparam_valor_uvt;


$tdatatparam_valor_uvt[".hideMobileList"] = array();




//	pmv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pmv_id";
	$fdata["GoodName"] = "pmv_id";
	$fdata["ownerTable"] = "tparam_valor_uvt";
	$fdata["Label"] = GetFieldLabel("tparam_valor_uvt","pmv_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "pmv_id";

		$fdata["sourceSingle"] = "pmv_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmv_id";

	
	
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


	$tdatatparam_valor_uvt["pmv_id"] = $fdata;
		$tdatatparam_valor_uvt[".searchableFields"][] = "pmv_id";
//	pmv_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pmv_vigencia";
	$fdata["GoodName"] = "pmv_vigencia";
	$fdata["ownerTable"] = "tparam_valor_uvt";
	$fdata["Label"] = GetFieldLabel("tparam_valor_uvt","pmv_vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "pmv_vigencia";

		$fdata["sourceSingle"] = "pmv_vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmv_vigencia";

	
	
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
	$edata["LookupTable"] = "global_periodos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "periodo_name";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "periodo_name";

	

	
	$edata["LookupOrderBy"] = "periodo_name";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_valor_uvt["pmv_vigencia"] = $fdata;
		$tdatatparam_valor_uvt[".searchableFields"][] = "pmv_vigencia";
//	pmv_uvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pmv_uvt";
	$fdata["GoodName"] = "pmv_uvt";
	$fdata["ownerTable"] = "tparam_valor_uvt";
	$fdata["Label"] = GetFieldLabel("tparam_valor_uvt","pmv_uvt");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "pmv_uvt";

		$fdata["sourceSingle"] = "pmv_uvt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmv_uvt";

	
	
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


	$tdatatparam_valor_uvt["pmv_uvt"] = $fdata;
		$tdatatparam_valor_uvt[".searchableFields"][] = "pmv_uvt";
//	pmv_numuvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pmv_numuvt";
	$fdata["GoodName"] = "pmv_numuvt";
	$fdata["ownerTable"] = "tparam_valor_uvt";
	$fdata["Label"] = GetFieldLabel("tparam_valor_uvt","pmv_numuvt");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pmv_numuvt";

		$fdata["sourceSingle"] = "pmv_numuvt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmv_numuvt";

	
	
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


	$tdatatparam_valor_uvt["pmv_numuvt"] = $fdata;
		$tdatatparam_valor_uvt[".searchableFields"][] = "pmv_numuvt";
//	pmv_valoruve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pmv_valoruve";
	$fdata["GoodName"] = "pmv_valoruve";
	$fdata["ownerTable"] = "tparam_valor_uvt";
	$fdata["Label"] = GetFieldLabel("tparam_valor_uvt","pmv_valoruve");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "pmv_valoruve";

		$fdata["sourceSingle"] = "pmv_valoruve";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmv_valoruve";

	
	
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


	$tdatatparam_valor_uvt["pmv_valoruve"] = $fdata;
		$tdatatparam_valor_uvt[".searchableFields"][] = "pmv_valoruve";


$tables_data["tparam_valor_uvt"]=&$tdatatparam_valor_uvt;
$field_labels["tparam_valor_uvt"] = &$fieldLabelstparam_valor_uvt;
$fieldToolTips["tparam_valor_uvt"] = &$fieldToolTipstparam_valor_uvt;
$placeHolders["tparam_valor_uvt"] = &$placeHolderstparam_valor_uvt;
$page_titles["tparam_valor_uvt"] = &$pageTitlestparam_valor_uvt;


changeTextControlsToDate( "tparam_valor_uvt" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_valor_uvt"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_valor_uvt"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_valor_uvt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pmv_id,  	pmv_vigencia,  	pmv_uvt,  	pmv_numuvt,  	pmv_valoruve";
$proto0["m_strFrom"] = "FROM tparam_valor_uvt";
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
	"m_strName" => "pmv_id",
	"m_strTable" => "tparam_valor_uvt",
	"m_srcTableName" => "tparam_valor_uvt"
));

$proto6["m_sql"] = "pmv_id";
$proto6["m_srcTableName"] = "tparam_valor_uvt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pmv_vigencia",
	"m_strTable" => "tparam_valor_uvt",
	"m_srcTableName" => "tparam_valor_uvt"
));

$proto8["m_sql"] = "pmv_vigencia";
$proto8["m_srcTableName"] = "tparam_valor_uvt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pmv_uvt",
	"m_strTable" => "tparam_valor_uvt",
	"m_srcTableName" => "tparam_valor_uvt"
));

$proto10["m_sql"] = "pmv_uvt";
$proto10["m_srcTableName"] = "tparam_valor_uvt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pmv_numuvt",
	"m_strTable" => "tparam_valor_uvt",
	"m_srcTableName" => "tparam_valor_uvt"
));

$proto12["m_sql"] = "pmv_numuvt";
$proto12["m_srcTableName"] = "tparam_valor_uvt";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pmv_valoruve",
	"m_strTable" => "tparam_valor_uvt",
	"m_srcTableName" => "tparam_valor_uvt"
));

$proto14["m_sql"] = "pmv_valoruve";
$proto14["m_srcTableName"] = "tparam_valor_uvt";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tparam_valor_uvt";
$proto17["m_srcTableName"] = "tparam_valor_uvt";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "pmv_id";
$proto17["m_columns"][] = "pmv_vigencia";
$proto17["m_columns"][] = "pmv_uvt";
$proto17["m_columns"][] = "pmv_numuvt";
$proto17["m_columns"][] = "pmv_valoruve";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tparam_valor_uvt";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tparam_valor_uvt";
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
$proto0["m_srcTableName"]="tparam_valor_uvt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_valor_uvt = createSqlQuery_tparam_valor_uvt();


	
								;

					

$tdatatparam_valor_uvt[".sqlquery"] = $queryData_tparam_valor_uvt;



include_once(getabspath("include/tparam_valor_uvt_events.php"));
$tdatatparam_valor_uvt[".hasEvents"] = true;

?>