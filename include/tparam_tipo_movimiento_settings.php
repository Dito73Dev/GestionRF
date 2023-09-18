<?php
$tdatatparam_tipo_movimiento = array();
$tdatatparam_tipo_movimiento[".searchableFields"] = array();
$tdatatparam_tipo_movimiento[".ShortName"] = "tparam_tipo_movimiento";
$tdatatparam_tipo_movimiento[".OwnerID"] = "";
$tdatatparam_tipo_movimiento[".OriginalTable"] = "tparam_tipo_movimiento";


$tdatatparam_tipo_movimiento[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatparam_tipo_movimiento[".originalPagesByType"] = $tdatatparam_tipo_movimiento[".pagesByType"];
$tdatatparam_tipo_movimiento[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatparam_tipo_movimiento[".originalPages"] = $tdatatparam_tipo_movimiento[".pages"];
$tdatatparam_tipo_movimiento[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatparam_tipo_movimiento[".originalDefaultPages"] = $tdatatparam_tipo_movimiento[".defaultPages"];

//	field labels
$fieldLabelstparam_tipo_movimiento = array();
$fieldToolTipstparam_tipo_movimiento = array();
$pageTitlestparam_tipo_movimiento = array();
$placeHolderstparam_tipo_movimiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipo_movimiento["Spanish"] = array();
	$fieldToolTipstparam_tipo_movimiento["Spanish"] = array();
	$placeHolderstparam_tipo_movimiento["Spanish"] = array();
	$pageTitlestparam_tipo_movimiento["Spanish"] = array();
	$fieldLabelstparam_tipo_movimiento["Spanish"]["nmovimiento"] = "Nmovimiento";
	$fieldToolTipstparam_tipo_movimiento["Spanish"]["nmovimiento"] = "";
	$placeHolderstparam_tipo_movimiento["Spanish"]["nmovimiento"] = "";
	$fieldLabelstparam_tipo_movimiento["Spanish"]["tipo_movimiento"] = "Tipo Movimiento";
	$fieldToolTipstparam_tipo_movimiento["Spanish"]["tipo_movimiento"] = "";
	$placeHolderstparam_tipo_movimiento["Spanish"]["tipo_movimiento"] = "";
	$fieldLabelstparam_tipo_movimiento["Spanish"]["cod_movimiento"] = "Cod Movimiento";
	$fieldToolTipstparam_tipo_movimiento["Spanish"]["cod_movimiento"] = "";
	$placeHolderstparam_tipo_movimiento["Spanish"]["cod_movimiento"] = "";
	if (count($fieldToolTipstparam_tipo_movimiento["Spanish"]))
		$tdatatparam_tipo_movimiento[".isUseToolTips"] = true;
}


	$tdatatparam_tipo_movimiento[".NCSearch"] = true;



$tdatatparam_tipo_movimiento[".shortTableName"] = "tparam_tipo_movimiento";
$tdatatparam_tipo_movimiento[".nSecOptions"] = 0;

$tdatatparam_tipo_movimiento[".mainTableOwnerID"] = "";
$tdatatparam_tipo_movimiento[".entityType"] = 0;
$tdatatparam_tipo_movimiento[".connId"] = "dbrf_at_127_0_0_1";


$tdatatparam_tipo_movimiento[".strOriginalTableName"] = "tparam_tipo_movimiento";

	



$tdatatparam_tipo_movimiento[".showAddInPopup"] = false;

$tdatatparam_tipo_movimiento[".showEditInPopup"] = false;

$tdatatparam_tipo_movimiento[".showViewInPopup"] = false;

$tdatatparam_tipo_movimiento[".listAjax"] = false;
//	temporary
//$tdatatparam_tipo_movimiento[".listAjax"] = false;

	$tdatatparam_tipo_movimiento[".audit"] = false;

	$tdatatparam_tipo_movimiento[".locking"] = false;


$pages = $tdatatparam_tipo_movimiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipo_movimiento[".edit"] = true;
	$tdatatparam_tipo_movimiento[".afterEditAction"] = 1;
	$tdatatparam_tipo_movimiento[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipo_movimiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipo_movimiento[".add"] = true;
$tdatatparam_tipo_movimiento[".afterAddAction"] = 1;
$tdatatparam_tipo_movimiento[".closePopupAfterAdd"] = 1;
$tdatatparam_tipo_movimiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipo_movimiento[".list"] = true;
}



$tdatatparam_tipo_movimiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipo_movimiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipo_movimiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipo_movimiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipo_movimiento[".printFriendly"] = true;
}



$tdatatparam_tipo_movimiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipo_movimiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipo_movimiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipo_movimiento[".isUseAjaxSuggest"] = true;



												

$tdatatparam_tipo_movimiento[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipo_movimiento[".buttonsAdded"] = false;

$tdatatparam_tipo_movimiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipo_movimiento[".isUseTimeForSearch"] = false;


$tdatatparam_tipo_movimiento[".badgeColor"] = "6DA5C8";


$tdatatparam_tipo_movimiento[".allSearchFields"] = array();
$tdatatparam_tipo_movimiento[".filterFields"] = array();
$tdatatparam_tipo_movimiento[".requiredSearchFields"] = array();

$tdatatparam_tipo_movimiento[".googleLikeFields"] = array();
$tdatatparam_tipo_movimiento[".googleLikeFields"][] = "cod_movimiento";
$tdatatparam_tipo_movimiento[".googleLikeFields"][] = "tipo_movimiento";
$tdatatparam_tipo_movimiento[".googleLikeFields"][] = "nmovimiento";



$tdatatparam_tipo_movimiento[".tableType"] = "list";

$tdatatparam_tipo_movimiento[".printerPageOrientation"] = 0;
$tdatatparam_tipo_movimiento[".nPrinterPageScale"] = 100;

$tdatatparam_tipo_movimiento[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipo_movimiento[".geocodingEnabled"] = false;










$tdatatparam_tipo_movimiento[".pageSize"] = 20;

$tdatatparam_tipo_movimiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tipo_movimiento[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipo_movimiento[".orderindexes"] = array();


$tdatatparam_tipo_movimiento[".sqlHead"] = "SELECT cod_movimiento,  	tipo_movimiento,  	nmovimiento";
$tdatatparam_tipo_movimiento[".sqlFrom"] = "FROM tparam_tipo_movimiento";
$tdatatparam_tipo_movimiento[".sqlWhereExpr"] = "";
$tdatatparam_tipo_movimiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipo_movimiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipo_movimiento[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipo_movimiento[".highlightSearchResults"] = true;

$tableKeystparam_tipo_movimiento = array();
$tdatatparam_tipo_movimiento[".Keys"] = $tableKeystparam_tipo_movimiento;


$tdatatparam_tipo_movimiento[".hideMobileList"] = array();




//	cod_movimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_movimiento";
	$fdata["GoodName"] = "cod_movimiento";
	$fdata["ownerTable"] = "tparam_tipo_movimiento";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_movimiento","cod_movimiento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod_movimiento";

		$fdata["sourceSingle"] = "cod_movimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_movimiento";

	
	
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


	$tdatatparam_tipo_movimiento["cod_movimiento"] = $fdata;
		$tdatatparam_tipo_movimiento[".searchableFields"][] = "cod_movimiento";
//	tipo_movimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_movimiento";
	$fdata["GoodName"] = "tipo_movimiento";
	$fdata["ownerTable"] = "tparam_tipo_movimiento";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_movimiento","tipo_movimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movimiento";

		$fdata["sourceSingle"] = "tipo_movimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_movimiento";

	
	
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


	$tdatatparam_tipo_movimiento["tipo_movimiento"] = $fdata;
		$tdatatparam_tipo_movimiento[".searchableFields"][] = "tipo_movimiento";
//	nmovimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nmovimiento";
	$fdata["GoodName"] = "nmovimiento";
	$fdata["ownerTable"] = "tparam_tipo_movimiento";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_movimiento","nmovimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nmovimiento";

		$fdata["sourceSingle"] = "nmovimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nmovimiento";

	
	
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


	$tdatatparam_tipo_movimiento["nmovimiento"] = $fdata;
		$tdatatparam_tipo_movimiento[".searchableFields"][] = "nmovimiento";


$tables_data["tparam_tipo_movimiento"]=&$tdatatparam_tipo_movimiento;
$field_labels["tparam_tipo_movimiento"] = &$fieldLabelstparam_tipo_movimiento;
$fieldToolTips["tparam_tipo_movimiento"] = &$fieldToolTipstparam_tipo_movimiento;
$placeHolders["tparam_tipo_movimiento"] = &$placeHolderstparam_tipo_movimiento;
$page_titles["tparam_tipo_movimiento"] = &$pageTitlestparam_tipo_movimiento;


changeTextControlsToDate( "tparam_tipo_movimiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tipo_movimiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipo_movimiento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tipo_movimiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod_movimiento,  	tipo_movimiento,  	nmovimiento";
$proto0["m_strFrom"] = "FROM tparam_tipo_movimiento";
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
	"m_strName" => "cod_movimiento",
	"m_strTable" => "tparam_tipo_movimiento",
	"m_srcTableName" => "tparam_tipo_movimiento"
));

$proto6["m_sql"] = "cod_movimiento";
$proto6["m_srcTableName"] = "tparam_tipo_movimiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movimiento",
	"m_strTable" => "tparam_tipo_movimiento",
	"m_srcTableName" => "tparam_tipo_movimiento"
));

$proto8["m_sql"] = "tipo_movimiento";
$proto8["m_srcTableName"] = "tparam_tipo_movimiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nmovimiento",
	"m_strTable" => "tparam_tipo_movimiento",
	"m_srcTableName" => "tparam_tipo_movimiento"
));

$proto10["m_sql"] = "nmovimiento";
$proto10["m_srcTableName"] = "tparam_tipo_movimiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_tipo_movimiento";
$proto13["m_srcTableName"] = "tparam_tipo_movimiento";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cod_movimiento";
$proto13["m_columns"][] = "tipo_movimiento";
$proto13["m_columns"][] = "nmovimiento";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_tipo_movimiento";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_tipo_movimiento";
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
$proto0["m_srcTableName"]="tparam_tipo_movimiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipo_movimiento = createSqlQuery_tparam_tipo_movimiento();


	
								;

			

$tdatatparam_tipo_movimiento[".sqlquery"] = $queryData_tparam_tipo_movimiento;



$tdatatparam_tipo_movimiento[".hasEvents"] = false;

?>