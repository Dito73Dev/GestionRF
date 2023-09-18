<?php
$tdataq_ctrl_alelemdevolutivo = array();
$tdataq_ctrl_alelemdevolutivo[".searchableFields"] = array();
$tdataq_ctrl_alelemdevolutivo[".ShortName"] = "q_ctrl_alelemdevolutivo";
$tdataq_ctrl_alelemdevolutivo[".OwnerID"] = "";
$tdataq_ctrl_alelemdevolutivo[".OriginalTable"] = "q_ctrl_alelemdevolutivo";


$tdataq_ctrl_alelemdevolutivo[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_ctrl_alelemdevolutivo[".originalPagesByType"] = $tdataq_ctrl_alelemdevolutivo[".pagesByType"];
$tdataq_ctrl_alelemdevolutivo[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_ctrl_alelemdevolutivo[".originalPages"] = $tdataq_ctrl_alelemdevolutivo[".pages"];
$tdataq_ctrl_alelemdevolutivo[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_ctrl_alelemdevolutivo[".originalDefaultPages"] = $tdataq_ctrl_alelemdevolutivo[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_alelemdevolutivo = array();
$fieldToolTipsq_ctrl_alelemdevolutivo = array();
$pageTitlesq_ctrl_alelemdevolutivo = array();
$placeHoldersq_ctrl_alelemdevolutivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_alelemdevolutivo["Spanish"] = array();
	$fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"] = array();
	$placeHoldersq_ctrl_alelemdevolutivo["Spanish"] = array();
	$pageTitlesq_ctrl_alelemdevolutivo["Spanish"] = array();
	$fieldLabelsq_ctrl_alelemdevolutivo["Spanish"]["lastval"] = "Lastval";
	$fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"]["lastval"] = "";
	$placeHoldersq_ctrl_alelemdevolutivo["Spanish"]["lastval"] = "";
	$fieldLabelsq_ctrl_alelemdevolutivo["Spanish"]["qty"] = "Qty";
	$fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"]["qty"] = "";
	$placeHoldersq_ctrl_alelemdevolutivo["Spanish"]["qty"] = "";
	$fieldLabelsq_ctrl_alelemdevolutivo["Spanish"]["ca_codcuenta"] = "Ca Codcuenta";
	$fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"]["ca_codcuenta"] = "";
	$placeHoldersq_ctrl_alelemdevolutivo["Spanish"]["ca_codcuenta"] = "";
	$fieldLabelsq_ctrl_alelemdevolutivo["Spanish"]["newval"] = "Newval";
	$fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"]["newval"] = "";
	$placeHoldersq_ctrl_alelemdevolutivo["Spanish"]["newval"] = "";
	if (count($fieldToolTipsq_ctrl_alelemdevolutivo["Spanish"]))
		$tdataq_ctrl_alelemdevolutivo[".isUseToolTips"] = true;
}


	$tdataq_ctrl_alelemdevolutivo[".NCSearch"] = true;



$tdataq_ctrl_alelemdevolutivo[".shortTableName"] = "q_ctrl_alelemdevolutivo";
$tdataq_ctrl_alelemdevolutivo[".nSecOptions"] = 0;

$tdataq_ctrl_alelemdevolutivo[".mainTableOwnerID"] = "";
$tdataq_ctrl_alelemdevolutivo[".entityType"] = 0;
$tdataq_ctrl_alelemdevolutivo[".connId"] = "dbrf_at_127_0_0_1";


$tdataq_ctrl_alelemdevolutivo[".strOriginalTableName"] = "q_ctrl_alelemdevolutivo";

	



$tdataq_ctrl_alelemdevolutivo[".showAddInPopup"] = false;

$tdataq_ctrl_alelemdevolutivo[".showEditInPopup"] = false;

$tdataq_ctrl_alelemdevolutivo[".showViewInPopup"] = false;

$tdataq_ctrl_alelemdevolutivo[".listAjax"] = false;
//	temporary
//$tdataq_ctrl_alelemdevolutivo[".listAjax"] = false;

	$tdataq_ctrl_alelemdevolutivo[".audit"] = false;

	$tdataq_ctrl_alelemdevolutivo[".locking"] = false;


$pages = $tdataq_ctrl_alelemdevolutivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_alelemdevolutivo[".edit"] = true;
	$tdataq_ctrl_alelemdevolutivo[".afterEditAction"] = 1;
	$tdataq_ctrl_alelemdevolutivo[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_alelemdevolutivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_alelemdevolutivo[".add"] = true;
$tdataq_ctrl_alelemdevolutivo[".afterAddAction"] = 1;
$tdataq_ctrl_alelemdevolutivo[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_alelemdevolutivo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_alelemdevolutivo[".list"] = true;
}



$tdataq_ctrl_alelemdevolutivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_alelemdevolutivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_alelemdevolutivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_alelemdevolutivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_alelemdevolutivo[".printFriendly"] = true;
}



$tdataq_ctrl_alelemdevolutivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_alelemdevolutivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_alelemdevolutivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_alelemdevolutivo[".isUseAjaxSuggest"] = true;



												

$tdataq_ctrl_alelemdevolutivo[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_alelemdevolutivo[".buttonsAdded"] = false;

$tdataq_ctrl_alelemdevolutivo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_alelemdevolutivo[".isUseTimeForSearch"] = false;


$tdataq_ctrl_alelemdevolutivo[".badgeColor"] = "2F4F4F";


$tdataq_ctrl_alelemdevolutivo[".allSearchFields"] = array();
$tdataq_ctrl_alelemdevolutivo[".filterFields"] = array();
$tdataq_ctrl_alelemdevolutivo[".requiredSearchFields"] = array();

$tdataq_ctrl_alelemdevolutivo[".googleLikeFields"] = array();
$tdataq_ctrl_alelemdevolutivo[".googleLikeFields"][] = "ca_codcuenta";
$tdataq_ctrl_alelemdevolutivo[".googleLikeFields"][] = "qty";
$tdataq_ctrl_alelemdevolutivo[".googleLikeFields"][] = "lastval";
$tdataq_ctrl_alelemdevolutivo[".googleLikeFields"][] = "newval";



$tdataq_ctrl_alelemdevolutivo[".tableType"] = "list";

$tdataq_ctrl_alelemdevolutivo[".printerPageOrientation"] = 0;
$tdataq_ctrl_alelemdevolutivo[".nPrinterPageScale"] = 100;

$tdataq_ctrl_alelemdevolutivo[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_alelemdevolutivo[".geocodingEnabled"] = false;










$tdataq_ctrl_alelemdevolutivo[".pageSize"] = 20;

$tdataq_ctrl_alelemdevolutivo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_ctrl_alelemdevolutivo[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_alelemdevolutivo[".orderindexes"] = array();


$tdataq_ctrl_alelemdevolutivo[".sqlHead"] = "SELECT ca_codcuenta,  	qty,  	lastval,  	newval";
$tdataq_ctrl_alelemdevolutivo[".sqlFrom"] = "FROM q_ctrl_alelemdevolutivo";
$tdataq_ctrl_alelemdevolutivo[".sqlWhereExpr"] = "";
$tdataq_ctrl_alelemdevolutivo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_alelemdevolutivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_alelemdevolutivo[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_alelemdevolutivo[".highlightSearchResults"] = true;

$tableKeysq_ctrl_alelemdevolutivo = array();
$tdataq_ctrl_alelemdevolutivo[".Keys"] = $tableKeysq_ctrl_alelemdevolutivo;


$tdataq_ctrl_alelemdevolutivo[".hideMobileList"] = array();




//	ca_codcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ca_codcuenta";
	$fdata["GoodName"] = "ca_codcuenta";
	$fdata["ownerTable"] = "q_ctrl_alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("q_ctrl_alelemdevolutivo","ca_codcuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ca_codcuenta";

		$fdata["sourceSingle"] = "ca_codcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca_codcuenta";

	
	
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


	$tdataq_ctrl_alelemdevolutivo["ca_codcuenta"] = $fdata;
		$tdataq_ctrl_alelemdevolutivo[".searchableFields"][] = "ca_codcuenta";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "q_ctrl_alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("q_ctrl_alelemdevolutivo","qty");
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


	$tdataq_ctrl_alelemdevolutivo["qty"] = $fdata;
		$tdataq_ctrl_alelemdevolutivo[".searchableFields"][] = "qty";
//	lastval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastval";
	$fdata["GoodName"] = "lastval";
	$fdata["ownerTable"] = "q_ctrl_alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("q_ctrl_alelemdevolutivo","lastval");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "lastval";

		$fdata["sourceSingle"] = "lastval";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastval";

	
	
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


	$tdataq_ctrl_alelemdevolutivo["lastval"] = $fdata;
		$tdataq_ctrl_alelemdevolutivo[".searchableFields"][] = "lastval";
//	newval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "newval";
	$fdata["GoodName"] = "newval";
	$fdata["ownerTable"] = "q_ctrl_alelemdevolutivo";
	$fdata["Label"] = GetFieldLabel("q_ctrl_alelemdevolutivo","newval");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "newval";

		$fdata["sourceSingle"] = "newval";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "newval";

	
	
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


	$tdataq_ctrl_alelemdevolutivo["newval"] = $fdata;
		$tdataq_ctrl_alelemdevolutivo[".searchableFields"][] = "newval";


$tables_data["q_ctrl_alelemdevolutivo"]=&$tdataq_ctrl_alelemdevolutivo;
$field_labels["q_ctrl_alelemdevolutivo"] = &$fieldLabelsq_ctrl_alelemdevolutivo;
$fieldToolTips["q_ctrl_alelemdevolutivo"] = &$fieldToolTipsq_ctrl_alelemdevolutivo;
$placeHolders["q_ctrl_alelemdevolutivo"] = &$placeHoldersq_ctrl_alelemdevolutivo;
$page_titles["q_ctrl_alelemdevolutivo"] = &$pageTitlesq_ctrl_alelemdevolutivo;


changeTextControlsToDate( "q_ctrl_alelemdevolutivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ctrl_alelemdevolutivo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_alelemdevolutivo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ctrl_alelemdevolutivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ca_codcuenta,  	qty,  	lastval,  	newval";
$proto0["m_strFrom"] = "FROM q_ctrl_alelemdevolutivo";
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
	"m_strName" => "ca_codcuenta",
	"m_strTable" => "q_ctrl_alelemdevolutivo",
	"m_srcTableName" => "q_ctrl_alelemdevolutivo"
));

$proto6["m_sql"] = "ca_codcuenta";
$proto6["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "q_ctrl_alelemdevolutivo",
	"m_srcTableName" => "q_ctrl_alelemdevolutivo"
));

$proto8["m_sql"] = "qty";
$proto8["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastval",
	"m_strTable" => "q_ctrl_alelemdevolutivo",
	"m_srcTableName" => "q_ctrl_alelemdevolutivo"
));

$proto10["m_sql"] = "lastval";
$proto10["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "newval",
	"m_strTable" => "q_ctrl_alelemdevolutivo",
	"m_srcTableName" => "q_ctrl_alelemdevolutivo"
));

$proto12["m_sql"] = "newval";
$proto12["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "q_ctrl_alelemdevolutivo";
$proto15["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ca_codcuenta";
$proto15["m_columns"][] = "qty";
$proto15["m_columns"][] = "lastval";
$proto15["m_columns"][] = "newval";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "q_ctrl_alelemdevolutivo";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "q_ctrl_alelemdevolutivo";
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
$proto0["m_srcTableName"]="q_ctrl_alelemdevolutivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_alelemdevolutivo = createSqlQuery_q_ctrl_alelemdevolutivo();


	
								;

				

$tdataq_ctrl_alelemdevolutivo[".sqlquery"] = $queryData_q_ctrl_alelemdevolutivo;



$tdataq_ctrl_alelemdevolutivo[".hasEvents"] = false;

?>