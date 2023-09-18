<?php
$tdatainv_almacen = array();
$tdatainv_almacen[".searchableFields"] = array();
$tdatainv_almacen[".ShortName"] = "inv_almacen";
$tdatainv_almacen[".OwnerID"] = "";
$tdatainv_almacen[".OriginalTable"] = "inv_almacen";


$tdatainv_almacen[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatainv_almacen[".originalPagesByType"] = $tdatainv_almacen[".pagesByType"];
$tdatainv_almacen[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatainv_almacen[".originalPages"] = $tdatainv_almacen[".pages"];
$tdatainv_almacen[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatainv_almacen[".originalDefaultPages"] = $tdatainv_almacen[".defaultPages"];

//	field labels
$fieldLabelsinv_almacen = array();
$fieldToolTipsinv_almacen = array();
$pageTitlesinv_almacen = array();
$placeHoldersinv_almacen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinv_almacen["Spanish"] = array();
	$fieldToolTipsinv_almacen["Spanish"] = array();
	$placeHoldersinv_almacen["Spanish"] = array();
	$pageTitlesinv_almacen["Spanish"] = array();
	$fieldLabelsinv_almacen["Spanish"]["ascodalmacen"] = "Ascodalmacen";
	$fieldToolTipsinv_almacen["Spanish"]["ascodalmacen"] = "";
	$placeHoldersinv_almacen["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsinv_almacen["Spanish"]["ascodalmacen_estado"] = "Ascodalmacen Estado";
	$fieldToolTipsinv_almacen["Spanish"]["ascodalmacen_estado"] = "";
	$placeHoldersinv_almacen["Spanish"]["ascodalmacen_estado"] = "";
	$fieldLabelsinv_almacen["Spanish"]["ascodalmacen_locale"] = "Ascodalmacen Locale";
	$fieldToolTipsinv_almacen["Spanish"]["ascodalmacen_locale"] = "";
	$placeHoldersinv_almacen["Spanish"]["ascodalmacen_locale"] = "";
	$fieldLabelsinv_almacen["Spanish"]["ascodalmacen_nombre"] = "Ascodalmacen Nombre";
	$fieldToolTipsinv_almacen["Spanish"]["ascodalmacen_nombre"] = "";
	$placeHoldersinv_almacen["Spanish"]["ascodalmacen_nombre"] = "";
	$fieldLabelsinv_almacen["Spanish"]["cont_codempresa"] = "Cont Codempresa";
	$fieldToolTipsinv_almacen["Spanish"]["cont_codempresa"] = "";
	$placeHoldersinv_almacen["Spanish"]["cont_codempresa"] = "";
	if (count($fieldToolTipsinv_almacen["Spanish"]))
		$tdatainv_almacen[".isUseToolTips"] = true;
}


	$tdatainv_almacen[".NCSearch"] = true;



$tdatainv_almacen[".shortTableName"] = "inv_almacen";
$tdatainv_almacen[".nSecOptions"] = 0;

$tdatainv_almacen[".mainTableOwnerID"] = "";
$tdatainv_almacen[".entityType"] = 0;
$tdatainv_almacen[".connId"] = "dbrf_at_127_0_0_1";


$tdatainv_almacen[".strOriginalTableName"] = "inv_almacen";

	



$tdatainv_almacen[".showAddInPopup"] = false;

$tdatainv_almacen[".showEditInPopup"] = false;

$tdatainv_almacen[".showViewInPopup"] = false;

$tdatainv_almacen[".listAjax"] = false;
//	temporary
//$tdatainv_almacen[".listAjax"] = false;

	$tdatainv_almacen[".audit"] = false;

	$tdatainv_almacen[".locking"] = false;


$pages = $tdatainv_almacen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainv_almacen[".edit"] = true;
	$tdatainv_almacen[".afterEditAction"] = 1;
	$tdatainv_almacen[".closePopupAfterEdit"] = 1;
	$tdatainv_almacen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainv_almacen[".add"] = true;
$tdatainv_almacen[".afterAddAction"] = 1;
$tdatainv_almacen[".closePopupAfterAdd"] = 1;
$tdatainv_almacen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainv_almacen[".list"] = true;
}



$tdatainv_almacen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainv_almacen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainv_almacen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainv_almacen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainv_almacen[".printFriendly"] = true;
}



$tdatainv_almacen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainv_almacen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainv_almacen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainv_almacen[".isUseAjaxSuggest"] = true;



												

$tdatainv_almacen[".ajaxCodeSnippetAdded"] = false;

$tdatainv_almacen[".buttonsAdded"] = false;

$tdatainv_almacen[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainv_almacen[".isUseTimeForSearch"] = false;


$tdatainv_almacen[".badgeColor"] = "D2AF80";


$tdatainv_almacen[".allSearchFields"] = array();
$tdatainv_almacen[".filterFields"] = array();
$tdatainv_almacen[".requiredSearchFields"] = array();

$tdatainv_almacen[".googleLikeFields"] = array();
$tdatainv_almacen[".googleLikeFields"][] = "ascodalmacen";
$tdatainv_almacen[".googleLikeFields"][] = "ascodalmacen_estado";
$tdatainv_almacen[".googleLikeFields"][] = "ascodalmacen_nombre";
$tdatainv_almacen[".googleLikeFields"][] = "ascodalmacen_locale";
$tdatainv_almacen[".googleLikeFields"][] = "cont_codempresa";



$tdatainv_almacen[".tableType"] = "list";

$tdatainv_almacen[".printerPageOrientation"] = 0;
$tdatainv_almacen[".nPrinterPageScale"] = 100;

$tdatainv_almacen[".nPrinterSplitRecords"] = 40;

$tdatainv_almacen[".geocodingEnabled"] = false;










$tdatainv_almacen[".pageSize"] = 20;

$tdatainv_almacen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainv_almacen[".strOrderBy"] = $tstrOrderBy;

$tdatainv_almacen[".orderindexes"] = array();


$tdatainv_almacen[".sqlHead"] = "SELECT ascodalmacen,  	ascodalmacen_estado,  	ascodalmacen_nombre,  	ascodalmacen_locale,  	cont_codempresa";
$tdatainv_almacen[".sqlFrom"] = "FROM inv_almacen";
$tdatainv_almacen[".sqlWhereExpr"] = "";
$tdatainv_almacen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainv_almacen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainv_almacen[".arrGroupsPerPage"] = $arrGPP;

$tdatainv_almacen[".highlightSearchResults"] = true;

$tableKeysinv_almacen = array();
$tableKeysinv_almacen[] = "ascodalmacen";
$tdatainv_almacen[".Keys"] = $tableKeysinv_almacen;


$tdatainv_almacen[".hideMobileList"] = array();




//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "inv_almacen";
	$fdata["Label"] = GetFieldLabel("inv_almacen","ascodalmacen");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatainv_almacen["ascodalmacen"] = $fdata;
		$tdatainv_almacen[".searchableFields"][] = "ascodalmacen";
//	ascodalmacen_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ascodalmacen_estado";
	$fdata["GoodName"] = "ascodalmacen_estado";
	$fdata["ownerTable"] = "inv_almacen";
	$fdata["Label"] = GetFieldLabel("inv_almacen","ascodalmacen_estado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ascodalmacen_estado";

		$fdata["sourceSingle"] = "ascodalmacen_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen_estado";

	
	
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


	$tdatainv_almacen["ascodalmacen_estado"] = $fdata;
		$tdatainv_almacen[".searchableFields"][] = "ascodalmacen_estado";
//	ascodalmacen_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ascodalmacen_nombre";
	$fdata["GoodName"] = "ascodalmacen_nombre";
	$fdata["ownerTable"] = "inv_almacen";
	$fdata["Label"] = GetFieldLabel("inv_almacen","ascodalmacen_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ascodalmacen_nombre";

		$fdata["sourceSingle"] = "ascodalmacen_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen_nombre";

	
	
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


	$tdatainv_almacen["ascodalmacen_nombre"] = $fdata;
		$tdatainv_almacen[".searchableFields"][] = "ascodalmacen_nombre";
//	ascodalmacen_locale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ascodalmacen_locale";
	$fdata["GoodName"] = "ascodalmacen_locale";
	$fdata["ownerTable"] = "inv_almacen";
	$fdata["Label"] = GetFieldLabel("inv_almacen","ascodalmacen_locale");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ascodalmacen_locale";

		$fdata["sourceSingle"] = "ascodalmacen_locale";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen_locale";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatainv_almacen["ascodalmacen_locale"] = $fdata;
		$tdatainv_almacen[".searchableFields"][] = "ascodalmacen_locale";
//	cont_codempresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_codempresa";
	$fdata["GoodName"] = "cont_codempresa";
	$fdata["ownerTable"] = "inv_almacen";
	$fdata["Label"] = GetFieldLabel("inv_almacen","cont_codempresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_codempresa";

		$fdata["sourceSingle"] = "cont_codempresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_codempresa";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatainv_almacen["cont_codempresa"] = $fdata;
		$tdatainv_almacen[".searchableFields"][] = "cont_codempresa";


$tables_data["inv_almacen"]=&$tdatainv_almacen;
$field_labels["inv_almacen"] = &$fieldLabelsinv_almacen;
$fieldToolTips["inv_almacen"] = &$fieldToolTipsinv_almacen;
$placeHolders["inv_almacen"] = &$placeHoldersinv_almacen;
$page_titles["inv_almacen"] = &$pageTitlesinv_almacen;


changeTextControlsToDate( "inv_almacen" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["inv_almacen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["inv_almacen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_inv_almacen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ascodalmacen,  	ascodalmacen_estado,  	ascodalmacen_nombre,  	ascodalmacen_locale,  	cont_codempresa";
$proto0["m_strFrom"] = "FROM inv_almacen";
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
	"m_strTable" => "inv_almacen",
	"m_srcTableName" => "inv_almacen"
));

$proto6["m_sql"] = "ascodalmacen";
$proto6["m_srcTableName"] = "inv_almacen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen_estado",
	"m_strTable" => "inv_almacen",
	"m_srcTableName" => "inv_almacen"
));

$proto8["m_sql"] = "ascodalmacen_estado";
$proto8["m_srcTableName"] = "inv_almacen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen_nombre",
	"m_strTable" => "inv_almacen",
	"m_srcTableName" => "inv_almacen"
));

$proto10["m_sql"] = "ascodalmacen_nombre";
$proto10["m_srcTableName"] = "inv_almacen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ascodalmacen_locale",
	"m_strTable" => "inv_almacen",
	"m_srcTableName" => "inv_almacen"
));

$proto12["m_sql"] = "ascodalmacen_locale";
$proto12["m_srcTableName"] = "inv_almacen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codempresa",
	"m_strTable" => "inv_almacen",
	"m_srcTableName" => "inv_almacen"
));

$proto14["m_sql"] = "cont_codempresa";
$proto14["m_srcTableName"] = "inv_almacen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inv_almacen";
$proto17["m_srcTableName"] = "inv_almacen";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ascodalmacen";
$proto17["m_columns"][] = "ascodalmacen_estado";
$proto17["m_columns"][] = "ascodalmacen_nombre";
$proto17["m_columns"][] = "ascodalmacen_locale";
$proto17["m_columns"][] = "cont_codempresa";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "inv_almacen";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "inv_almacen";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inv_almacen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inv_almacen = createSqlQuery_inv_almacen();


	
								;

					

$tdatainv_almacen[".sqlquery"] = $queryData_inv_almacen;



$tdatainv_almacen[".hasEvents"] = false;

?>