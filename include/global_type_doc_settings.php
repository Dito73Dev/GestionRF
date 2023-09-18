<?php
$tdataglobal_type_doc = array();
$tdataglobal_type_doc[".searchableFields"] = array();
$tdataglobal_type_doc[".ShortName"] = "global_type_doc";
$tdataglobal_type_doc[".OwnerID"] = "";
$tdataglobal_type_doc[".OriginalTable"] = "global_type_doc";


$tdataglobal_type_doc[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_type_doc[".originalPagesByType"] = $tdataglobal_type_doc[".pagesByType"];
$tdataglobal_type_doc[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_type_doc[".originalPages"] = $tdataglobal_type_doc[".pages"];
$tdataglobal_type_doc[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_type_doc[".originalDefaultPages"] = $tdataglobal_type_doc[".defaultPages"];

//	field labels
$fieldLabelsglobal_type_doc = array();
$fieldToolTipsglobal_type_doc = array();
$pageTitlesglobal_type_doc = array();
$placeHoldersglobal_type_doc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_type_doc["Spanish"] = array();
	$fieldToolTipsglobal_type_doc["Spanish"] = array();
	$placeHoldersglobal_type_doc["Spanish"] = array();
	$pageTitlesglobal_type_doc["Spanish"] = array();
	$fieldLabelsglobal_type_doc["Spanish"]["contractor_type"] = "Contractor Type";
	$fieldToolTipsglobal_type_doc["Spanish"]["contractor_type"] = "";
	$placeHoldersglobal_type_doc["Spanish"]["contractor_type"] = "";
	$fieldLabelsglobal_type_doc["Spanish"]["contractor_type_id"] = "Contractor Type Id";
	$fieldToolTipsglobal_type_doc["Spanish"]["contractor_type_id"] = "";
	$placeHoldersglobal_type_doc["Spanish"]["contractor_type_id"] = "";
	if (count($fieldToolTipsglobal_type_doc["Spanish"]))
		$tdataglobal_type_doc[".isUseToolTips"] = true;
}


	$tdataglobal_type_doc[".NCSearch"] = true;



$tdataglobal_type_doc[".shortTableName"] = "global_type_doc";
$tdataglobal_type_doc[".nSecOptions"] = 0;

$tdataglobal_type_doc[".mainTableOwnerID"] = "";
$tdataglobal_type_doc[".entityType"] = 0;
$tdataglobal_type_doc[".connId"] = "dbrf_at_127_0_0_1";


$tdataglobal_type_doc[".strOriginalTableName"] = "global_type_doc";

	



$tdataglobal_type_doc[".showAddInPopup"] = false;

$tdataglobal_type_doc[".showEditInPopup"] = false;

$tdataglobal_type_doc[".showViewInPopup"] = false;

$tdataglobal_type_doc[".listAjax"] = false;
//	temporary
//$tdataglobal_type_doc[".listAjax"] = false;

	$tdataglobal_type_doc[".audit"] = false;

	$tdataglobal_type_doc[".locking"] = false;


$pages = $tdataglobal_type_doc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_type_doc[".edit"] = true;
	$tdataglobal_type_doc[".afterEditAction"] = 1;
	$tdataglobal_type_doc[".closePopupAfterEdit"] = 1;
	$tdataglobal_type_doc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_type_doc[".add"] = true;
$tdataglobal_type_doc[".afterAddAction"] = 1;
$tdataglobal_type_doc[".closePopupAfterAdd"] = 1;
$tdataglobal_type_doc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_type_doc[".list"] = true;
}



$tdataglobal_type_doc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_type_doc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_type_doc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_type_doc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_type_doc[".printFriendly"] = true;
}



$tdataglobal_type_doc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_type_doc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_type_doc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_type_doc[".isUseAjaxSuggest"] = true;



												

$tdataglobal_type_doc[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_type_doc[".buttonsAdded"] = false;

$tdataglobal_type_doc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_type_doc[".isUseTimeForSearch"] = false;


$tdataglobal_type_doc[".badgeColor"] = "6DA5C8";


$tdataglobal_type_doc[".allSearchFields"] = array();
$tdataglobal_type_doc[".filterFields"] = array();
$tdataglobal_type_doc[".requiredSearchFields"] = array();

$tdataglobal_type_doc[".googleLikeFields"] = array();
$tdataglobal_type_doc[".googleLikeFields"][] = "contractor_type_id";
$tdataglobal_type_doc[".googleLikeFields"][] = "contractor_type";



$tdataglobal_type_doc[".tableType"] = "list";

$tdataglobal_type_doc[".printerPageOrientation"] = 0;
$tdataglobal_type_doc[".nPrinterPageScale"] = 100;

$tdataglobal_type_doc[".nPrinterSplitRecords"] = 40;

$tdataglobal_type_doc[".geocodingEnabled"] = false;










$tdataglobal_type_doc[".pageSize"] = 20;

$tdataglobal_type_doc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_type_doc[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_type_doc[".orderindexes"] = array();


$tdataglobal_type_doc[".sqlHead"] = "SELECT contractor_type_id,  	contractor_type";
$tdataglobal_type_doc[".sqlFrom"] = "FROM global_type_doc";
$tdataglobal_type_doc[".sqlWhereExpr"] = "";
$tdataglobal_type_doc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_type_doc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_type_doc[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_type_doc[".highlightSearchResults"] = true;

$tableKeysglobal_type_doc = array();
$tableKeysglobal_type_doc[] = "contractor_type_id";
$tdataglobal_type_doc[".Keys"] = $tableKeysglobal_type_doc;


$tdataglobal_type_doc[".hideMobileList"] = array();




//	contractor_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_type_id";
	$fdata["GoodName"] = "contractor_type_id";
	$fdata["ownerTable"] = "global_type_doc";
	$fdata["Label"] = GetFieldLabel("global_type_doc","contractor_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_type_id";

		$fdata["sourceSingle"] = "contractor_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type_id";

	
	
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


	$tdataglobal_type_doc["contractor_type_id"] = $fdata;
		$tdataglobal_type_doc[".searchableFields"][] = "contractor_type_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "global_type_doc";
	$fdata["Label"] = GetFieldLabel("global_type_doc","contractor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_type";

		$fdata["sourceSingle"] = "contractor_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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


	$tdataglobal_type_doc["contractor_type"] = $fdata;
		$tdataglobal_type_doc[".searchableFields"][] = "contractor_type";


$tables_data["global_type_doc"]=&$tdataglobal_type_doc;
$field_labels["global_type_doc"] = &$fieldLabelsglobal_type_doc;
$fieldToolTips["global_type_doc"] = &$fieldToolTipsglobal_type_doc;
$placeHolders["global_type_doc"] = &$placeHoldersglobal_type_doc;
$page_titles["global_type_doc"] = &$pageTitlesglobal_type_doc;


changeTextControlsToDate( "global_type_doc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_type_doc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_type_doc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_type_doc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_type_id,  	contractor_type";
$proto0["m_strFrom"] = "FROM global_type_doc";
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
	"m_strName" => "contractor_type_id",
	"m_strTable" => "global_type_doc",
	"m_srcTableName" => "global_type_doc"
));

$proto6["m_sql"] = "contractor_type_id";
$proto6["m_srcTableName"] = "global_type_doc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "global_type_doc",
	"m_srcTableName" => "global_type_doc"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "global_type_doc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_type_doc";
$proto11["m_srcTableName"] = "global_type_doc";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "contractor_type_id";
$proto11["m_columns"][] = "contractor_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_type_doc";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_type_doc";
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
$proto0["m_srcTableName"]="global_type_doc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_type_doc = createSqlQuery_global_type_doc();


	
								;

		

$tdataglobal_type_doc[".sqlquery"] = $queryData_global_type_doc;



$tdataglobal_type_doc[".hasEvents"] = false;

?>