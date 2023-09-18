<?php
$tdataglobal_periodos = array();
$tdataglobal_periodos[".searchableFields"] = array();
$tdataglobal_periodos[".ShortName"] = "global_periodos";
$tdataglobal_periodos[".OwnerID"] = "";
$tdataglobal_periodos[".OriginalTable"] = "global_periodos";


$tdataglobal_periodos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" );
$tdataglobal_periodos[".originalPagesByType"] = $tdataglobal_periodos[".pagesByType"];
$tdataglobal_periodos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" ) );
$tdataglobal_periodos[".originalPages"] = $tdataglobal_periodos[".pages"];
$tdataglobal_periodos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"view\":\"view\"}" );
$tdataglobal_periodos[".originalDefaultPages"] = $tdataglobal_periodos[".defaultPages"];

//	field labels
$fieldLabelsglobal_periodos = array();
$fieldToolTipsglobal_periodos = array();
$pageTitlesglobal_periodos = array();
$placeHoldersglobal_periodos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_periodos["Spanish"] = array();
	$fieldToolTipsglobal_periodos["Spanish"] = array();
	$placeHoldersglobal_periodos["Spanish"] = array();
	$pageTitlesglobal_periodos["Spanish"] = array();
	$fieldLabelsglobal_periodos["Spanish"]["periodo_id"] = "Periodo Id";
	$fieldToolTipsglobal_periodos["Spanish"]["periodo_id"] = "";
	$placeHoldersglobal_periodos["Spanish"]["periodo_id"] = "";
	$fieldLabelsglobal_periodos["Spanish"]["periodo_name"] = "Periodo";
	$fieldToolTipsglobal_periodos["Spanish"]["periodo_name"] = "";
	$placeHoldersglobal_periodos["Spanish"]["periodo_name"] = "";
	if (count($fieldToolTipsglobal_periodos["Spanish"]))
		$tdataglobal_periodos[".isUseToolTips"] = true;
}


	$tdataglobal_periodos[".NCSearch"] = true;



$tdataglobal_periodos[".shortTableName"] = "global_periodos";
$tdataglobal_periodos[".nSecOptions"] = 0;

$tdataglobal_periodos[".mainTableOwnerID"] = "";
$tdataglobal_periodos[".entityType"] = 0;
$tdataglobal_periodos[".connId"] = "dbrf_at_127_0_0_1";


$tdataglobal_periodos[".strOriginalTableName"] = "global_periodos";

	



$tdataglobal_periodos[".showAddInPopup"] = false;

$tdataglobal_periodos[".showEditInPopup"] = false;

$tdataglobal_periodos[".showViewInPopup"] = false;

$tdataglobal_periodos[".listAjax"] = false;
//	temporary
//$tdataglobal_periodos[".listAjax"] = false;

	$tdataglobal_periodos[".audit"] = false;

	$tdataglobal_periodos[".locking"] = false;


$pages = $tdataglobal_periodos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_periodos[".edit"] = true;
	$tdataglobal_periodos[".afterEditAction"] = 1;
	$tdataglobal_periodos[".closePopupAfterEdit"] = 1;
	$tdataglobal_periodos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_periodos[".add"] = true;
$tdataglobal_periodos[".afterAddAction"] = 1;
$tdataglobal_periodos[".closePopupAfterAdd"] = 1;
$tdataglobal_periodos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_periodos[".list"] = true;
}



$tdataglobal_periodos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_periodos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_periodos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_periodos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_periodos[".printFriendly"] = true;
}



$tdataglobal_periodos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_periodos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_periodos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_periodos[".isUseAjaxSuggest"] = true;



												

$tdataglobal_periodos[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_periodos[".buttonsAdded"] = false;

$tdataglobal_periodos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_periodos[".isUseTimeForSearch"] = false;


$tdataglobal_periodos[".badgeColor"] = "6B8E23";


$tdataglobal_periodos[".allSearchFields"] = array();
$tdataglobal_periodos[".filterFields"] = array();
$tdataglobal_periodos[".requiredSearchFields"] = array();

$tdataglobal_periodos[".googleLikeFields"] = array();
$tdataglobal_periodos[".googleLikeFields"][] = "periodo_id";
$tdataglobal_periodos[".googleLikeFields"][] = "periodo_name";



$tdataglobal_periodos[".tableType"] = "list";

$tdataglobal_periodos[".printerPageOrientation"] = 0;
$tdataglobal_periodos[".nPrinterPageScale"] = 100;

$tdataglobal_periodos[".nPrinterSplitRecords"] = 40;

$tdataglobal_periodos[".geocodingEnabled"] = false;










$tdataglobal_periodos[".pageSize"] = 20;

$tdataglobal_periodos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_periodos[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_periodos[".orderindexes"] = array();


$tdataglobal_periodos[".sqlHead"] = "SELECT periodo_id,  	periodo_name";
$tdataglobal_periodos[".sqlFrom"] = "FROM global_periodos";
$tdataglobal_periodos[".sqlWhereExpr"] = "";
$tdataglobal_periodos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_periodos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_periodos[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_periodos[".highlightSearchResults"] = true;

$tableKeysglobal_periodos = array();
$tableKeysglobal_periodos[] = "periodo_id";
$tdataglobal_periodos[".Keys"] = $tableKeysglobal_periodos;


$tdataglobal_periodos[".hideMobileList"] = array();




//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "global_periodos";
	$fdata["Label"] = GetFieldLabel("global_periodos","periodo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "periodo_id";

		$fdata["sourceSingle"] = "periodo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_id";

	
	
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


	$tdataglobal_periodos["periodo_id"] = $fdata;
		$tdataglobal_periodos[".searchableFields"][] = "periodo_id";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "global_periodos";
	$fdata["Label"] = GetFieldLabel("global_periodos","periodo_name");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "periodo_name";

		$fdata["sourceSingle"] = "periodo_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Periodo ya existe!", "messageType" => "Text");

	
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


	$tdataglobal_periodos["periodo_name"] = $fdata;
		$tdataglobal_periodos[".searchableFields"][] = "periodo_name";


$tables_data["global_periodos"]=&$tdataglobal_periodos;
$field_labels["global_periodos"] = &$fieldLabelsglobal_periodos;
$fieldToolTips["global_periodos"] = &$fieldToolTipsglobal_periodos;
$placeHolders["global_periodos"] = &$placeHoldersglobal_periodos;
$page_titles["global_periodos"] = &$pageTitlesglobal_periodos;


changeTextControlsToDate( "global_periodos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_periodos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_periodos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_periodos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "periodo_id,  	periodo_name";
$proto0["m_strFrom"] = "FROM global_periodos";
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
	"m_strName" => "periodo_id",
	"m_strTable" => "global_periodos",
	"m_srcTableName" => "global_periodos"
));

$proto6["m_sql"] = "periodo_id";
$proto6["m_srcTableName"] = "global_periodos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "global_periodos",
	"m_srcTableName" => "global_periodos"
));

$proto8["m_sql"] = "periodo_name";
$proto8["m_srcTableName"] = "global_periodos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_periodos";
$proto11["m_srcTableName"] = "global_periodos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "periodo_id";
$proto11["m_columns"][] = "periodo_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_periodos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_periodos";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_periodos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_periodos = createSqlQuery_global_periodos();


	
								;

		

$tdataglobal_periodos[".sqlquery"] = $queryData_global_periodos;



$tdataglobal_periodos[".hasEvents"] = false;

?>