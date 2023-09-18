<?php
$tdataglobal_type_legal = array();
$tdataglobal_type_legal[".searchableFields"] = array();
$tdataglobal_type_legal[".ShortName"] = "global_type_legal";
$tdataglobal_type_legal[".OwnerID"] = "";
$tdataglobal_type_legal[".OriginalTable"] = "global_type_legal";


$tdataglobal_type_legal[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataglobal_type_legal[".originalPagesByType"] = $tdataglobal_type_legal[".pagesByType"];
$tdataglobal_type_legal[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataglobal_type_legal[".originalPages"] = $tdataglobal_type_legal[".pages"];
$tdataglobal_type_legal[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdataglobal_type_legal[".originalDefaultPages"] = $tdataglobal_type_legal[".defaultPages"];

//	field labels
$fieldLabelsglobal_type_legal = array();
$fieldToolTipsglobal_type_legal = array();
$pageTitlesglobal_type_legal = array();
$placeHoldersglobal_type_legal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_type_legal["Spanish"] = array();
	$fieldToolTipsglobal_type_legal["Spanish"] = array();
	$placeHoldersglobal_type_legal["Spanish"] = array();
	$pageTitlesglobal_type_legal["Spanish"] = array();
	$fieldLabelsglobal_type_legal["Spanish"]["legal_code"] = "Legal Code";
	$fieldToolTipsglobal_type_legal["Spanish"]["legal_code"] = "";
	$placeHoldersglobal_type_legal["Spanish"]["legal_code"] = "";
	$fieldLabelsglobal_type_legal["Spanish"]["legal_id"] = "Legal Id";
	$fieldToolTipsglobal_type_legal["Spanish"]["legal_id"] = "";
	$placeHoldersglobal_type_legal["Spanish"]["legal_id"] = "";
	$fieldLabelsglobal_type_legal["Spanish"]["legal_name"] = "Legal Name";
	$fieldToolTipsglobal_type_legal["Spanish"]["legal_name"] = "";
	$placeHoldersglobal_type_legal["Spanish"]["legal_name"] = "";
	if (count($fieldToolTipsglobal_type_legal["Spanish"]))
		$tdataglobal_type_legal[".isUseToolTips"] = true;
}


	$tdataglobal_type_legal[".NCSearch"] = true;



$tdataglobal_type_legal[".shortTableName"] = "global_type_legal";
$tdataglobal_type_legal[".nSecOptions"] = 0;

$tdataglobal_type_legal[".mainTableOwnerID"] = "";
$tdataglobal_type_legal[".entityType"] = 0;
$tdataglobal_type_legal[".connId"] = "dbrf_at_127_0_0_1";


$tdataglobal_type_legal[".strOriginalTableName"] = "global_type_legal";

	



$tdataglobal_type_legal[".showAddInPopup"] = false;

$tdataglobal_type_legal[".showEditInPopup"] = false;

$tdataglobal_type_legal[".showViewInPopup"] = false;

$tdataglobal_type_legal[".listAjax"] = false;
//	temporary
//$tdataglobal_type_legal[".listAjax"] = false;

	$tdataglobal_type_legal[".audit"] = false;

	$tdataglobal_type_legal[".locking"] = false;


$pages = $tdataglobal_type_legal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_type_legal[".edit"] = true;
	$tdataglobal_type_legal[".afterEditAction"] = 1;
	$tdataglobal_type_legal[".closePopupAfterEdit"] = 1;
	$tdataglobal_type_legal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_type_legal[".add"] = true;
$tdataglobal_type_legal[".afterAddAction"] = 1;
$tdataglobal_type_legal[".closePopupAfterAdd"] = 1;
$tdataglobal_type_legal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_type_legal[".list"] = true;
}



$tdataglobal_type_legal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_type_legal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_type_legal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_type_legal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_type_legal[".printFriendly"] = true;
}



$tdataglobal_type_legal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_type_legal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_type_legal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_type_legal[".isUseAjaxSuggest"] = true;



												

$tdataglobal_type_legal[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_type_legal[".buttonsAdded"] = false;

$tdataglobal_type_legal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_type_legal[".isUseTimeForSearch"] = false;


$tdataglobal_type_legal[".badgeColor"] = "9ACD32";


$tdataglobal_type_legal[".allSearchFields"] = array();
$tdataglobal_type_legal[".filterFields"] = array();
$tdataglobal_type_legal[".requiredSearchFields"] = array();

$tdataglobal_type_legal[".googleLikeFields"] = array();
$tdataglobal_type_legal[".googleLikeFields"][] = "legal_id";
$tdataglobal_type_legal[".googleLikeFields"][] = "legal_code";
$tdataglobal_type_legal[".googleLikeFields"][] = "legal_name";



$tdataglobal_type_legal[".tableType"] = "list";

$tdataglobal_type_legal[".printerPageOrientation"] = 0;
$tdataglobal_type_legal[".nPrinterPageScale"] = 100;

$tdataglobal_type_legal[".nPrinterSplitRecords"] = 40;

$tdataglobal_type_legal[".geocodingEnabled"] = false;










$tdataglobal_type_legal[".pageSize"] = 20;

$tdataglobal_type_legal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_type_legal[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_type_legal[".orderindexes"] = array();


$tdataglobal_type_legal[".sqlHead"] = "SELECT legal_id,  	legal_code,  	legal_name";
$tdataglobal_type_legal[".sqlFrom"] = "FROM global_type_legal";
$tdataglobal_type_legal[".sqlWhereExpr"] = "";
$tdataglobal_type_legal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_type_legal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_type_legal[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_type_legal[".highlightSearchResults"] = true;

$tableKeysglobal_type_legal = array();
$tableKeysglobal_type_legal[] = "legal_id";
$tdataglobal_type_legal[".Keys"] = $tableKeysglobal_type_legal;


$tdataglobal_type_legal[".hideMobileList"] = array();




//	legal_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "legal_id";
	$fdata["GoodName"] = "legal_id";
	$fdata["ownerTable"] = "global_type_legal";
	$fdata["Label"] = GetFieldLabel("global_type_legal","legal_id");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "legal_id";

		$fdata["sourceSingle"] = "legal_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal_id";

	
	
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


	$tdataglobal_type_legal["legal_id"] = $fdata;
		$tdataglobal_type_legal[".searchableFields"][] = "legal_id";
//	legal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "legal_code";
	$fdata["GoodName"] = "legal_code";
	$fdata["ownerTable"] = "global_type_legal";
	$fdata["Label"] = GetFieldLabel("global_type_legal","legal_code");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "legal_code";

		$fdata["sourceSingle"] = "legal_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal_code";

	
	
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


	$tdataglobal_type_legal["legal_code"] = $fdata;
		$tdataglobal_type_legal[".searchableFields"][] = "legal_code";
//	legal_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "legal_name";
	$fdata["GoodName"] = "legal_name";
	$fdata["ownerTable"] = "global_type_legal";
	$fdata["Label"] = GetFieldLabel("global_type_legal","legal_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal_name";

		$fdata["sourceSingle"] = "legal_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal_name";

	
	
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


	$tdataglobal_type_legal["legal_name"] = $fdata;
		$tdataglobal_type_legal[".searchableFields"][] = "legal_name";


$tables_data["global_type_legal"]=&$tdataglobal_type_legal;
$field_labels["global_type_legal"] = &$fieldLabelsglobal_type_legal;
$fieldToolTips["global_type_legal"] = &$fieldToolTipsglobal_type_legal;
$placeHolders["global_type_legal"] = &$placeHoldersglobal_type_legal;
$page_titles["global_type_legal"] = &$pageTitlesglobal_type_legal;


changeTextControlsToDate( "global_type_legal" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_type_legal"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_type_legal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_type_legal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "legal_id,  	legal_code,  	legal_name";
$proto0["m_strFrom"] = "FROM global_type_legal";
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
	"m_strName" => "legal_id",
	"m_strTable" => "global_type_legal",
	"m_srcTableName" => "global_type_legal"
));

$proto6["m_sql"] = "legal_id";
$proto6["m_srcTableName"] = "global_type_legal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "legal_code",
	"m_strTable" => "global_type_legal",
	"m_srcTableName" => "global_type_legal"
));

$proto8["m_sql"] = "legal_code";
$proto8["m_srcTableName"] = "global_type_legal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "legal_name",
	"m_strTable" => "global_type_legal",
	"m_srcTableName" => "global_type_legal"
));

$proto10["m_sql"] = "legal_name";
$proto10["m_srcTableName"] = "global_type_legal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "global_type_legal";
$proto13["m_srcTableName"] = "global_type_legal";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "legal_id";
$proto13["m_columns"][] = "legal_code";
$proto13["m_columns"][] = "legal_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "global_type_legal";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "global_type_legal";
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
$proto0["m_srcTableName"]="global_type_legal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_type_legal = createSqlQuery_global_type_legal();


	
								;

			

$tdataglobal_type_legal[".sqlquery"] = $queryData_global_type_legal;



$tdataglobal_type_legal[".hasEvents"] = false;

?>