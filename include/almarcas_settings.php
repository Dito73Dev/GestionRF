<?php
$tdataalmarcas = array();
$tdataalmarcas[".searchableFields"] = array();
$tdataalmarcas[".ShortName"] = "almarcas";
$tdataalmarcas[".OwnerID"] = "";
$tdataalmarcas[".OriginalTable"] = "almarcas";


$tdataalmarcas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmarcas[".originalPagesByType"] = $tdataalmarcas[".pagesByType"];
$tdataalmarcas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmarcas[".originalPages"] = $tdataalmarcas[".pages"];
$tdataalmarcas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmarcas[".originalDefaultPages"] = $tdataalmarcas[".defaultPages"];

//	field labels
$fieldLabelsalmarcas = array();
$fieldToolTipsalmarcas = array();
$pageTitlesalmarcas = array();
$placeHoldersalmarcas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmarcas["Spanish"] = array();
	$fieldToolTipsalmarcas["Spanish"] = array();
	$placeHoldersalmarcas["Spanish"] = array();
	$pageTitlesalmarcas["Spanish"] = array();
	$fieldLabelsalmarcas["Spanish"]["almarcas_id"] = "Cod. Marca";
	$fieldToolTipsalmarcas["Spanish"]["almarcas_id"] = "";
	$placeHoldersalmarcas["Spanish"]["almarcas_id"] = "";
	$fieldLabelsalmarcas["Spanish"]["ma_codmarca"] = "Ma Codmarca";
	$fieldToolTipsalmarcas["Spanish"]["ma_codmarca"] = "";
	$placeHoldersalmarcas["Spanish"]["ma_codmarca"] = "";
	$fieldLabelsalmarcas["Spanish"]["ma_nommarca"] = "Marca";
	$fieldToolTipsalmarcas["Spanish"]["ma_nommarca"] = "";
	$placeHoldersalmarcas["Spanish"]["ma_nommarca"] = "";
	$fieldLabelsalmarcas["Spanish"]["ma_observaciones"] = "Ma Observaciones";
	$fieldToolTipsalmarcas["Spanish"]["ma_observaciones"] = "";
	$placeHoldersalmarcas["Spanish"]["ma_observaciones"] = "";
	if (count($fieldToolTipsalmarcas["Spanish"]))
		$tdataalmarcas[".isUseToolTips"] = true;
}


	$tdataalmarcas[".NCSearch"] = true;



$tdataalmarcas[".shortTableName"] = "almarcas";
$tdataalmarcas[".nSecOptions"] = 0;

$tdataalmarcas[".mainTableOwnerID"] = "";
$tdataalmarcas[".entityType"] = 0;
$tdataalmarcas[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmarcas[".strOriginalTableName"] = "almarcas";

	



$tdataalmarcas[".showAddInPopup"] = false;

$tdataalmarcas[".showEditInPopup"] = false;

$tdataalmarcas[".showViewInPopup"] = false;

$tdataalmarcas[".listAjax"] = false;
//	temporary
//$tdataalmarcas[".listAjax"] = false;

	$tdataalmarcas[".audit"] = false;

	$tdataalmarcas[".locking"] = false;


$pages = $tdataalmarcas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmarcas[".edit"] = true;
	$tdataalmarcas[".afterEditAction"] = 0;
	$tdataalmarcas[".closePopupAfterEdit"] = 1;
	$tdataalmarcas[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataalmarcas[".add"] = true;
$tdataalmarcas[".afterAddAction"] = 1;
$tdataalmarcas[".closePopupAfterAdd"] = 1;
$tdataalmarcas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmarcas[".list"] = true;
}



$tdataalmarcas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmarcas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmarcas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmarcas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmarcas[".printFriendly"] = true;
}



$tdataalmarcas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmarcas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmarcas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmarcas[".isUseAjaxSuggest"] = true;



												

$tdataalmarcas[".ajaxCodeSnippetAdded"] = false;

$tdataalmarcas[".buttonsAdded"] = false;

$tdataalmarcas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalmarcas[".isUseTimeForSearch"] = false;


$tdataalmarcas[".badgeColor"] = "E07878";


$tdataalmarcas[".allSearchFields"] = array();
$tdataalmarcas[".filterFields"] = array();
$tdataalmarcas[".requiredSearchFields"] = array();

$tdataalmarcas[".googleLikeFields"] = array();
$tdataalmarcas[".googleLikeFields"][] = "almarcas_id";
$tdataalmarcas[".googleLikeFields"][] = "ma_codmarca";
$tdataalmarcas[".googleLikeFields"][] = "ma_nommarca";
$tdataalmarcas[".googleLikeFields"][] = "ma_observaciones";



$tdataalmarcas[".tableType"] = "list";

$tdataalmarcas[".printerPageOrientation"] = 0;
$tdataalmarcas[".nPrinterPageScale"] = 100;

$tdataalmarcas[".nPrinterSplitRecords"] = 40;

$tdataalmarcas[".geocodingEnabled"] = false;










$tdataalmarcas[".pageSize"] = 20;

$tdataalmarcas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmarcas[".strOrderBy"] = $tstrOrderBy;

$tdataalmarcas[".orderindexes"] = array();


$tdataalmarcas[".sqlHead"] = "SELECT almarcas_id,  	ma_codmarca,  	ma_nommarca,  	ma_observaciones";
$tdataalmarcas[".sqlFrom"] = "FROM almarcas";
$tdataalmarcas[".sqlWhereExpr"] = "";
$tdataalmarcas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmarcas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmarcas[".arrGroupsPerPage"] = $arrGPP;

$tdataalmarcas[".highlightSearchResults"] = true;

$tableKeysalmarcas = array();
$tableKeysalmarcas[] = "almarcas_id";
$tdataalmarcas[".Keys"] = $tableKeysalmarcas;


$tdataalmarcas[".hideMobileList"] = array();




//	almarcas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almarcas_id";
	$fdata["GoodName"] = "almarcas_id";
	$fdata["ownerTable"] = "almarcas";
	$fdata["Label"] = GetFieldLabel("almarcas","almarcas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almarcas_id";

		$fdata["sourceSingle"] = "almarcas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almarcas_id";

	
	
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


	$tdataalmarcas["almarcas_id"] = $fdata;
		$tdataalmarcas[".searchableFields"][] = "almarcas_id";
//	ma_codmarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ma_codmarca";
	$fdata["GoodName"] = "ma_codmarca";
	$fdata["ownerTable"] = "almarcas";
	$fdata["Label"] = GetFieldLabel("almarcas","ma_codmarca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ma_codmarca";

		$fdata["sourceSingle"] = "ma_codmarca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ma_codmarca";

	
	
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


	$tdataalmarcas["ma_codmarca"] = $fdata;
		$tdataalmarcas[".searchableFields"][] = "ma_codmarca";
//	ma_nommarca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ma_nommarca";
	$fdata["GoodName"] = "ma_nommarca";
	$fdata["ownerTable"] = "almarcas";
	$fdata["Label"] = GetFieldLabel("almarcas","ma_nommarca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ma_nommarca";

		$fdata["sourceSingle"] = "ma_nommarca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ma_nommarca";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "La marca \" %value% \" ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataalmarcas["ma_nommarca"] = $fdata;
		$tdataalmarcas[".searchableFields"][] = "ma_nommarca";
//	ma_observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ma_observaciones";
	$fdata["GoodName"] = "ma_observaciones";
	$fdata["ownerTable"] = "almarcas";
	$fdata["Label"] = GetFieldLabel("almarcas","ma_observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ma_observaciones";

		$fdata["sourceSingle"] = "ma_observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ma_observaciones";

	
	
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


	$tdataalmarcas["ma_observaciones"] = $fdata;
		$tdataalmarcas[".searchableFields"][] = "ma_observaciones";


$tables_data["almarcas"]=&$tdataalmarcas;
$field_labels["almarcas"] = &$fieldLabelsalmarcas;
$fieldToolTips["almarcas"] = &$fieldToolTipsalmarcas;
$placeHolders["almarcas"] = &$placeHoldersalmarcas;
$page_titles["almarcas"] = &$pageTitlesalmarcas;


changeTextControlsToDate( "almarcas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almarcas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almarcas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almarcas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almarcas_id,  	ma_codmarca,  	ma_nommarca,  	ma_observaciones";
$proto0["m_strFrom"] = "FROM almarcas";
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
	"m_strName" => "almarcas_id",
	"m_strTable" => "almarcas",
	"m_srcTableName" => "almarcas"
));

$proto6["m_sql"] = "almarcas_id";
$proto6["m_srcTableName"] = "almarcas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ma_codmarca",
	"m_strTable" => "almarcas",
	"m_srcTableName" => "almarcas"
));

$proto8["m_sql"] = "ma_codmarca";
$proto8["m_srcTableName"] = "almarcas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ma_nommarca",
	"m_strTable" => "almarcas",
	"m_srcTableName" => "almarcas"
));

$proto10["m_sql"] = "ma_nommarca";
$proto10["m_srcTableName"] = "almarcas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ma_observaciones",
	"m_strTable" => "almarcas",
	"m_srcTableName" => "almarcas"
));

$proto12["m_sql"] = "ma_observaciones";
$proto12["m_srcTableName"] = "almarcas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "almarcas";
$proto15["m_srcTableName"] = "almarcas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "almarcas_id";
$proto15["m_columns"][] = "ma_codmarca";
$proto15["m_columns"][] = "ma_nommarca";
$proto15["m_columns"][] = "ma_observaciones";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "almarcas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "almarcas";
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
$proto0["m_srcTableName"]="almarcas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almarcas = createSqlQuery_almarcas();


	
								;

				

$tdataalmarcas[".sqlquery"] = $queryData_almarcas;



include_once(getabspath("include/almarcas_events.php"));
$tdataalmarcas[".hasEvents"] = true;

?>