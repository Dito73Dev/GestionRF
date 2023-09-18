<?php
$tdataglobal_type_tax = array();
$tdataglobal_type_tax[".searchableFields"] = array();
$tdataglobal_type_tax[".ShortName"] = "global_type_tax";
$tdataglobal_type_tax[".OwnerID"] = "";
$tdataglobal_type_tax[".OriginalTable"] = "global_type_tax";


$tdataglobal_type_tax[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_type_tax[".originalPagesByType"] = $tdataglobal_type_tax[".pagesByType"];
$tdataglobal_type_tax[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_type_tax[".originalPages"] = $tdataglobal_type_tax[".pages"];
$tdataglobal_type_tax[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_type_tax[".originalDefaultPages"] = $tdataglobal_type_tax[".defaultPages"];

//	field labels
$fieldLabelsglobal_type_tax = array();
$fieldToolTipsglobal_type_tax = array();
$pageTitlesglobal_type_tax = array();
$placeHoldersglobal_type_tax = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_type_tax["Spanish"] = array();
	$fieldToolTipsglobal_type_tax["Spanish"] = array();
	$placeHoldersglobal_type_tax["Spanish"] = array();
	$pageTitlesglobal_type_tax["Spanish"] = array();
	$fieldLabelsglobal_type_tax["Spanish"]["tax_code"] = "Tax Code";
	$fieldToolTipsglobal_type_tax["Spanish"]["tax_code"] = "";
	$placeHoldersglobal_type_tax["Spanish"]["tax_code"] = "";
	$fieldLabelsglobal_type_tax["Spanish"]["tax_id"] = "Tax Id";
	$fieldToolTipsglobal_type_tax["Spanish"]["tax_id"] = "";
	$placeHoldersglobal_type_tax["Spanish"]["tax_id"] = "";
	$fieldLabelsglobal_type_tax["Spanish"]["tax_name"] = "Tax Name";
	$fieldToolTipsglobal_type_tax["Spanish"]["tax_name"] = "";
	$placeHoldersglobal_type_tax["Spanish"]["tax_name"] = "";
	if (count($fieldToolTipsglobal_type_tax["Spanish"]))
		$tdataglobal_type_tax[".isUseToolTips"] = true;
}


	$tdataglobal_type_tax[".NCSearch"] = true;



$tdataglobal_type_tax[".shortTableName"] = "global_type_tax";
$tdataglobal_type_tax[".nSecOptions"] = 0;

$tdataglobal_type_tax[".mainTableOwnerID"] = "";
$tdataglobal_type_tax[".entityType"] = 0;
$tdataglobal_type_tax[".connId"] = "dbrf_at_127_0_0_1";


$tdataglobal_type_tax[".strOriginalTableName"] = "global_type_tax";

	



$tdataglobal_type_tax[".showAddInPopup"] = false;

$tdataglobal_type_tax[".showEditInPopup"] = false;

$tdataglobal_type_tax[".showViewInPopup"] = false;

$tdataglobal_type_tax[".listAjax"] = false;
//	temporary
//$tdataglobal_type_tax[".listAjax"] = false;

	$tdataglobal_type_tax[".audit"] = false;

	$tdataglobal_type_tax[".locking"] = false;


$pages = $tdataglobal_type_tax[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_type_tax[".edit"] = true;
	$tdataglobal_type_tax[".afterEditAction"] = 1;
	$tdataglobal_type_tax[".closePopupAfterEdit"] = 1;
	$tdataglobal_type_tax[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_type_tax[".add"] = true;
$tdataglobal_type_tax[".afterAddAction"] = 1;
$tdataglobal_type_tax[".closePopupAfterAdd"] = 1;
$tdataglobal_type_tax[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_type_tax[".list"] = true;
}



$tdataglobal_type_tax[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_type_tax[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_type_tax[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_type_tax[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_type_tax[".printFriendly"] = true;
}



$tdataglobal_type_tax[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_type_tax[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_type_tax[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_type_tax[".isUseAjaxSuggest"] = true;



												

$tdataglobal_type_tax[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_type_tax[".buttonsAdded"] = false;

$tdataglobal_type_tax[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_type_tax[".isUseTimeForSearch"] = false;


$tdataglobal_type_tax[".badgeColor"] = "D2691E";


$tdataglobal_type_tax[".allSearchFields"] = array();
$tdataglobal_type_tax[".filterFields"] = array();
$tdataglobal_type_tax[".requiredSearchFields"] = array();

$tdataglobal_type_tax[".googleLikeFields"] = array();
$tdataglobal_type_tax[".googleLikeFields"][] = "tax_id";
$tdataglobal_type_tax[".googleLikeFields"][] = "tax_code";
$tdataglobal_type_tax[".googleLikeFields"][] = "tax_name";



$tdataglobal_type_tax[".tableType"] = "list";

$tdataglobal_type_tax[".printerPageOrientation"] = 0;
$tdataglobal_type_tax[".nPrinterPageScale"] = 100;

$tdataglobal_type_tax[".nPrinterSplitRecords"] = 40;

$tdataglobal_type_tax[".geocodingEnabled"] = false;










$tdataglobal_type_tax[".pageSize"] = 20;

$tdataglobal_type_tax[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_type_tax[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_type_tax[".orderindexes"] = array();


$tdataglobal_type_tax[".sqlHead"] = "SELECT tax_id,  	tax_code,  	tax_name";
$tdataglobal_type_tax[".sqlFrom"] = "FROM global_type_tax";
$tdataglobal_type_tax[".sqlWhereExpr"] = "";
$tdataglobal_type_tax[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_type_tax[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_type_tax[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_type_tax[".highlightSearchResults"] = true;

$tableKeysglobal_type_tax = array();
$tableKeysglobal_type_tax[] = "tax_id";
$tdataglobal_type_tax[".Keys"] = $tableKeysglobal_type_tax;


$tdataglobal_type_tax[".hideMobileList"] = array();




//	tax_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tax_id";
	$fdata["GoodName"] = "tax_id";
	$fdata["ownerTable"] = "global_type_tax";
	$fdata["Label"] = GetFieldLabel("global_type_tax","tax_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tax_id";

		$fdata["sourceSingle"] = "tax_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tax_id";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdataglobal_type_tax["tax_id"] = $fdata;
		$tdataglobal_type_tax[".searchableFields"][] = "tax_id";
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "global_type_tax";
	$fdata["Label"] = GetFieldLabel("global_type_tax","tax_code");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "tax_code";

		$fdata["sourceSingle"] = "tax_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tax_code";

	
	
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


	$tdataglobal_type_tax["tax_code"] = $fdata;
		$tdataglobal_type_tax[".searchableFields"][] = "tax_code";
//	tax_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tax_name";
	$fdata["GoodName"] = "tax_name";
	$fdata["ownerTable"] = "global_type_tax";
	$fdata["Label"] = GetFieldLabel("global_type_tax","tax_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tax_name";

		$fdata["sourceSingle"] = "tax_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tax_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataglobal_type_tax["tax_name"] = $fdata;
		$tdataglobal_type_tax[".searchableFields"][] = "tax_name";


$tables_data["global_type_tax"]=&$tdataglobal_type_tax;
$field_labels["global_type_tax"] = &$fieldLabelsglobal_type_tax;
$fieldToolTips["global_type_tax"] = &$fieldToolTipsglobal_type_tax;
$placeHolders["global_type_tax"] = &$placeHoldersglobal_type_tax;
$page_titles["global_type_tax"] = &$pageTitlesglobal_type_tax;


changeTextControlsToDate( "global_type_tax" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_type_tax"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_type_tax"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_type_tax()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tax_id,  	tax_code,  	tax_name";
$proto0["m_strFrom"] = "FROM global_type_tax";
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
	"m_strName" => "tax_id",
	"m_strTable" => "global_type_tax",
	"m_srcTableName" => "global_type_tax"
));

$proto6["m_sql"] = "tax_id";
$proto6["m_srcTableName"] = "global_type_tax";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "global_type_tax",
	"m_srcTableName" => "global_type_tax"
));

$proto8["m_sql"] = "tax_code";
$proto8["m_srcTableName"] = "global_type_tax";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_name",
	"m_strTable" => "global_type_tax",
	"m_srcTableName" => "global_type_tax"
));

$proto10["m_sql"] = "tax_name";
$proto10["m_srcTableName"] = "global_type_tax";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "global_type_tax";
$proto13["m_srcTableName"] = "global_type_tax";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "tax_id";
$proto13["m_columns"][] = "tax_code";
$proto13["m_columns"][] = "tax_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "global_type_tax";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "global_type_tax";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_type_tax";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_type_tax = createSqlQuery_global_type_tax();


	
								;

			

$tdataglobal_type_tax[".sqlquery"] = $queryData_global_type_tax;



$tdataglobal_type_tax[".hasEvents"] = false;

?>