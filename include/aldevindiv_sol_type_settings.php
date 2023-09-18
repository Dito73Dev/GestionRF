<?php
$tdataaldevindiv_sol_type = array();
$tdataaldevindiv_sol_type[".searchableFields"] = array();
$tdataaldevindiv_sol_type[".ShortName"] = "aldevindiv_sol_type";
$tdataaldevindiv_sol_type[".OwnerID"] = "";
$tdataaldevindiv_sol_type[".OriginalTable"] = "aldevindiv_sol_type";


$tdataaldevindiv_sol_type[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataaldevindiv_sol_type[".originalPagesByType"] = $tdataaldevindiv_sol_type[".pagesByType"];
$tdataaldevindiv_sol_type[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataaldevindiv_sol_type[".originalPages"] = $tdataaldevindiv_sol_type[".pages"];
$tdataaldevindiv_sol_type[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdataaldevindiv_sol_type[".originalDefaultPages"] = $tdataaldevindiv_sol_type[".defaultPages"];

//	field labels
$fieldLabelsaldevindiv_sol_type = array();
$fieldToolTipsaldevindiv_sol_type = array();
$pageTitlesaldevindiv_sol_type = array();
$placeHoldersaldevindiv_sol_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaldevindiv_sol_type["Spanish"] = array();
	$fieldToolTipsaldevindiv_sol_type["Spanish"] = array();
	$placeHoldersaldevindiv_sol_type["Spanish"] = array();
	$pageTitlesaldevindiv_sol_type["Spanish"] = array();
	$fieldLabelsaldevindiv_sol_type["Spanish"]["sol_code"] = "Sol Code";
	$fieldToolTipsaldevindiv_sol_type["Spanish"]["sol_code"] = "";
	$placeHoldersaldevindiv_sol_type["Spanish"]["sol_code"] = "";
	$fieldLabelsaldevindiv_sol_type["Spanish"]["sol_id"] = "Sol Id";
	$fieldToolTipsaldevindiv_sol_type["Spanish"]["sol_id"] = "";
	$placeHoldersaldevindiv_sol_type["Spanish"]["sol_id"] = "";
	$fieldLabelsaldevindiv_sol_type["Spanish"]["sol_lnk"] = "Sol Lnk";
	$fieldToolTipsaldevindiv_sol_type["Spanish"]["sol_lnk"] = "";
	$placeHoldersaldevindiv_sol_type["Spanish"]["sol_lnk"] = "";
	$fieldLabelsaldevindiv_sol_type["Spanish"]["sol_name"] = "Sol Name";
	$fieldToolTipsaldevindiv_sol_type["Spanish"]["sol_name"] = "";
	$placeHoldersaldevindiv_sol_type["Spanish"]["sol_name"] = "";
	if (count($fieldToolTipsaldevindiv_sol_type["Spanish"]))
		$tdataaldevindiv_sol_type[".isUseToolTips"] = true;
}


	$tdataaldevindiv_sol_type[".NCSearch"] = true;



$tdataaldevindiv_sol_type[".shortTableName"] = "aldevindiv_sol_type";
$tdataaldevindiv_sol_type[".nSecOptions"] = 0;

$tdataaldevindiv_sol_type[".mainTableOwnerID"] = "";
$tdataaldevindiv_sol_type[".entityType"] = 0;
$tdataaldevindiv_sol_type[".connId"] = "dbrf_at_127_0_0_1";


$tdataaldevindiv_sol_type[".strOriginalTableName"] = "aldevindiv_sol_type";

	



$tdataaldevindiv_sol_type[".showAddInPopup"] = false;

$tdataaldevindiv_sol_type[".showEditInPopup"] = false;

$tdataaldevindiv_sol_type[".showViewInPopup"] = false;

$tdataaldevindiv_sol_type[".listAjax"] = false;
//	temporary
//$tdataaldevindiv_sol_type[".listAjax"] = false;

	$tdataaldevindiv_sol_type[".audit"] = false;

	$tdataaldevindiv_sol_type[".locking"] = false;


$pages = $tdataaldevindiv_sol_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaldevindiv_sol_type[".edit"] = true;
	$tdataaldevindiv_sol_type[".afterEditAction"] = 1;
	$tdataaldevindiv_sol_type[".closePopupAfterEdit"] = 1;
	$tdataaldevindiv_sol_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaldevindiv_sol_type[".add"] = true;
$tdataaldevindiv_sol_type[".afterAddAction"] = 1;
$tdataaldevindiv_sol_type[".closePopupAfterAdd"] = 1;
$tdataaldevindiv_sol_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaldevindiv_sol_type[".list"] = true;
}



$tdataaldevindiv_sol_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaldevindiv_sol_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaldevindiv_sol_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaldevindiv_sol_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaldevindiv_sol_type[".printFriendly"] = true;
}



$tdataaldevindiv_sol_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaldevindiv_sol_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaldevindiv_sol_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaldevindiv_sol_type[".isUseAjaxSuggest"] = true;



												

$tdataaldevindiv_sol_type[".ajaxCodeSnippetAdded"] = false;

$tdataaldevindiv_sol_type[".buttonsAdded"] = false;

$tdataaldevindiv_sol_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaldevindiv_sol_type[".isUseTimeForSearch"] = false;


$tdataaldevindiv_sol_type[".badgeColor"] = "E8926F";


$tdataaldevindiv_sol_type[".allSearchFields"] = array();
$tdataaldevindiv_sol_type[".filterFields"] = array();
$tdataaldevindiv_sol_type[".requiredSearchFields"] = array();

$tdataaldevindiv_sol_type[".googleLikeFields"] = array();
$tdataaldevindiv_sol_type[".googleLikeFields"][] = "sol_id";
$tdataaldevindiv_sol_type[".googleLikeFields"][] = "sol_code";
$tdataaldevindiv_sol_type[".googleLikeFields"][] = "sol_name";
$tdataaldevindiv_sol_type[".googleLikeFields"][] = "sol_lnk";



$tdataaldevindiv_sol_type[".tableType"] = "list";

$tdataaldevindiv_sol_type[".printerPageOrientation"] = 0;
$tdataaldevindiv_sol_type[".nPrinterPageScale"] = 100;

$tdataaldevindiv_sol_type[".nPrinterSplitRecords"] = 40;

$tdataaldevindiv_sol_type[".geocodingEnabled"] = false;










$tdataaldevindiv_sol_type[".pageSize"] = 20;

$tdataaldevindiv_sol_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaldevindiv_sol_type[".strOrderBy"] = $tstrOrderBy;

$tdataaldevindiv_sol_type[".orderindexes"] = array();


$tdataaldevindiv_sol_type[".sqlHead"] = "SELECT sol_id,  	sol_code,  	sol_name,  	sol_lnk";
$tdataaldevindiv_sol_type[".sqlFrom"] = "FROM aldevindiv_sol_type";
$tdataaldevindiv_sol_type[".sqlWhereExpr"] = "";
$tdataaldevindiv_sol_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaldevindiv_sol_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaldevindiv_sol_type[".arrGroupsPerPage"] = $arrGPP;

$tdataaldevindiv_sol_type[".highlightSearchResults"] = true;

$tableKeysaldevindiv_sol_type = array();
$tableKeysaldevindiv_sol_type[] = "sol_id";
$tdataaldevindiv_sol_type[".Keys"] = $tableKeysaldevindiv_sol_type;


$tdataaldevindiv_sol_type[".hideMobileList"] = array();




//	sol_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sol_id";
	$fdata["GoodName"] = "sol_id";
	$fdata["ownerTable"] = "aldevindiv_sol_type";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_type","sol_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "sol_id";

		$fdata["sourceSingle"] = "sol_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_id";

	
	
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


	$tdataaldevindiv_sol_type["sol_id"] = $fdata;
		$tdataaldevindiv_sol_type[".searchableFields"][] = "sol_id";
//	sol_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sol_code";
	$fdata["GoodName"] = "sol_code";
	$fdata["ownerTable"] = "aldevindiv_sol_type";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_type","sol_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_code";

		$fdata["sourceSingle"] = "sol_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_code";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataaldevindiv_sol_type["sol_code"] = $fdata;
		$tdataaldevindiv_sol_type[".searchableFields"][] = "sol_code";
//	sol_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sol_name";
	$fdata["GoodName"] = "sol_name";
	$fdata["ownerTable"] = "aldevindiv_sol_type";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_type","sol_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_name";

		$fdata["sourceSingle"] = "sol_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_name";

	
	
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


	$tdataaldevindiv_sol_type["sol_name"] = $fdata;
		$tdataaldevindiv_sol_type[".searchableFields"][] = "sol_name";
//	sol_lnk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sol_lnk";
	$fdata["GoodName"] = "sol_lnk";
	$fdata["ownerTable"] = "aldevindiv_sol_type";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_type","sol_lnk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_lnk";

		$fdata["sourceSingle"] = "sol_lnk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_lnk";

	
	
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


	$tdataaldevindiv_sol_type["sol_lnk"] = $fdata;
		$tdataaldevindiv_sol_type[".searchableFields"][] = "sol_lnk";


$tables_data["aldevindiv_sol_type"]=&$tdataaldevindiv_sol_type;
$field_labels["aldevindiv_sol_type"] = &$fieldLabelsaldevindiv_sol_type;
$fieldToolTips["aldevindiv_sol_type"] = &$fieldToolTipsaldevindiv_sol_type;
$placeHolders["aldevindiv_sol_type"] = &$placeHoldersaldevindiv_sol_type;
$page_titles["aldevindiv_sol_type"] = &$pageTitlesaldevindiv_sol_type;


changeTextControlsToDate( "aldevindiv_sol_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aldevindiv_sol_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aldevindiv_sol_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aldevindiv_sol_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sol_id,  	sol_code,  	sol_name,  	sol_lnk";
$proto0["m_strFrom"] = "FROM aldevindiv_sol_type";
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
	"m_strName" => "sol_id",
	"m_strTable" => "aldevindiv_sol_type",
	"m_srcTableName" => "aldevindiv_sol_type"
));

$proto6["m_sql"] = "sol_id";
$proto6["m_srcTableName"] = "aldevindiv_sol_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_code",
	"m_strTable" => "aldevindiv_sol_type",
	"m_srcTableName" => "aldevindiv_sol_type"
));

$proto8["m_sql"] = "sol_code";
$proto8["m_srcTableName"] = "aldevindiv_sol_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_name",
	"m_strTable" => "aldevindiv_sol_type",
	"m_srcTableName" => "aldevindiv_sol_type"
));

$proto10["m_sql"] = "sol_name";
$proto10["m_srcTableName"] = "aldevindiv_sol_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_lnk",
	"m_strTable" => "aldevindiv_sol_type",
	"m_srcTableName" => "aldevindiv_sol_type"
));

$proto12["m_sql"] = "sol_lnk";
$proto12["m_srcTableName"] = "aldevindiv_sol_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "aldevindiv_sol_type";
$proto15["m_srcTableName"] = "aldevindiv_sol_type";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "sol_id";
$proto15["m_columns"][] = "sol_code";
$proto15["m_columns"][] = "sol_name";
$proto15["m_columns"][] = "sol_lnk";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "aldevindiv_sol_type";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "aldevindiv_sol_type";
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
$proto0["m_srcTableName"]="aldevindiv_sol_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aldevindiv_sol_type = createSqlQuery_aldevindiv_sol_type();


	
								;

				

$tdataaldevindiv_sol_type[".sqlquery"] = $queryData_aldevindiv_sol_type;



$tdataaldevindiv_sol_type[".hasEvents"] = false;

?>