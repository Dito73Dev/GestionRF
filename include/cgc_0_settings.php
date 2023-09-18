<?php
$tdatacgc_0 = array();
$tdatacgc_0[".searchableFields"] = array();
$tdatacgc_0[".ShortName"] = "cgc_0";
$tdatacgc_0[".OwnerID"] = "";
$tdatacgc_0[".OriginalTable"] = "cgc_0";


$tdatacgc_0[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacgc_0[".originalPagesByType"] = $tdatacgc_0[".pagesByType"];
$tdatacgc_0[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacgc_0[".originalPages"] = $tdatacgc_0[".pages"];
$tdatacgc_0[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacgc_0[".originalDefaultPages"] = $tdatacgc_0[".defaultPages"];

//	field labels
$fieldLabelscgc_0 = array();
$fieldToolTipscgc_0 = array();
$pageTitlescgc_0 = array();
$placeHolderscgc_0 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscgc_0["Spanish"] = array();
	$fieldToolTipscgc_0["Spanish"] = array();
	$placeHolderscgc_0["Spanish"] = array();
	$pageTitlescgc_0["Spanish"] = array();
	$fieldLabelscgc_0["Spanish"]["pos_0"] = "Código Contable";
	$fieldToolTipscgc_0["Spanish"]["pos_0"] = "";
	$placeHolderscgc_0["Spanish"]["pos_0"] = "";
	$fieldLabelscgc_0["Spanish"]["Descripcion_0"] = "Descripción";
	$fieldToolTipscgc_0["Spanish"]["Descripcion_0"] = "";
	$placeHolderscgc_0["Spanish"]["Descripcion_0"] = "";
	if (count($fieldToolTipscgc_0["Spanish"]))
		$tdatacgc_0[".isUseToolTips"] = true;
}


	$tdatacgc_0[".NCSearch"] = true;



$tdatacgc_0[".shortTableName"] = "cgc_0";
$tdatacgc_0[".nSecOptions"] = 0;

$tdatacgc_0[".mainTableOwnerID"] = "";
$tdatacgc_0[".entityType"] = 0;
$tdatacgc_0[".connId"] = "dbrf_at_127_0_0_1";


$tdatacgc_0[".strOriginalTableName"] = "cgc_0";

	



$tdatacgc_0[".showAddInPopup"] = false;

$tdatacgc_0[".showEditInPopup"] = false;

$tdatacgc_0[".showViewInPopup"] = false;

$tdatacgc_0[".listAjax"] = false;
//	temporary
//$tdatacgc_0[".listAjax"] = false;

	$tdatacgc_0[".audit"] = false;

	$tdatacgc_0[".locking"] = false;


$pages = $tdatacgc_0[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacgc_0[".edit"] = true;
	$tdatacgc_0[".afterEditAction"] = 1;
	$tdatacgc_0[".closePopupAfterEdit"] = 1;
	$tdatacgc_0[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacgc_0[".add"] = true;
$tdatacgc_0[".afterAddAction"] = 1;
$tdatacgc_0[".closePopupAfterAdd"] = 1;
$tdatacgc_0[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacgc_0[".list"] = true;
}



$tdatacgc_0[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacgc_0[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacgc_0[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacgc_0[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacgc_0[".printFriendly"] = true;
}



$tdatacgc_0[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacgc_0[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacgc_0[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacgc_0[".isUseAjaxSuggest"] = true;



												

$tdatacgc_0[".ajaxCodeSnippetAdded"] = false;

$tdatacgc_0[".buttonsAdded"] = false;

$tdatacgc_0[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacgc_0[".isUseTimeForSearch"] = false;


$tdatacgc_0[".badgeColor"] = "D2691E";


$tdatacgc_0[".allSearchFields"] = array();
$tdatacgc_0[".filterFields"] = array();
$tdatacgc_0[".requiredSearchFields"] = array();

$tdatacgc_0[".googleLikeFields"] = array();
$tdatacgc_0[".googleLikeFields"][] = "pos_0";
$tdatacgc_0[".googleLikeFields"][] = "Descripcion_0";



$tdatacgc_0[".tableType"] = "list";

$tdatacgc_0[".printerPageOrientation"] = 0;
$tdatacgc_0[".nPrinterPageScale"] = 100;

$tdatacgc_0[".nPrinterSplitRecords"] = 40;

$tdatacgc_0[".geocodingEnabled"] = false;










$tdatacgc_0[".pageSize"] = 20;

$tdatacgc_0[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacgc_0[".strOrderBy"] = $tstrOrderBy;

$tdatacgc_0[".orderindexes"] = array();


$tdatacgc_0[".sqlHead"] = "SELECT pos_0,  	Descripcion_0";
$tdatacgc_0[".sqlFrom"] = "FROM cgc_0";
$tdatacgc_0[".sqlWhereExpr"] = "";
$tdatacgc_0[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacgc_0[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacgc_0[".arrGroupsPerPage"] = $arrGPP;

$tdatacgc_0[".highlightSearchResults"] = true;

$tableKeyscgc_0 = array();
$tdatacgc_0[".Keys"] = $tableKeyscgc_0;


$tdatacgc_0[".hideMobileList"] = array();




//	pos_0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pos_0";
	$fdata["GoodName"] = "pos_0";
	$fdata["ownerTable"] = "cgc_0";
	$fdata["Label"] = GetFieldLabel("cgc_0","pos_0");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_0";

		$fdata["sourceSingle"] = "pos_0";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_0";

	
	
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


	$tdatacgc_0["pos_0"] = $fdata;
		$tdatacgc_0[".searchableFields"][] = "pos_0";
//	Descripcion_0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion_0";
	$fdata["GoodName"] = "Descripcion_0";
	$fdata["ownerTable"] = "cgc_0";
	$fdata["Label"] = GetFieldLabel("cgc_0","Descripcion_0");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion_0";

		$fdata["sourceSingle"] = "Descripcion_0";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion_0";

	
	
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


	$tdatacgc_0["Descripcion_0"] = $fdata;
		$tdatacgc_0[".searchableFields"][] = "Descripcion_0";


$tables_data["cgc_0"]=&$tdatacgc_0;
$field_labels["cgc_0"] = &$fieldLabelscgc_0;
$fieldToolTips["cgc_0"] = &$fieldToolTipscgc_0;
$placeHolders["cgc_0"] = &$placeHolderscgc_0;
$page_titles["cgc_0"] = &$pageTitlescgc_0;


changeTextControlsToDate( "cgc_0" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cgc_0"] = array();
//	cgc_1
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cgc_1";
		$detailsParam["dOriginalTable"] = "cgc_1";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cgc_1";
	$detailsParam["dCaptionTable"] = GetTableCaption("cgc_1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cgc_0"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cgc_0"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cgc_0"][$dIndex]["masterKeys"][]="pos_0";

				$detailsTablesData["cgc_0"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cgc_0"][$dIndex]["detailKeys"][]="pos_1";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cgc_0"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cgc_0()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pos_0,  	Descripcion_0";
$proto0["m_strFrom"] = "FROM cgc_0";
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
	"m_strName" => "pos_0",
	"m_strTable" => "cgc_0",
	"m_srcTableName" => "cgc_0"
));

$proto6["m_sql"] = "pos_0";
$proto6["m_srcTableName"] = "cgc_0";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion_0",
	"m_strTable" => "cgc_0",
	"m_srcTableName" => "cgc_0"
));

$proto8["m_sql"] = "Descripcion_0";
$proto8["m_srcTableName"] = "cgc_0";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cgc_0";
$proto11["m_srcTableName"] = "cgc_0";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "pos_0";
$proto11["m_columns"][] = "Descripcion_0";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cgc_0";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cgc_0";
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
$proto0["m_srcTableName"]="cgc_0";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cgc_0 = createSqlQuery_cgc_0();


	
								;

		

$tdatacgc_0[".sqlquery"] = $queryData_cgc_0;



$tdatacgc_0[".hasEvents"] = false;

?>