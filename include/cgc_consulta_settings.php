<?php
$tdatacgc_consulta = array();
$tdatacgc_consulta[".searchableFields"] = array();
$tdatacgc_consulta[".ShortName"] = "cgc_consulta";
$tdatacgc_consulta[".OwnerID"] = "";
$tdatacgc_consulta[".OriginalTable"] = "cgc_6";


$tdatacgc_consulta[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacgc_consulta[".originalPagesByType"] = $tdatacgc_consulta[".pagesByType"];
$tdatacgc_consulta[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacgc_consulta[".originalPages"] = $tdatacgc_consulta[".pages"];
$tdatacgc_consulta[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacgc_consulta[".originalDefaultPages"] = $tdatacgc_consulta[".defaultPages"];

//	field labels
$fieldLabelscgc_consulta = array();
$fieldToolTipscgc_consulta = array();
$pageTitlescgc_consulta = array();
$placeHolderscgc_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscgc_consulta["Spanish"] = array();
	$fieldToolTipscgc_consulta["Spanish"] = array();
	$placeHolderscgc_consulta["Spanish"] = array();
	$pageTitlescgc_consulta["Spanish"] = array();
	$fieldLabelscgc_consulta["Spanish"]["cgc_di"] = "Cgc Di";
	$fieldToolTipscgc_consulta["Spanish"]["cgc_di"] = "";
	$placeHolderscgc_consulta["Spanish"]["cgc_di"] = "";
	$fieldLabelscgc_consulta["Spanish"]["CodigoContable"] = "Código Contable";
	$fieldToolTipscgc_consulta["Spanish"]["CodigoContable"] = "";
	$placeHolderscgc_consulta["Spanish"]["CodigoContable"] = "";
	$fieldLabelscgc_consulta["Spanish"]["CodigoContableN"] = "Codigo Contable Numérico";
	$fieldToolTipscgc_consulta["Spanish"]["CodigoContableN"] = "";
	$placeHolderscgc_consulta["Spanish"]["CodigoContableN"] = "";
	$fieldLabelscgc_consulta["Spanish"]["pos_9"] = "Pos 9";
	$fieldToolTipscgc_consulta["Spanish"]["pos_9"] = "";
	$placeHolderscgc_consulta["Spanish"]["pos_9"] = "";
	$fieldLabelscgc_consulta["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipscgc_consulta["Spanish"]["Descripcion"] = "";
	$placeHolderscgc_consulta["Spanish"]["Descripcion"] = "";
	if (count($fieldToolTipscgc_consulta["Spanish"]))
		$tdatacgc_consulta[".isUseToolTips"] = true;
}


	$tdatacgc_consulta[".NCSearch"] = true;



$tdatacgc_consulta[".shortTableName"] = "cgc_consulta";
$tdatacgc_consulta[".nSecOptions"] = 0;

$tdatacgc_consulta[".mainTableOwnerID"] = "";
$tdatacgc_consulta[".entityType"] = 1;
$tdatacgc_consulta[".connId"] = "dbrf_at_127_0_0_1";


$tdatacgc_consulta[".strOriginalTableName"] = "cgc_6";

	



$tdatacgc_consulta[".showAddInPopup"] = false;

$tdatacgc_consulta[".showEditInPopup"] = false;

$tdatacgc_consulta[".showViewInPopup"] = false;

$tdatacgc_consulta[".listAjax"] = false;
//	temporary
//$tdatacgc_consulta[".listAjax"] = false;

	$tdatacgc_consulta[".audit"] = false;

	$tdatacgc_consulta[".locking"] = false;


$pages = $tdatacgc_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacgc_consulta[".edit"] = true;
	$tdatacgc_consulta[".afterEditAction"] = 1;
	$tdatacgc_consulta[".closePopupAfterEdit"] = 1;
	$tdatacgc_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacgc_consulta[".add"] = true;
$tdatacgc_consulta[".afterAddAction"] = 1;
$tdatacgc_consulta[".closePopupAfterAdd"] = 1;
$tdatacgc_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacgc_consulta[".list"] = true;
}



$tdatacgc_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacgc_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacgc_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacgc_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacgc_consulta[".printFriendly"] = true;
}



$tdatacgc_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacgc_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacgc_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacgc_consulta[".isUseAjaxSuggest"] = true;



												

$tdatacgc_consulta[".ajaxCodeSnippetAdded"] = false;

$tdatacgc_consulta[".buttonsAdded"] = false;

$tdatacgc_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacgc_consulta[".isUseTimeForSearch"] = false;


$tdatacgc_consulta[".badgeColor"] = "6493EA";


$tdatacgc_consulta[".allSearchFields"] = array();
$tdatacgc_consulta[".filterFields"] = array();
$tdatacgc_consulta[".requiredSearchFields"] = array();

$tdatacgc_consulta[".googleLikeFields"] = array();
$tdatacgc_consulta[".googleLikeFields"][] = "cgc_di";
$tdatacgc_consulta[".googleLikeFields"][] = "CodigoContable";
$tdatacgc_consulta[".googleLikeFields"][] = "CodigoContableN";
$tdatacgc_consulta[".googleLikeFields"][] = "Descripcion";
$tdatacgc_consulta[".googleLikeFields"][] = "pos_9";



$tdatacgc_consulta[".tableType"] = "list";

$tdatacgc_consulta[".printerPageOrientation"] = 0;
$tdatacgc_consulta[".nPrinterPageScale"] = 100;

$tdatacgc_consulta[".nPrinterSplitRecords"] = 40;

$tdatacgc_consulta[".geocodingEnabled"] = false;










$tdatacgc_consulta[".pageSize"] = 20;

$tdatacgc_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacgc_consulta[".strOrderBy"] = $tstrOrderBy;

$tdatacgc_consulta[".orderindexes"] = array();


$tdatacgc_consulta[".sqlHead"] = "SELECT cgc_di,  CodigoContable,  pos_9num as CodigoContableN,  CONCAT_WS(' ->', CodigoContable, Descripcion_9) AS Descripcion,  pos_9";
$tdatacgc_consulta[".sqlFrom"] = "FROM cgc_6";
$tdatacgc_consulta[".sqlWhereExpr"] = "(pos_9 is not null)";
$tdatacgc_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacgc_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacgc_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdatacgc_consulta[".highlightSearchResults"] = true;

$tableKeyscgc_consulta = array();
$tableKeyscgc_consulta[] = "cgc_di";
$tdatacgc_consulta[".Keys"] = $tableKeyscgc_consulta;


$tdatacgc_consulta[".hideMobileList"] = array();




//	cgc_di
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cgc_di";
	$fdata["GoodName"] = "cgc_di";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_consulta","cgc_di");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cgc_di";

		$fdata["sourceSingle"] = "cgc_di";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cgc_di";

	
	
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


	$tdatacgc_consulta["cgc_di"] = $fdata;
		$tdatacgc_consulta[".searchableFields"][] = "cgc_di";
//	CodigoContable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodigoContable";
	$fdata["GoodName"] = "CodigoContable";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_consulta","CodigoContable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CodigoContable";

		$fdata["sourceSingle"] = "CodigoContable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodigoContable";

	
	
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


	$tdatacgc_consulta["CodigoContable"] = $fdata;
		$tdatacgc_consulta[".searchableFields"][] = "CodigoContable";
//	CodigoContableN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CodigoContableN";
	$fdata["GoodName"] = "CodigoContableN";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_consulta","CodigoContableN");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pos_9num";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_9num";

	
	
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


	$tdatacgc_consulta["CodigoContableN"] = $fdata;
		$tdatacgc_consulta[".searchableFields"][] = "CodigoContableN";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cgc_consulta","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT_WS(' ->', CodigoContable, Descripcion_9)";

	
	
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


	$tdatacgc_consulta["Descripcion"] = $fdata;
		$tdatacgc_consulta[".searchableFields"][] = "Descripcion";
//	pos_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pos_9";
	$fdata["GoodName"] = "pos_9";
	$fdata["ownerTable"] = "cgc_6";
	$fdata["Label"] = GetFieldLabel("cgc_consulta","pos_9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pos_9";

		$fdata["sourceSingle"] = "pos_9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_9";

	
	
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


	$tdatacgc_consulta["pos_9"] = $fdata;
		$tdatacgc_consulta[".searchableFields"][] = "pos_9";


$tables_data["cgc_consulta"]=&$tdatacgc_consulta;
$field_labels["cgc_consulta"] = &$fieldLabelscgc_consulta;
$fieldToolTips["cgc_consulta"] = &$fieldToolTipscgc_consulta;
$placeHolders["cgc_consulta"] = &$placeHolderscgc_consulta;
$page_titles["cgc_consulta"] = &$pageTitlescgc_consulta;


changeTextControlsToDate( "cgc_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cgc_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cgc_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cgc_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cgc_di,  CodigoContable,  pos_9num as CodigoContableN,  CONCAT_WS(' ->', CodigoContable, Descripcion_9) AS Descripcion,  pos_9";
$proto0["m_strFrom"] = "FROM cgc_6";
$proto0["m_strWhere"] = "(pos_9 is not null)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "pos_9 is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_9",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_consulta"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "is not null";
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
	"m_strName" => "cgc_di",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_consulta"
));

$proto6["m_sql"] = "cgc_di";
$proto6["m_srcTableName"] = "cgc_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoContable",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_consulta"
));

$proto8["m_sql"] = "CodigoContable";
$proto8["m_srcTableName"] = "cgc_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_9num",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_consulta"
));

$proto10["m_sql"] = "pos_9num";
$proto10["m_srcTableName"] = "cgc_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "CodigoContableN";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "' ->'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CodigoContable"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Descripcion_9"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "CONCAT_WS";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "CONCAT_WS(' ->', CodigoContable, Descripcion_9)";
$proto12["m_srcTableName"] = "cgc_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Descripcion";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_9",
	"m_strTable" => "cgc_6",
	"m_srcTableName" => "cgc_consulta"
));

$proto17["m_sql"] = "pos_9";
$proto17["m_srcTableName"] = "cgc_consulta";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "cgc_6";
$proto20["m_srcTableName"] = "cgc_consulta";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "cgc_di";
$proto20["m_columns"][] = "pos_1";
$proto20["m_columns"][] = "pos_2";
$proto20["m_columns"][] = "pos_4";
$proto20["m_columns"][] = "pos_6";
$proto20["m_columns"][] = "pos_9";
$proto20["m_columns"][] = "pos_9num";
$proto20["m_columns"][] = "CodigoContable";
$proto20["m_columns"][] = "Descripcion_9";
$proto20["m_columns"][] = "Imputable";
$proto20["m_columns"][] = "Clasifica";
$proto20["m_columns"][] = "Manual";
$proto20["m_columns"][] = "Reciproca";
$proto20["m_columns"][] = "AplBanco";
$proto20["m_columns"][] = "Naturaleza";
$proto20["m_columns"][] = "Saldo";
$proto20["m_columns"][] = "Vigente";
$proto20["m_columns"][] = "CodigoEntidad";
$proto20["m_columns"][] = "EntidadContablePublica";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "cgc_6";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "cgc_consulta";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cgc_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cgc_consulta = createSqlQuery_cgc_consulta();


	
								;

					

$tdatacgc_consulta[".sqlquery"] = $queryData_cgc_consulta;



$tdatacgc_consulta[".hasEvents"] = false;

?>