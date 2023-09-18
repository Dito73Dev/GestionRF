<?php
$tdatacontractor_master_proveedores = array();
$tdatacontractor_master_proveedores[".searchableFields"] = array();
$tdatacontractor_master_proveedores[".ShortName"] = "contractor_master_proveedores";
$tdatacontractor_master_proveedores[".OwnerID"] = "";
$tdatacontractor_master_proveedores[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_proveedores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontractor_master_proveedores[".originalPagesByType"] = $tdatacontractor_master_proveedores[".pagesByType"];
$tdatacontractor_master_proveedores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontractor_master_proveedores[".originalPages"] = $tdatacontractor_master_proveedores[".pages"];
$tdatacontractor_master_proveedores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontractor_master_proveedores[".originalDefaultPages"] = $tdatacontractor_master_proveedores[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_proveedores = array();
$fieldToolTipscontractor_master_proveedores = array();
$pageTitlescontractor_master_proveedores = array();
$placeHolderscontractor_master_proveedores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_proveedores["Spanish"] = array();
	$fieldToolTipscontractor_master_proveedores["Spanish"] = array();
	$placeHolderscontractor_master_proveedores["Spanish"] = array();
	$pageTitlescontractor_master_proveedores["Spanish"] = array();
	$fieldLabelscontractor_master_proveedores["Spanish"]["contractor_doc_dv"] = "DV";
	$fieldToolTipscontractor_master_proveedores["Spanish"]["contractor_doc_dv"] = "";
	$placeHolderscontractor_master_proveedores["Spanish"]["contractor_doc_dv"] = "";
	$fieldLabelscontractor_master_proveedores["Spanish"]["contractor_doc_id"] = "NIT | Documento";
	$fieldToolTipscontractor_master_proveedores["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master_proveedores["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master_proveedores["Spanish"]["contractor_email"] = "Email";
	$fieldToolTipscontractor_master_proveedores["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master_proveedores["Spanish"]["contractor_email"] = "";
	$fieldLabelscontractor_master_proveedores["Spanish"]["contractor_id"] = "Contractor Id";
	$fieldToolTipscontractor_master_proveedores["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master_proveedores["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master_proveedores["Spanish"]["contractor_nombresfull"] = "Razón social | Nombre";
	$fieldToolTipscontractor_master_proveedores["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master_proveedores["Spanish"]["contractor_nombresfull"] = "";
	if (count($fieldToolTipscontractor_master_proveedores["Spanish"]))
		$tdatacontractor_master_proveedores[".isUseToolTips"] = true;
}


	$tdatacontractor_master_proveedores[".NCSearch"] = true;



$tdatacontractor_master_proveedores[".shortTableName"] = "contractor_master_proveedores";
$tdatacontractor_master_proveedores[".nSecOptions"] = 0;

$tdatacontractor_master_proveedores[".mainTableOwnerID"] = "";
$tdatacontractor_master_proveedores[".entityType"] = 1;
$tdatacontractor_master_proveedores[".connId"] = "dbct_at_127_0_0_1";


$tdatacontractor_master_proveedores[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_proveedores[".showAddInPopup"] = false;

$tdatacontractor_master_proveedores[".showEditInPopup"] = false;

$tdatacontractor_master_proveedores[".showViewInPopup"] = false;

$tdatacontractor_master_proveedores[".listAjax"] = false;
//	temporary
//$tdatacontractor_master_proveedores[".listAjax"] = false;

	$tdatacontractor_master_proveedores[".audit"] = false;

	$tdatacontractor_master_proveedores[".locking"] = false;


$pages = $tdatacontractor_master_proveedores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_proveedores[".edit"] = true;
	$tdatacontractor_master_proveedores[".afterEditAction"] = 1;
	$tdatacontractor_master_proveedores[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_proveedores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_proveedores[".add"] = true;
$tdatacontractor_master_proveedores[".afterAddAction"] = 1;
$tdatacontractor_master_proveedores[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_proveedores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_proveedores[".list"] = true;
}



$tdatacontractor_master_proveedores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_proveedores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_proveedores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_proveedores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_proveedores[".printFriendly"] = true;
}



$tdatacontractor_master_proveedores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_proveedores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_proveedores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_proveedores[".isUseAjaxSuggest"] = true;



												

$tdatacontractor_master_proveedores[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_proveedores[".buttonsAdded"] = false;

$tdatacontractor_master_proveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master_proveedores[".isUseTimeForSearch"] = false;


$tdatacontractor_master_proveedores[".badgeColor"] = "8FBC8B";


$tdatacontractor_master_proveedores[".allSearchFields"] = array();
$tdatacontractor_master_proveedores[".filterFields"] = array();
$tdatacontractor_master_proveedores[".requiredSearchFields"] = array();

$tdatacontractor_master_proveedores[".googleLikeFields"] = array();
$tdatacontractor_master_proveedores[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master_proveedores[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master_proveedores[".googleLikeFields"][] = "contractor_doc_dv";
$tdatacontractor_master_proveedores[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master_proveedores[".googleLikeFields"][] = "contractor_email";



$tdatacontractor_master_proveedores[".tableType"] = "list";

$tdatacontractor_master_proveedores[".printerPageOrientation"] = 0;
$tdatacontractor_master_proveedores[".nPrinterPageScale"] = 100;

$tdatacontractor_master_proveedores[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_proveedores[".geocodingEnabled"] = false;










$tdatacontractor_master_proveedores[".pageSize"] = 20;

$tdatacontractor_master_proveedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_master_proveedores[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_proveedores[".orderindexes"] = array();


$tdatacontractor_master_proveedores[".sqlHead"] = "SELECT contractor_id,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  contractor_email";
$tdatacontractor_master_proveedores[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master_proveedores[".sqlWhereExpr"] = "";
$tdatacontractor_master_proveedores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_proveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_proveedores[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_proveedores[".highlightSearchResults"] = true;

$tableKeyscontractor_master_proveedores = array();
$tableKeyscontractor_master_proveedores[] = "contractor_doc_id";
$tableKeyscontractor_master_proveedores[] = "contractor_id";
$tdatacontractor_master_proveedores[".Keys"] = $tableKeyscontractor_master_proveedores;


$tdatacontractor_master_proveedores[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_proveedores","contractor_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

		$fdata["sourceSingle"] = "contractor_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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


	$tdatacontractor_master_proveedores["contractor_id"] = $fdata;
		$tdatacontractor_master_proveedores[".searchableFields"][] = "contractor_id";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_proveedores","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

		$fdata["sourceSingle"] = "contractor_doc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatacontractor_master_proveedores["contractor_doc_id"] = $fdata;
		$tdatacontractor_master_proveedores[".searchableFields"][] = "contractor_doc_id";
//	contractor_doc_dv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_dv";
	$fdata["GoodName"] = "contractor_doc_dv";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_proveedores","contractor_doc_dv");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_dv";

		$fdata["sourceSingle"] = "contractor_doc_dv";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_dv";

	
	
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


	$tdatacontractor_master_proveedores["contractor_doc_dv"] = $fdata;
		$tdatacontractor_master_proveedores[".searchableFields"][] = "contractor_doc_dv";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_proveedores","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["sourceSingle"] = "contractor_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatacontractor_master_proveedores["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master_proveedores[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_proveedores","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["sourceSingle"] = "contractor_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdatacontractor_master_proveedores["contractor_email"] = $fdata;
		$tdatacontractor_master_proveedores[".searchableFields"][] = "contractor_email";


$tables_data["contractor_master_proveedores"]=&$tdatacontractor_master_proveedores;
$field_labels["contractor_master_proveedores"] = &$fieldLabelscontractor_master_proveedores;
$fieldToolTips["contractor_master_proveedores"] = &$fieldToolTipscontractor_master_proveedores;
$placeHolders["contractor_master_proveedores"] = &$placeHolderscontractor_master_proveedores;
$page_titles["contractor_master_proveedores"] = &$pageTitlescontractor_master_proveedores;


changeTextControlsToDate( "contractor_master_proveedores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master_proveedores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_proveedores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  contractor_email";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_proveedores"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master_proveedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_proveedores"
));

$proto8["m_sql"] = "contractor_doc_id";
$proto8["m_srcTableName"] = "contractor_master_proveedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_dv",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_proveedores"
));

$proto10["m_sql"] = "contractor_doc_dv";
$proto10["m_srcTableName"] = "contractor_master_proveedores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_proveedores"
));

$proto12["m_sql"] = "contractor_nombresfull";
$proto12["m_srcTableName"] = "contractor_master_proveedores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_proveedores"
));

$proto14["m_sql"] = "contractor_email";
$proto14["m_srcTableName"] = "contractor_master_proveedores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "contractor_master";
$proto17["m_srcTableName"] = "contractor_master_proveedores";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "contractor_id";
$proto17["m_columns"][] = "contractor_type";
$proto17["m_columns"][] = "contractor_naturaleza";
$proto17["m_columns"][] = "contractor_doc_id";
$proto17["m_columns"][] = "contractor_doc_dv";
$proto17["m_columns"][] = "contractor_pwd";
$proto17["m_columns"][] = "contractor_nombresfull";
$proto17["m_columns"][] = "contractor_name";
$proto17["m_columns"][] = "contractor_lname";
$proto17["m_columns"][] = "contractor_image";
$proto17["m_columns"][] = "enlace_sigep";
$proto17["m_columns"][] = "contractor_email";
$proto17["m_columns"][] = "contractor_email_mincit";
$proto17["m_columns"][] = "contractor_address";
$proto17["m_columns"][] = "contractor_phone";
$proto17["m_columns"][] = "contractor_mobile";
$proto17["m_columns"][] = "contractor_city";
$proto17["m_columns"][] = "contractor_sup_jerarquico";
$proto17["m_columns"][] = "contractor_dependencia";
$proto17["m_columns"][] = "bank_name";
$proto17["m_columns"][] = "bank_cta_type";
$proto17["m_columns"][] = "bank_cta_number";
$proto17["m_columns"][] = "iva_regimen";
$proto17["m_columns"][] = "factura";
$proto17["m_columns"][] = "actividad_economica";
$proto17["m_columns"][] = "responsabilidades";
$proto17["m_columns"][] = "sys_update";
$proto17["m_columns"][] = "sys_user";
$proto17["m_columns"][] = "sys_date";
$proto17["m_columns"][] = "sys_level";
$proto17["m_columns"][] = "sys_status";
$proto17["m_columns"][] = "sys_last_upd";
$proto17["m_columns"][] = "groupid";
$proto17["m_columns"][] = "active";
$proto17["m_columns"][] = "contractor_dependientes";
$proto17["m_columns"][] = "contractor_medicinapre_file";
$proto17["m_columns"][] = "contractor_picmonetaria_file";
$proto17["m_columns"][] = "contractor_decljur";
$proto17["m_columns"][] = "contractor_eps";
$proto17["m_columns"][] = "contractor_fondopensiones";
$proto17["m_columns"][] = "contractor_cajacompensacion";
$proto17["m_columns"][] = "contractor_arl";
$proto17["m_columns"][] = "ubica_dep";
$proto17["m_columns"][] = "ubica_extension";
$proto17["m_columns"][] = "dem_genero";
$proto17["m_columns"][] = "dem_ocupacion";
$proto17["m_columns"][] = "dem_profesion";
$proto17["m_columns"][] = "ct_fecha_nacimiento";
$proto17["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto17["m_columns"][] = "ct_nacionalidad";
$proto17["m_columns"][] = "dem_edad";
$proto17["m_columns"][] = "dem_educacion";
$proto17["m_columns"][] = "dem_discapacidad";
$proto17["m_columns"][] = "emergencia";
$proto17["m_columns"][] = "terms_msj";
$proto17["m_columns"][] = "terms_acepta";
$proto17["m_columns"][] = "signature";
$proto17["m_columns"][] = "pin";
$proto17["m_columns"][] = "reset_token";
$proto17["m_columns"][] = "reset_date";
$proto17["m_columns"][] = "reset_token1";
$proto17["m_columns"][] = "reset_date1";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "contractor_master";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "contractor_master_proveedores";
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
$proto0["m_srcTableName"]="contractor_master_proveedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_proveedores = createSqlQuery_contractor_master_proveedores();


	
								;

					

$tdatacontractor_master_proveedores[".sqlquery"] = $queryData_contractor_master_proveedores;



$tdatacontractor_master_proveedores[".hasEvents"] = false;

?>