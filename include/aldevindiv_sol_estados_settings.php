<?php
$tdataaldevindiv_sol_estados = array();
$tdataaldevindiv_sol_estados[".searchableFields"] = array();
$tdataaldevindiv_sol_estados[".ShortName"] = "aldevindiv_sol_estados";
$tdataaldevindiv_sol_estados[".OwnerID"] = "";
$tdataaldevindiv_sol_estados[".OriginalTable"] = "aldevindiv_sol_estados";


$tdataaldevindiv_sol_estados[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataaldevindiv_sol_estados[".originalPagesByType"] = $tdataaldevindiv_sol_estados[".pagesByType"];
$tdataaldevindiv_sol_estados[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataaldevindiv_sol_estados[".originalPages"] = $tdataaldevindiv_sol_estados[".pages"];
$tdataaldevindiv_sol_estados[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdataaldevindiv_sol_estados[".originalDefaultPages"] = $tdataaldevindiv_sol_estados[".defaultPages"];

//	field labels
$fieldLabelsaldevindiv_sol_estados = array();
$fieldToolTipsaldevindiv_sol_estados = array();
$pageTitlesaldevindiv_sol_estados = array();
$placeHoldersaldevindiv_sol_estados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaldevindiv_sol_estados["Spanish"] = array();
	$fieldToolTipsaldevindiv_sol_estados["Spanish"] = array();
	$placeHoldersaldevindiv_sol_estados["Spanish"] = array();
	$pageTitlesaldevindiv_sol_estados["Spanish"] = array();
	$fieldLabelsaldevindiv_sol_estados["Spanish"]["estado_name"] = "Estado Name";
	$fieldToolTipsaldevindiv_sol_estados["Spanish"]["estado_name"] = "";
	$placeHoldersaldevindiv_sol_estados["Spanish"]["estado_name"] = "";
	$fieldLabelsaldevindiv_sol_estados["Spanish"]["estadosol_id"] = "Estadosol Id";
	$fieldToolTipsaldevindiv_sol_estados["Spanish"]["estadosol_id"] = "";
	$placeHoldersaldevindiv_sol_estados["Spanish"]["estadosol_id"] = "";
	if (count($fieldToolTipsaldevindiv_sol_estados["Spanish"]))
		$tdataaldevindiv_sol_estados[".isUseToolTips"] = true;
}


	$tdataaldevindiv_sol_estados[".NCSearch"] = true;



$tdataaldevindiv_sol_estados[".shortTableName"] = "aldevindiv_sol_estados";
$tdataaldevindiv_sol_estados[".nSecOptions"] = 0;

$tdataaldevindiv_sol_estados[".mainTableOwnerID"] = "";
$tdataaldevindiv_sol_estados[".entityType"] = 0;
$tdataaldevindiv_sol_estados[".connId"] = "dbrf_at_127_0_0_1";


$tdataaldevindiv_sol_estados[".strOriginalTableName"] = "aldevindiv_sol_estados";

	



$tdataaldevindiv_sol_estados[".showAddInPopup"] = false;

$tdataaldevindiv_sol_estados[".showEditInPopup"] = false;

$tdataaldevindiv_sol_estados[".showViewInPopup"] = false;

$tdataaldevindiv_sol_estados[".listAjax"] = false;
//	temporary
//$tdataaldevindiv_sol_estados[".listAjax"] = false;

	$tdataaldevindiv_sol_estados[".audit"] = false;

	$tdataaldevindiv_sol_estados[".locking"] = false;


$pages = $tdataaldevindiv_sol_estados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaldevindiv_sol_estados[".edit"] = true;
	$tdataaldevindiv_sol_estados[".afterEditAction"] = 1;
	$tdataaldevindiv_sol_estados[".closePopupAfterEdit"] = 1;
	$tdataaldevindiv_sol_estados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaldevindiv_sol_estados[".add"] = true;
$tdataaldevindiv_sol_estados[".afterAddAction"] = 1;
$tdataaldevindiv_sol_estados[".closePopupAfterAdd"] = 1;
$tdataaldevindiv_sol_estados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaldevindiv_sol_estados[".list"] = true;
}



$tdataaldevindiv_sol_estados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaldevindiv_sol_estados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaldevindiv_sol_estados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaldevindiv_sol_estados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaldevindiv_sol_estados[".printFriendly"] = true;
}



$tdataaldevindiv_sol_estados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaldevindiv_sol_estados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaldevindiv_sol_estados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaldevindiv_sol_estados[".isUseAjaxSuggest"] = true;



												

$tdataaldevindiv_sol_estados[".ajaxCodeSnippetAdded"] = false;

$tdataaldevindiv_sol_estados[".buttonsAdded"] = false;

$tdataaldevindiv_sol_estados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaldevindiv_sol_estados[".isUseTimeForSearch"] = false;


$tdataaldevindiv_sol_estados[".badgeColor"] = "8FBC8B";


$tdataaldevindiv_sol_estados[".allSearchFields"] = array();
$tdataaldevindiv_sol_estados[".filterFields"] = array();
$tdataaldevindiv_sol_estados[".requiredSearchFields"] = array();

$tdataaldevindiv_sol_estados[".googleLikeFields"] = array();
$tdataaldevindiv_sol_estados[".googleLikeFields"][] = "estadosol_id";
$tdataaldevindiv_sol_estados[".googleLikeFields"][] = "estado_name";



$tdataaldevindiv_sol_estados[".tableType"] = "list";

$tdataaldevindiv_sol_estados[".printerPageOrientation"] = 0;
$tdataaldevindiv_sol_estados[".nPrinterPageScale"] = 100;

$tdataaldevindiv_sol_estados[".nPrinterSplitRecords"] = 40;

$tdataaldevindiv_sol_estados[".geocodingEnabled"] = false;










$tdataaldevindiv_sol_estados[".pageSize"] = 20;

$tdataaldevindiv_sol_estados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaldevindiv_sol_estados[".strOrderBy"] = $tstrOrderBy;

$tdataaldevindiv_sol_estados[".orderindexes"] = array();


$tdataaldevindiv_sol_estados[".sqlHead"] = "SELECT estadosol_id,  	estado_name";
$tdataaldevindiv_sol_estados[".sqlFrom"] = "FROM aldevindiv_sol_estados";
$tdataaldevindiv_sol_estados[".sqlWhereExpr"] = "";
$tdataaldevindiv_sol_estados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaldevindiv_sol_estados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaldevindiv_sol_estados[".arrGroupsPerPage"] = $arrGPP;

$tdataaldevindiv_sol_estados[".highlightSearchResults"] = true;

$tableKeysaldevindiv_sol_estados = array();
$tableKeysaldevindiv_sol_estados[] = "estadosol_id";
$tdataaldevindiv_sol_estados[".Keys"] = $tableKeysaldevindiv_sol_estados;


$tdataaldevindiv_sol_estados[".hideMobileList"] = array();




//	estadosol_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estadosol_id";
	$fdata["GoodName"] = "estadosol_id";
	$fdata["ownerTable"] = "aldevindiv_sol_estados";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_estados","estadosol_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estadosol_id";

		$fdata["sourceSingle"] = "estadosol_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadosol_id";

	
	
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


	$tdataaldevindiv_sol_estados["estadosol_id"] = $fdata;
		$tdataaldevindiv_sol_estados[".searchableFields"][] = "estadosol_id";
//	estado_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_name";
	$fdata["GoodName"] = "estado_name";
	$fdata["ownerTable"] = "aldevindiv_sol_estados";
	$fdata["Label"] = GetFieldLabel("aldevindiv_sol_estados","estado_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_name";

		$fdata["sourceSingle"] = "estado_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_name";

	
	
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


	$tdataaldevindiv_sol_estados["estado_name"] = $fdata;
		$tdataaldevindiv_sol_estados[".searchableFields"][] = "estado_name";


$tables_data["aldevindiv_sol_estados"]=&$tdataaldevindiv_sol_estados;
$field_labels["aldevindiv_sol_estados"] = &$fieldLabelsaldevindiv_sol_estados;
$fieldToolTips["aldevindiv_sol_estados"] = &$fieldToolTipsaldevindiv_sol_estados;
$placeHolders["aldevindiv_sol_estados"] = &$placeHoldersaldevindiv_sol_estados;
$page_titles["aldevindiv_sol_estados"] = &$pageTitlesaldevindiv_sol_estados;


changeTextControlsToDate( "aldevindiv_sol_estados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aldevindiv_sol_estados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aldevindiv_sol_estados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aldevindiv_sol_estados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estadosol_id,  	estado_name";
$proto0["m_strFrom"] = "FROM aldevindiv_sol_estados";
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
	"m_strName" => "estadosol_id",
	"m_strTable" => "aldevindiv_sol_estados",
	"m_srcTableName" => "aldevindiv_sol_estados"
));

$proto6["m_sql"] = "estadosol_id";
$proto6["m_srcTableName"] = "aldevindiv_sol_estados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_name",
	"m_strTable" => "aldevindiv_sol_estados",
	"m_srcTableName" => "aldevindiv_sol_estados"
));

$proto8["m_sql"] = "estado_name";
$proto8["m_srcTableName"] = "aldevindiv_sol_estados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "aldevindiv_sol_estados";
$proto11["m_srcTableName"] = "aldevindiv_sol_estados";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estadosol_id";
$proto11["m_columns"][] = "estado_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "aldevindiv_sol_estados";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "aldevindiv_sol_estados";
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
$proto0["m_srcTableName"]="aldevindiv_sol_estados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aldevindiv_sol_estados = createSqlQuery_aldevindiv_sol_estados();


	
								;

		

$tdataaldevindiv_sol_estados[".sqlquery"] = $queryData_aldevindiv_sol_estados;



$tdataaldevindiv_sol_estados[".hasEvents"] = false;

?>