<?php
$tdatatparam_status = array();
$tdatatparam_status[".searchableFields"] = array();
$tdatatparam_status[".ShortName"] = "tparam_status";
$tdatatparam_status[".OwnerID"] = "";
$tdatatparam_status[".OriginalTable"] = "tparam_status";


$tdatatparam_status[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_status[".originalPagesByType"] = $tdatatparam_status[".pagesByType"];
$tdatatparam_status[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_status[".originalPages"] = $tdatatparam_status[".pages"];
$tdatatparam_status[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_status[".originalDefaultPages"] = $tdatatparam_status[".defaultPages"];

//	field labels
$fieldLabelstparam_status = array();
$fieldToolTipstparam_status = array();
$pageTitlestparam_status = array();
$placeHolderstparam_status = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_status["Spanish"] = array();
	$fieldToolTipstparam_status["Spanish"] = array();
	$placeHolderstparam_status["Spanish"] = array();
	$pageTitlestparam_status["Spanish"] = array();
	$fieldLabelstparam_status["Spanish"]["status_id"] = "Status Id";
	$fieldToolTipstparam_status["Spanish"]["status_id"] = "";
	$placeHolderstparam_status["Spanish"]["status_id"] = "";
	$fieldLabelstparam_status["Spanish"]["status_name"] = "Status Name";
	$fieldToolTipstparam_status["Spanish"]["status_name"] = "";
	$placeHolderstparam_status["Spanish"]["status_name"] = "";
	$fieldLabelstparam_status["Spanish"]["status_name_a"] = "Status Name A";
	$fieldToolTipstparam_status["Spanish"]["status_name_a"] = "";
	$placeHolderstparam_status["Spanish"]["status_name_a"] = "";
	if (count($fieldToolTipstparam_status["Spanish"]))
		$tdatatparam_status[".isUseToolTips"] = true;
}


	$tdatatparam_status[".NCSearch"] = true;



$tdatatparam_status[".shortTableName"] = "tparam_status";
$tdatatparam_status[".nSecOptions"] = 0;

$tdatatparam_status[".mainTableOwnerID"] = "";
$tdatatparam_status[".entityType"] = 0;
$tdatatparam_status[".connId"] = "dbrf_at_127_0_0_1";


$tdatatparam_status[".strOriginalTableName"] = "tparam_status";

	



$tdatatparam_status[".showAddInPopup"] = false;

$tdatatparam_status[".showEditInPopup"] = false;

$tdatatparam_status[".showViewInPopup"] = false;

$tdatatparam_status[".listAjax"] = false;
//	temporary
//$tdatatparam_status[".listAjax"] = false;

	$tdatatparam_status[".audit"] = false;

	$tdatatparam_status[".locking"] = false;


$pages = $tdatatparam_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_status[".edit"] = true;
	$tdatatparam_status[".afterEditAction"] = 1;
	$tdatatparam_status[".closePopupAfterEdit"] = 1;
	$tdatatparam_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_status[".add"] = true;
$tdatatparam_status[".afterAddAction"] = 1;
$tdatatparam_status[".closePopupAfterAdd"] = 1;
$tdatatparam_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_status[".list"] = true;
}



$tdatatparam_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_status[".printFriendly"] = true;
}



$tdatatparam_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_status[".isUseAjaxSuggest"] = true;



												

$tdatatparam_status[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_status[".buttonsAdded"] = false;

$tdatatparam_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_status[".isUseTimeForSearch"] = false;


$tdatatparam_status[".badgeColor"] = "778899";


$tdatatparam_status[".allSearchFields"] = array();
$tdatatparam_status[".filterFields"] = array();
$tdatatparam_status[".requiredSearchFields"] = array();

$tdatatparam_status[".googleLikeFields"] = array();
$tdatatparam_status[".googleLikeFields"][] = "status_id";
$tdatatparam_status[".googleLikeFields"][] = "status_name";
$tdatatparam_status[".googleLikeFields"][] = "status_name_a";



$tdatatparam_status[".tableType"] = "list";

$tdatatparam_status[".printerPageOrientation"] = 0;
$tdatatparam_status[".nPrinterPageScale"] = 100;

$tdatatparam_status[".nPrinterSplitRecords"] = 40;

$tdatatparam_status[".geocodingEnabled"] = false;










$tdatatparam_status[".pageSize"] = 20;

$tdatatparam_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_status[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_status[".orderindexes"] = array();


$tdatatparam_status[".sqlHead"] = "SELECT status_id,  	status_name,  	status_name_a";
$tdatatparam_status[".sqlFrom"] = "FROM tparam_status";
$tdatatparam_status[".sqlWhereExpr"] = "";
$tdatatparam_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_status[".highlightSearchResults"] = true;

$tableKeystparam_status = array();
$tableKeystparam_status[] = "status_id";
$tdatatparam_status[".Keys"] = $tableKeystparam_status;


$tdatatparam_status[".hideMobileList"] = array();




//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "tparam_status";
	$fdata["Label"] = GetFieldLabel("tparam_status","status_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "status_id";

		$fdata["sourceSingle"] = "status_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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


	$tdatatparam_status["status_id"] = $fdata;
		$tdatatparam_status[".searchableFields"][] = "status_id";
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "tparam_status";
	$fdata["Label"] = GetFieldLabel("tparam_status","status_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name";

		$fdata["sourceSingle"] = "status_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_status["status_name"] = $fdata;
		$tdatatparam_status[".searchableFields"][] = "status_name";
//	status_name_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_name_a";
	$fdata["GoodName"] = "status_name_a";
	$fdata["ownerTable"] = "tparam_status";
	$fdata["Label"] = GetFieldLabel("tparam_status","status_name_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name_a";

		$fdata["sourceSingle"] = "status_name_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name_a";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_status["status_name_a"] = $fdata;
		$tdatatparam_status[".searchableFields"][] = "status_name_a";


$tables_data["tparam_status"]=&$tdatatparam_status;
$field_labels["tparam_status"] = &$fieldLabelstparam_status;
$fieldToolTips["tparam_status"] = &$fieldToolTipstparam_status;
$placeHolders["tparam_status"] = &$placeHolderstparam_status;
$page_titles["tparam_status"] = &$pageTitlestparam_status;


changeTextControlsToDate( "tparam_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_id,  	status_name,  	status_name_a";
$proto0["m_strFrom"] = "FROM tparam_status";
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
	"m_strName" => "status_id",
	"m_strTable" => "tparam_status",
	"m_srcTableName" => "tparam_status"
));

$proto6["m_sql"] = "status_id";
$proto6["m_srcTableName"] = "tparam_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "tparam_status",
	"m_srcTableName" => "tparam_status"
));

$proto8["m_sql"] = "status_name";
$proto8["m_srcTableName"] = "tparam_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name_a",
	"m_strTable" => "tparam_status",
	"m_srcTableName" => "tparam_status"
));

$proto10["m_sql"] = "status_name_a";
$proto10["m_srcTableName"] = "tparam_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_status";
$proto13["m_srcTableName"] = "tparam_status";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "status_id";
$proto13["m_columns"][] = "status_name";
$proto13["m_columns"][] = "status_name_a";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_status";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_status";
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
$proto0["m_srcTableName"]="tparam_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_status = createSqlQuery_tparam_status();


	
								;

			

$tdatatparam_status[".sqlquery"] = $queryData_tparam_status;



$tdatatparam_status[".hasEvents"] = false;

?>