<?php
$tdatageunidmedida = array();
$tdatageunidmedida[".searchableFields"] = array();
$tdatageunidmedida[".ShortName"] = "geunidmedida";
$tdatageunidmedida[".OwnerID"] = "";
$tdatageunidmedida[".OriginalTable"] = "geunidmedida";


$tdatageunidmedida[".pagesByType"] = my_json_decode( "{}" );
$tdatageunidmedida[".originalPagesByType"] = $tdatageunidmedida[".pagesByType"];
$tdatageunidmedida[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatageunidmedida[".originalPages"] = $tdatageunidmedida[".pages"];
$tdatageunidmedida[".defaultPages"] = my_json_decode( "{}" );
$tdatageunidmedida[".originalDefaultPages"] = $tdatageunidmedida[".defaultPages"];

//	field labels
$fieldLabelsgeunidmedida = array();
$fieldToolTipsgeunidmedida = array();
$pageTitlesgeunidmedida = array();
$placeHoldersgeunidmedida = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgeunidmedida["Spanish"] = array();
	$fieldToolTipsgeunidmedida["Spanish"] = array();
	$placeHoldersgeunidmedida["Spanish"] = array();
	$pageTitlesgeunidmedida["Spanish"] = array();
	$fieldLabelsgeunidmedida["Spanish"]["Id"] = "Id";
	$fieldToolTipsgeunidmedida["Spanish"]["Id"] = "";
	$placeHoldersgeunidmedida["Spanish"]["Id"] = "";
	$fieldLabelsgeunidmedida["Spanish"]["um_codunimed"] = "Um Codunimed";
	$fieldToolTipsgeunidmedida["Spanish"]["um_codunimed"] = "";
	$placeHoldersgeunidmedida["Spanish"]["um_codunimed"] = "";
	$fieldLabelsgeunidmedida["Spanish"]["um_nomunimed"] = "Um Nomunimed";
	$fieldToolTipsgeunidmedida["Spanish"]["um_nomunimed"] = "";
	$placeHoldersgeunidmedida["Spanish"]["um_nomunimed"] = "";
	if (count($fieldToolTipsgeunidmedida["Spanish"]))
		$tdatageunidmedida[".isUseToolTips"] = true;
}


	$tdatageunidmedida[".NCSearch"] = true;



$tdatageunidmedida[".shortTableName"] = "geunidmedida";
$tdatageunidmedida[".nSecOptions"] = 0;

$tdatageunidmedida[".mainTableOwnerID"] = "";
$tdatageunidmedida[".entityType"] = 0;
$tdatageunidmedida[".connId"] = "dbrf_at_127_0_0_1";


$tdatageunidmedida[".strOriginalTableName"] = "geunidmedida";

	



$tdatageunidmedida[".showAddInPopup"] = false;

$tdatageunidmedida[".showEditInPopup"] = false;

$tdatageunidmedida[".showViewInPopup"] = false;

$tdatageunidmedida[".listAjax"] = false;
//	temporary
//$tdatageunidmedida[".listAjax"] = false;

	$tdatageunidmedida[".audit"] = false;

	$tdatageunidmedida[".locking"] = false;


$pages = $tdatageunidmedida[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatageunidmedida[".edit"] = true;
	$tdatageunidmedida[".afterEditAction"] = 1;
	$tdatageunidmedida[".closePopupAfterEdit"] = 1;
	$tdatageunidmedida[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatageunidmedida[".add"] = true;
$tdatageunidmedida[".afterAddAction"] = 1;
$tdatageunidmedida[".closePopupAfterAdd"] = 1;
$tdatageunidmedida[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatageunidmedida[".list"] = true;
}



$tdatageunidmedida[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatageunidmedida[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatageunidmedida[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatageunidmedida[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatageunidmedida[".printFriendly"] = true;
}



$tdatageunidmedida[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatageunidmedida[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatageunidmedida[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatageunidmedida[".isUseAjaxSuggest"] = true;



												

$tdatageunidmedida[".ajaxCodeSnippetAdded"] = false;

$tdatageunidmedida[".buttonsAdded"] = false;

$tdatageunidmedida[".addPageEvents"] = false;

// use timepicker for search panel
$tdatageunidmedida[".isUseTimeForSearch"] = false;


$tdatageunidmedida[".badgeColor"] = "B22222";


$tdatageunidmedida[".allSearchFields"] = array();
$tdatageunidmedida[".filterFields"] = array();
$tdatageunidmedida[".requiredSearchFields"] = array();

$tdatageunidmedida[".googleLikeFields"] = array();
$tdatageunidmedida[".googleLikeFields"][] = "Id";
$tdatageunidmedida[".googleLikeFields"][] = "um_codunimed";
$tdatageunidmedida[".googleLikeFields"][] = "um_nomunimed";



$tdatageunidmedida[".tableType"] = "list";

$tdatageunidmedida[".printerPageOrientation"] = 0;
$tdatageunidmedida[".nPrinterPageScale"] = 100;

$tdatageunidmedida[".nPrinterSplitRecords"] = 40;

$tdatageunidmedida[".geocodingEnabled"] = false;










$tdatageunidmedida[".pageSize"] = 20;

$tdatageunidmedida[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatageunidmedida[".strOrderBy"] = $tstrOrderBy;

$tdatageunidmedida[".orderindexes"] = array();


$tdatageunidmedida[".sqlHead"] = "SELECT Id,  	um_codunimed,  	um_nomunimed";
$tdatageunidmedida[".sqlFrom"] = "FROM geunidmedida";
$tdatageunidmedida[".sqlWhereExpr"] = "";
$tdatageunidmedida[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatageunidmedida[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatageunidmedida[".arrGroupsPerPage"] = $arrGPP;

$tdatageunidmedida[".highlightSearchResults"] = true;

$tableKeysgeunidmedida = array();
$tableKeysgeunidmedida[] = "Id";
$tdatageunidmedida[".Keys"] = $tableKeysgeunidmedida;


$tdatageunidmedida[".hideMobileList"] = array();




//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "geunidmedida";
	$fdata["Label"] = GetFieldLabel("geunidmedida","Id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id";

		$fdata["sourceSingle"] = "Id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
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


	$tdatageunidmedida["Id"] = $fdata;
		$tdatageunidmedida[".searchableFields"][] = "Id";
//	um_codunimed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "um_codunimed";
	$fdata["GoodName"] = "um_codunimed";
	$fdata["ownerTable"] = "geunidmedida";
	$fdata["Label"] = GetFieldLabel("geunidmedida","um_codunimed");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "um_codunimed";

		$fdata["sourceSingle"] = "um_codunimed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "um_codunimed";

	
	
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


	$tdatageunidmedida["um_codunimed"] = $fdata;
		$tdatageunidmedida[".searchableFields"][] = "um_codunimed";
//	um_nomunimed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "um_nomunimed";
	$fdata["GoodName"] = "um_nomunimed";
	$fdata["ownerTable"] = "geunidmedida";
	$fdata["Label"] = GetFieldLabel("geunidmedida","um_nomunimed");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "um_nomunimed";

		$fdata["sourceSingle"] = "um_nomunimed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "um_nomunimed";

	
	
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


	$tdatageunidmedida["um_nomunimed"] = $fdata;
		$tdatageunidmedida[".searchableFields"][] = "um_nomunimed";


$tables_data["geunidmedida"]=&$tdatageunidmedida;
$field_labels["geunidmedida"] = &$fieldLabelsgeunidmedida;
$fieldToolTips["geunidmedida"] = &$fieldToolTipsgeunidmedida;
$placeHolders["geunidmedida"] = &$placeHoldersgeunidmedida;
$page_titles["geunidmedida"] = &$pageTitlesgeunidmedida;


changeTextControlsToDate( "geunidmedida" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["geunidmedida"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["geunidmedida"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_geunidmedida()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	um_codunimed,  	um_nomunimed";
$proto0["m_strFrom"] = "FROM geunidmedida";
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
	"m_strName" => "Id",
	"m_strTable" => "geunidmedida",
	"m_srcTableName" => "geunidmedida"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "geunidmedida";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "um_codunimed",
	"m_strTable" => "geunidmedida",
	"m_srcTableName" => "geunidmedida"
));

$proto8["m_sql"] = "um_codunimed";
$proto8["m_srcTableName"] = "geunidmedida";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "um_nomunimed",
	"m_strTable" => "geunidmedida",
	"m_srcTableName" => "geunidmedida"
));

$proto10["m_sql"] = "um_nomunimed";
$proto10["m_srcTableName"] = "geunidmedida";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "geunidmedida";
$proto13["m_srcTableName"] = "geunidmedida";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id";
$proto13["m_columns"][] = "um_codunimed";
$proto13["m_columns"][] = "um_nomunimed";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "geunidmedida";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "geunidmedida";
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
$proto0["m_srcTableName"]="geunidmedida";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_geunidmedida = createSqlQuery_geunidmedida();


	
								;

			

$tdatageunidmedida[".sqlquery"] = $queryData_geunidmedida;



$tdatageunidmedida[".hasEvents"] = false;

?>