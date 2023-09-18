<?php
$tdatatparam_estadoasientos = array();
$tdatatparam_estadoasientos[".searchableFields"] = array();
$tdatatparam_estadoasientos[".ShortName"] = "tparam_estadoasientos";
$tdatatparam_estadoasientos[".OwnerID"] = "";
$tdatatparam_estadoasientos[".OriginalTable"] = "tparam_estadoasientos";


$tdatatparam_estadoasientos[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_estadoasientos[".originalPagesByType"] = $tdatatparam_estadoasientos[".pagesByType"];
$tdatatparam_estadoasientos[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_estadoasientos[".originalPages"] = $tdatatparam_estadoasientos[".pages"];
$tdatatparam_estadoasientos[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_estadoasientos[".originalDefaultPages"] = $tdatatparam_estadoasientos[".defaultPages"];

//	field labels
$fieldLabelstparam_estadoasientos = array();
$fieldToolTipstparam_estadoasientos = array();
$pageTitlestparam_estadoasientos = array();
$placeHolderstparam_estadoasientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estadoasientos["Spanish"] = array();
	$fieldToolTipstparam_estadoasientos["Spanish"] = array();
	$placeHolderstparam_estadoasientos["Spanish"] = array();
	$pageTitlestparam_estadoasientos["Spanish"] = array();
	$fieldLabelstparam_estadoasientos["Spanish"]["estasi_id"] = "Estasi Id";
	$fieldToolTipstparam_estadoasientos["Spanish"]["estasi_id"] = "";
	$placeHolderstparam_estadoasientos["Spanish"]["estasi_id"] = "";
	$fieldLabelstparam_estadoasientos["Spanish"]["estasi_name"] = "Estasi Name";
	$fieldToolTipstparam_estadoasientos["Spanish"]["estasi_name"] = "";
	$placeHolderstparam_estadoasientos["Spanish"]["estasi_name"] = "";
	if (count($fieldToolTipstparam_estadoasientos["Spanish"]))
		$tdatatparam_estadoasientos[".isUseToolTips"] = true;
}


	$tdatatparam_estadoasientos[".NCSearch"] = true;



$tdatatparam_estadoasientos[".shortTableName"] = "tparam_estadoasientos";
$tdatatparam_estadoasientos[".nSecOptions"] = 0;

$tdatatparam_estadoasientos[".mainTableOwnerID"] = "";
$tdatatparam_estadoasientos[".entityType"] = 0;
$tdatatparam_estadoasientos[".connId"] = "dbrf_at_127_0_0_1";


$tdatatparam_estadoasientos[".strOriginalTableName"] = "tparam_estadoasientos";

	



$tdatatparam_estadoasientos[".showAddInPopup"] = false;

$tdatatparam_estadoasientos[".showEditInPopup"] = false;

$tdatatparam_estadoasientos[".showViewInPopup"] = false;

$tdatatparam_estadoasientos[".listAjax"] = false;
//	temporary
//$tdatatparam_estadoasientos[".listAjax"] = false;

	$tdatatparam_estadoasientos[".audit"] = false;

	$tdatatparam_estadoasientos[".locking"] = false;


$pages = $tdatatparam_estadoasientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estadoasientos[".edit"] = true;
	$tdatatparam_estadoasientos[".afterEditAction"] = 1;
	$tdatatparam_estadoasientos[".closePopupAfterEdit"] = 1;
	$tdatatparam_estadoasientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estadoasientos[".add"] = true;
$tdatatparam_estadoasientos[".afterAddAction"] = 1;
$tdatatparam_estadoasientos[".closePopupAfterAdd"] = 1;
$tdatatparam_estadoasientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estadoasientos[".list"] = true;
}



$tdatatparam_estadoasientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estadoasientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estadoasientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estadoasientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estadoasientos[".printFriendly"] = true;
}



$tdatatparam_estadoasientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estadoasientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estadoasientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estadoasientos[".isUseAjaxSuggest"] = true;



												

$tdatatparam_estadoasientos[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estadoasientos[".buttonsAdded"] = false;

$tdatatparam_estadoasientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estadoasientos[".isUseTimeForSearch"] = false;


$tdatatparam_estadoasientos[".badgeColor"] = "778899";


$tdatatparam_estadoasientos[".allSearchFields"] = array();
$tdatatparam_estadoasientos[".filterFields"] = array();
$tdatatparam_estadoasientos[".requiredSearchFields"] = array();

$tdatatparam_estadoasientos[".googleLikeFields"] = array();
$tdatatparam_estadoasientos[".googleLikeFields"][] = "estasi_id";
$tdatatparam_estadoasientos[".googleLikeFields"][] = "estasi_name";



$tdatatparam_estadoasientos[".tableType"] = "list";

$tdatatparam_estadoasientos[".printerPageOrientation"] = 0;
$tdatatparam_estadoasientos[".nPrinterPageScale"] = 100;

$tdatatparam_estadoasientos[".nPrinterSplitRecords"] = 40;

$tdatatparam_estadoasientos[".geocodingEnabled"] = false;










$tdatatparam_estadoasientos[".pageSize"] = 20;

$tdatatparam_estadoasientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estadoasientos[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estadoasientos[".orderindexes"] = array();


$tdatatparam_estadoasientos[".sqlHead"] = "SELECT estasi_id,  	estasi_name";
$tdatatparam_estadoasientos[".sqlFrom"] = "FROM tparam_estadoasientos";
$tdatatparam_estadoasientos[".sqlWhereExpr"] = "";
$tdatatparam_estadoasientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estadoasientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estadoasientos[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estadoasientos[".highlightSearchResults"] = true;

$tableKeystparam_estadoasientos = array();
$tableKeystparam_estadoasientos[] = "estasi_id";
$tdatatparam_estadoasientos[".Keys"] = $tableKeystparam_estadoasientos;


$tdatatparam_estadoasientos[".hideMobileList"] = array();




//	estasi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estasi_id";
	$fdata["GoodName"] = "estasi_id";
	$fdata["ownerTable"] = "tparam_estadoasientos";
	$fdata["Label"] = GetFieldLabel("tparam_estadoasientos","estasi_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estasi_id";

		$fdata["sourceSingle"] = "estasi_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estasi_id";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatatparam_estadoasientos["estasi_id"] = $fdata;
		$tdatatparam_estadoasientos[".searchableFields"][] = "estasi_id";
//	estasi_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estasi_name";
	$fdata["GoodName"] = "estasi_name";
	$fdata["ownerTable"] = "tparam_estadoasientos";
	$fdata["Label"] = GetFieldLabel("tparam_estadoasientos","estasi_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estasi_name";

		$fdata["sourceSingle"] = "estasi_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estasi_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatparam_estadoasientos["estasi_name"] = $fdata;
		$tdatatparam_estadoasientos[".searchableFields"][] = "estasi_name";


$tables_data["tparam_estadoasientos"]=&$tdatatparam_estadoasientos;
$field_labels["tparam_estadoasientos"] = &$fieldLabelstparam_estadoasientos;
$fieldToolTips["tparam_estadoasientos"] = &$fieldToolTipstparam_estadoasientos;
$placeHolders["tparam_estadoasientos"] = &$placeHolderstparam_estadoasientos;
$page_titles["tparam_estadoasientos"] = &$pageTitlestparam_estadoasientos;


changeTextControlsToDate( "tparam_estadoasientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estadoasientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estadoasientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estadoasientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estasi_id,  	estasi_name";
$proto0["m_strFrom"] = "FROM tparam_estadoasientos";
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
	"m_strName" => "estasi_id",
	"m_strTable" => "tparam_estadoasientos",
	"m_srcTableName" => "tparam_estadoasientos"
));

$proto6["m_sql"] = "estasi_id";
$proto6["m_srcTableName"] = "tparam_estadoasientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estasi_name",
	"m_strTable" => "tparam_estadoasientos",
	"m_srcTableName" => "tparam_estadoasientos"
));

$proto8["m_sql"] = "estasi_name";
$proto8["m_srcTableName"] = "tparam_estadoasientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estadoasientos";
$proto11["m_srcTableName"] = "tparam_estadoasientos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estasi_id";
$proto11["m_columns"][] = "estasi_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estadoasientos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estadoasientos";
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
$proto0["m_srcTableName"]="tparam_estadoasientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estadoasientos = createSqlQuery_tparam_estadoasientos();


	
								;

		

$tdatatparam_estadoasientos[".sqlquery"] = $queryData_tparam_estadoasientos;



$tdatatparam_estadoasientos[".hasEvents"] = false;

?>