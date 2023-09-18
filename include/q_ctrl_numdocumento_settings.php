<?php
$tdataq_ctrl_numdocumento = array();
$tdataq_ctrl_numdocumento[".searchableFields"] = array();
$tdataq_ctrl_numdocumento[".ShortName"] = "q_ctrl_numdocumento";
$tdataq_ctrl_numdocumento[".OwnerID"] = "";
$tdataq_ctrl_numdocumento[".OriginalTable"] = "q_ctrl_numdocumento";


$tdataq_ctrl_numdocumento[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_ctrl_numdocumento[".originalPagesByType"] = $tdataq_ctrl_numdocumento[".pagesByType"];
$tdataq_ctrl_numdocumento[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_ctrl_numdocumento[".originalPages"] = $tdataq_ctrl_numdocumento[".pages"];
$tdataq_ctrl_numdocumento[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_ctrl_numdocumento[".originalDefaultPages"] = $tdataq_ctrl_numdocumento[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_numdocumento = array();
$fieldToolTipsq_ctrl_numdocumento = array();
$pageTitlesq_ctrl_numdocumento = array();
$placeHoldersq_ctrl_numdocumento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_numdocumento["Spanish"] = array();
	$fieldToolTipsq_ctrl_numdocumento["Spanish"] = array();
	$placeHoldersq_ctrl_numdocumento["Spanish"] = array();
	$pageTitlesq_ctrl_numdocumento["Spanish"] = array();
	$fieldLabelsq_ctrl_numdocumento["Spanish"]["ascodalmacen"] = "Ascodalmacen";
	$fieldToolTipsq_ctrl_numdocumento["Spanish"]["ascodalmacen"] = "";
	$placeHoldersq_ctrl_numdocumento["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsq_ctrl_numdocumento["Spanish"]["lastnumber"] = "Lastnumber";
	$fieldToolTipsq_ctrl_numdocumento["Spanish"]["lastnumber"] = "";
	$placeHoldersq_ctrl_numdocumento["Spanish"]["lastnumber"] = "";
	$fieldLabelsq_ctrl_numdocumento["Spanish"]["newnumber"] = "Newnumber";
	$fieldToolTipsq_ctrl_numdocumento["Spanish"]["newnumber"] = "";
	$placeHoldersq_ctrl_numdocumento["Spanish"]["newnumber"] = "";
	$fieldLabelsq_ctrl_numdocumento["Spanish"]["qty"] = "Qty";
	$fieldToolTipsq_ctrl_numdocumento["Spanish"]["qty"] = "";
	$placeHoldersq_ctrl_numdocumento["Spanish"]["qty"] = "";
	if (count($fieldToolTipsq_ctrl_numdocumento["Spanish"]))
		$tdataq_ctrl_numdocumento[".isUseToolTips"] = true;
}


	$tdataq_ctrl_numdocumento[".NCSearch"] = true;



$tdataq_ctrl_numdocumento[".shortTableName"] = "q_ctrl_numdocumento";
$tdataq_ctrl_numdocumento[".nSecOptions"] = 0;

$tdataq_ctrl_numdocumento[".mainTableOwnerID"] = "";
$tdataq_ctrl_numdocumento[".entityType"] = 0;
$tdataq_ctrl_numdocumento[".connId"] = "dbrf_at_127_0_0_1";


$tdataq_ctrl_numdocumento[".strOriginalTableName"] = "q_ctrl_numdocumento";

	



$tdataq_ctrl_numdocumento[".showAddInPopup"] = false;

$tdataq_ctrl_numdocumento[".showEditInPopup"] = false;

$tdataq_ctrl_numdocumento[".showViewInPopup"] = false;

$tdataq_ctrl_numdocumento[".listAjax"] = false;
//	temporary
//$tdataq_ctrl_numdocumento[".listAjax"] = false;

	$tdataq_ctrl_numdocumento[".audit"] = false;

	$tdataq_ctrl_numdocumento[".locking"] = false;


$pages = $tdataq_ctrl_numdocumento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_numdocumento[".edit"] = true;
	$tdataq_ctrl_numdocumento[".afterEditAction"] = 1;
	$tdataq_ctrl_numdocumento[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_numdocumento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_numdocumento[".add"] = true;
$tdataq_ctrl_numdocumento[".afterAddAction"] = 1;
$tdataq_ctrl_numdocumento[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_numdocumento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_numdocumento[".list"] = true;
}



$tdataq_ctrl_numdocumento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_numdocumento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_numdocumento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_numdocumento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_numdocumento[".printFriendly"] = true;
}



$tdataq_ctrl_numdocumento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_numdocumento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_numdocumento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_numdocumento[".isUseAjaxSuggest"] = true;



												

$tdataq_ctrl_numdocumento[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_numdocumento[".buttonsAdded"] = false;

$tdataq_ctrl_numdocumento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_numdocumento[".isUseTimeForSearch"] = false;


$tdataq_ctrl_numdocumento[".badgeColor"] = "778899";


$tdataq_ctrl_numdocumento[".allSearchFields"] = array();
$tdataq_ctrl_numdocumento[".filterFields"] = array();
$tdataq_ctrl_numdocumento[".requiredSearchFields"] = array();

$tdataq_ctrl_numdocumento[".googleLikeFields"] = array();
$tdataq_ctrl_numdocumento[".googleLikeFields"][] = "ascodalmacen";
$tdataq_ctrl_numdocumento[".googleLikeFields"][] = "qty";
$tdataq_ctrl_numdocumento[".googleLikeFields"][] = "lastnumber";
$tdataq_ctrl_numdocumento[".googleLikeFields"][] = "newnumber";



$tdataq_ctrl_numdocumento[".tableType"] = "list";

$tdataq_ctrl_numdocumento[".printerPageOrientation"] = 0;
$tdataq_ctrl_numdocumento[".nPrinterPageScale"] = 100;

$tdataq_ctrl_numdocumento[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_numdocumento[".geocodingEnabled"] = false;










$tdataq_ctrl_numdocumento[".pageSize"] = 20;

$tdataq_ctrl_numdocumento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_ctrl_numdocumento[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_numdocumento[".orderindexes"] = array();


$tdataq_ctrl_numdocumento[".sqlHead"] = "SELECT ascodalmacen,  	qty,  	lastnumber,  	newnumber";
$tdataq_ctrl_numdocumento[".sqlFrom"] = "FROM q_ctrl_numdocumento";
$tdataq_ctrl_numdocumento[".sqlWhereExpr"] = "";
$tdataq_ctrl_numdocumento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_numdocumento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_numdocumento[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_numdocumento[".highlightSearchResults"] = true;

$tableKeysq_ctrl_numdocumento = array();
$tdataq_ctrl_numdocumento[".Keys"] = $tableKeysq_ctrl_numdocumento;


$tdataq_ctrl_numdocumento[".hideMobileList"] = array();




//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "q_ctrl_numdocumento";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numdocumento","ascodalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ascodalmacen";

		$fdata["sourceSingle"] = "ascodalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen";

	
	
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


	$tdataq_ctrl_numdocumento["ascodalmacen"] = $fdata;
		$tdataq_ctrl_numdocumento[".searchableFields"][] = "ascodalmacen";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "q_ctrl_numdocumento";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numdocumento","qty");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "qty";

		$fdata["sourceSingle"] = "qty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty";

	
	
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


	$tdataq_ctrl_numdocumento["qty"] = $fdata;
		$tdataq_ctrl_numdocumento[".searchableFields"][] = "qty";
//	lastnumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastnumber";
	$fdata["GoodName"] = "lastnumber";
	$fdata["ownerTable"] = "q_ctrl_numdocumento";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numdocumento","lastnumber");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "lastnumber";

		$fdata["sourceSingle"] = "lastnumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastnumber";

	
	
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


	$tdataq_ctrl_numdocumento["lastnumber"] = $fdata;
		$tdataq_ctrl_numdocumento[".searchableFields"][] = "lastnumber";
//	newnumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "newnumber";
	$fdata["GoodName"] = "newnumber";
	$fdata["ownerTable"] = "q_ctrl_numdocumento";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numdocumento","newnumber");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "newnumber";

		$fdata["sourceSingle"] = "newnumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "newnumber";

	
	
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


	$tdataq_ctrl_numdocumento["newnumber"] = $fdata;
		$tdataq_ctrl_numdocumento[".searchableFields"][] = "newnumber";


$tables_data["q_ctrl_numdocumento"]=&$tdataq_ctrl_numdocumento;
$field_labels["q_ctrl_numdocumento"] = &$fieldLabelsq_ctrl_numdocumento;
$fieldToolTips["q_ctrl_numdocumento"] = &$fieldToolTipsq_ctrl_numdocumento;
$placeHolders["q_ctrl_numdocumento"] = &$placeHoldersq_ctrl_numdocumento;
$page_titles["q_ctrl_numdocumento"] = &$pageTitlesq_ctrl_numdocumento;


changeTextControlsToDate( "q_ctrl_numdocumento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ctrl_numdocumento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_numdocumento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ctrl_numdocumento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ascodalmacen,  	qty,  	lastnumber,  	newnumber";
$proto0["m_strFrom"] = "FROM q_ctrl_numdocumento";
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
	"m_strName" => "ascodalmacen",
	"m_strTable" => "q_ctrl_numdocumento",
	"m_srcTableName" => "q_ctrl_numdocumento"
));

$proto6["m_sql"] = "ascodalmacen";
$proto6["m_srcTableName"] = "q_ctrl_numdocumento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "q_ctrl_numdocumento",
	"m_srcTableName" => "q_ctrl_numdocumento"
));

$proto8["m_sql"] = "qty";
$proto8["m_srcTableName"] = "q_ctrl_numdocumento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastnumber",
	"m_strTable" => "q_ctrl_numdocumento",
	"m_srcTableName" => "q_ctrl_numdocumento"
));

$proto10["m_sql"] = "lastnumber";
$proto10["m_srcTableName"] = "q_ctrl_numdocumento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "newnumber",
	"m_strTable" => "q_ctrl_numdocumento",
	"m_srcTableName" => "q_ctrl_numdocumento"
));

$proto12["m_sql"] = "newnumber";
$proto12["m_srcTableName"] = "q_ctrl_numdocumento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "q_ctrl_numdocumento";
$proto15["m_srcTableName"] = "q_ctrl_numdocumento";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ascodalmacen";
$proto15["m_columns"][] = "qty";
$proto15["m_columns"][] = "lastnumber";
$proto15["m_columns"][] = "newnumber";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "q_ctrl_numdocumento";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "q_ctrl_numdocumento";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_ctrl_numdocumento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_numdocumento = createSqlQuery_q_ctrl_numdocumento();


	
								;

				

$tdataq_ctrl_numdocumento[".sqlquery"] = $queryData_q_ctrl_numdocumento;



$tdataq_ctrl_numdocumento[".hasEvents"] = false;

?>