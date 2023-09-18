<?php
$tdatageclasedocto = array();
$tdatageclasedocto[".searchableFields"] = array();
$tdatageclasedocto[".ShortName"] = "geclasedocto";
$tdatageclasedocto[".OwnerID"] = "";
$tdatageclasedocto[".OriginalTable"] = "geclasedocto";


$tdatageclasedocto[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatageclasedocto[".originalPagesByType"] = $tdatageclasedocto[".pagesByType"];
$tdatageclasedocto[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatageclasedocto[".originalPages"] = $tdatageclasedocto[".pages"];
$tdatageclasedocto[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatageclasedocto[".originalDefaultPages"] = $tdatageclasedocto[".defaultPages"];

//	field labels
$fieldLabelsgeclasedocto = array();
$fieldToolTipsgeclasedocto = array();
$pageTitlesgeclasedocto = array();
$placeHoldersgeclasedocto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgeclasedocto["Spanish"] = array();
	$fieldToolTipsgeclasedocto["Spanish"] = array();
	$placeHoldersgeclasedocto["Spanish"] = array();
	$pageTitlesgeclasedocto["Spanish"] = array();
	$fieldLabelsgeclasedocto["Spanish"]["cd_clasedoc"] = "Código movimiento";
	$fieldToolTipsgeclasedocto["Spanish"]["cd_clasedoc"] = "";
	$placeHoldersgeclasedocto["Spanish"]["cd_clasedoc"] = "";
	$fieldLabelsgeclasedocto["Spanish"]["cd_nombredoc"] = "Nombre de movimiento";
	$fieldToolTipsgeclasedocto["Spanish"]["cd_nombredoc"] = "";
	$placeHoldersgeclasedocto["Spanish"]["cd_nombredoc"] = "";
	$fieldLabelsgeclasedocto["Spanish"]["clasedoc_id"] = "Clasedoc Id";
	$fieldToolTipsgeclasedocto["Spanish"]["clasedoc_id"] = "";
	$placeHoldersgeclasedocto["Spanish"]["clasedoc_id"] = "";
	$fieldLabelsgeclasedocto["Spanish"]["cd_tipomov"] = "Cd Tipomov";
	$fieldToolTipsgeclasedocto["Spanish"]["cd_tipomov"] = "";
	$placeHoldersgeclasedocto["Spanish"]["cd_tipomov"] = "";
	$fieldLabelsgeclasedocto["Spanish"]["cd_clasedoct"] = "Cd Clasedoct";
	$fieldToolTipsgeclasedocto["Spanish"]["cd_clasedoct"] = "";
	$placeHoldersgeclasedocto["Spanish"]["cd_clasedoct"] = "";
	if (count($fieldToolTipsgeclasedocto["Spanish"]))
		$tdatageclasedocto[".isUseToolTips"] = true;
}


	$tdatageclasedocto[".NCSearch"] = true;



$tdatageclasedocto[".shortTableName"] = "geclasedocto";
$tdatageclasedocto[".nSecOptions"] = 0;

$tdatageclasedocto[".mainTableOwnerID"] = "";
$tdatageclasedocto[".entityType"] = 0;
$tdatageclasedocto[".connId"] = "dbrf_at_127_0_0_1";


$tdatageclasedocto[".strOriginalTableName"] = "geclasedocto";

	



$tdatageclasedocto[".showAddInPopup"] = false;

$tdatageclasedocto[".showEditInPopup"] = false;

$tdatageclasedocto[".showViewInPopup"] = false;

$tdatageclasedocto[".listAjax"] = false;
//	temporary
//$tdatageclasedocto[".listAjax"] = false;

	$tdatageclasedocto[".audit"] = false;

	$tdatageclasedocto[".locking"] = false;


$pages = $tdatageclasedocto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatageclasedocto[".edit"] = true;
	$tdatageclasedocto[".afterEditAction"] = 1;
	$tdatageclasedocto[".closePopupAfterEdit"] = 1;
	$tdatageclasedocto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatageclasedocto[".add"] = true;
$tdatageclasedocto[".afterAddAction"] = 1;
$tdatageclasedocto[".closePopupAfterAdd"] = 1;
$tdatageclasedocto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatageclasedocto[".list"] = true;
}



$tdatageclasedocto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatageclasedocto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatageclasedocto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatageclasedocto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatageclasedocto[".printFriendly"] = true;
}



$tdatageclasedocto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatageclasedocto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatageclasedocto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatageclasedocto[".isUseAjaxSuggest"] = true;



												

$tdatageclasedocto[".ajaxCodeSnippetAdded"] = false;

$tdatageclasedocto[".buttonsAdded"] = false;

$tdatageclasedocto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatageclasedocto[".isUseTimeForSearch"] = false;


$tdatageclasedocto[".badgeColor"] = "4682B4";


$tdatageclasedocto[".allSearchFields"] = array();
$tdatageclasedocto[".filterFields"] = array();
$tdatageclasedocto[".requiredSearchFields"] = array();

$tdatageclasedocto[".googleLikeFields"] = array();
$tdatageclasedocto[".googleLikeFields"][] = "clasedoc_id";
$tdatageclasedocto[".googleLikeFields"][] = "cd_clasedoc";
$tdatageclasedocto[".googleLikeFields"][] = "cd_nombredoc";
$tdatageclasedocto[".googleLikeFields"][] = "cd_tipomov";
$tdatageclasedocto[".googleLikeFields"][] = "cd_clasedoct";



$tdatageclasedocto[".tableType"] = "list";

$tdatageclasedocto[".printerPageOrientation"] = 0;
$tdatageclasedocto[".nPrinterPageScale"] = 100;

$tdatageclasedocto[".nPrinterSplitRecords"] = 40;

$tdatageclasedocto[".geocodingEnabled"] = false;










$tdatageclasedocto[".pageSize"] = 20;

$tdatageclasedocto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatageclasedocto[".strOrderBy"] = $tstrOrderBy;

$tdatageclasedocto[".orderindexes"] = array();


$tdatageclasedocto[".sqlHead"] = "SELECT clasedoc_id,  cd_clasedoc,  cd_nombredoc,  cd_tipomov,  cd_clasedoct";
$tdatageclasedocto[".sqlFrom"] = "FROM geclasedocto";
$tdatageclasedocto[".sqlWhereExpr"] = "";
$tdatageclasedocto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatageclasedocto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatageclasedocto[".arrGroupsPerPage"] = $arrGPP;

$tdatageclasedocto[".highlightSearchResults"] = true;

$tableKeysgeclasedocto = array();
$tableKeysgeclasedocto[] = "clasedoc_id";
$tdatageclasedocto[".Keys"] = $tableKeysgeclasedocto;


$tdatageclasedocto[".hideMobileList"] = array();




//	clasedoc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clasedoc_id";
	$fdata["GoodName"] = "clasedoc_id";
	$fdata["ownerTable"] = "geclasedocto";
	$fdata["Label"] = GetFieldLabel("geclasedocto","clasedoc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "clasedoc_id";

		$fdata["sourceSingle"] = "clasedoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clasedoc_id";

	
	
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


	$tdatageclasedocto["clasedoc_id"] = $fdata;
		$tdatageclasedocto[".searchableFields"][] = "clasedoc_id";
//	cd_clasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cd_clasedoc";
	$fdata["GoodName"] = "cd_clasedoc";
	$fdata["ownerTable"] = "geclasedocto";
	$fdata["Label"] = GetFieldLabel("geclasedocto","cd_clasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cd_clasedoc";

		$fdata["sourceSingle"] = "cd_clasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cd_clasedoc";

	
	
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


	$tdatageclasedocto["cd_clasedoc"] = $fdata;
		$tdatageclasedocto[".searchableFields"][] = "cd_clasedoc";
//	cd_nombredoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cd_nombredoc";
	$fdata["GoodName"] = "cd_nombredoc";
	$fdata["ownerTable"] = "geclasedocto";
	$fdata["Label"] = GetFieldLabel("geclasedocto","cd_nombredoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cd_nombredoc";

		$fdata["sourceSingle"] = "cd_nombredoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cd_nombredoc";

	
	
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


	$tdatageclasedocto["cd_nombredoc"] = $fdata;
		$tdatageclasedocto[".searchableFields"][] = "cd_nombredoc";
//	cd_tipomov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cd_tipomov";
	$fdata["GoodName"] = "cd_tipomov";
	$fdata["ownerTable"] = "geclasedocto";
	$fdata["Label"] = GetFieldLabel("geclasedocto","cd_tipomov");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cd_tipomov";

		$fdata["sourceSingle"] = "cd_tipomov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cd_tipomov";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_movimiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cod_movimiento";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nmovimiento";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatageclasedocto["cd_tipomov"] = $fdata;
		$tdatageclasedocto[".searchableFields"][] = "cd_tipomov";
//	cd_clasedoct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cd_clasedoct";
	$fdata["GoodName"] = "cd_clasedoct";
	$fdata["ownerTable"] = "geclasedocto";
	$fdata["Label"] = GetFieldLabel("geclasedocto","cd_clasedoct");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cd_clasedoct";

		$fdata["sourceSingle"] = "cd_clasedoct";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cd_clasedoct";

	
	
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


	$tdatageclasedocto["cd_clasedoct"] = $fdata;
		$tdatageclasedocto[".searchableFields"][] = "cd_clasedoct";


$tables_data["geclasedocto"]=&$tdatageclasedocto;
$field_labels["geclasedocto"] = &$fieldLabelsgeclasedocto;
$fieldToolTips["geclasedocto"] = &$fieldToolTipsgeclasedocto;
$placeHolders["geclasedocto"] = &$placeHoldersgeclasedocto;
$page_titles["geclasedocto"] = &$pageTitlesgeclasedocto;


changeTextControlsToDate( "geclasedocto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["geclasedocto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["geclasedocto"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_geclasedocto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "clasedoc_id,  cd_clasedoc,  cd_nombredoc,  cd_tipomov,  cd_clasedoct";
$proto0["m_strFrom"] = "FROM geclasedocto";
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
	"m_strName" => "clasedoc_id",
	"m_strTable" => "geclasedocto",
	"m_srcTableName" => "geclasedocto"
));

$proto6["m_sql"] = "clasedoc_id";
$proto6["m_srcTableName"] = "geclasedocto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cd_clasedoc",
	"m_strTable" => "geclasedocto",
	"m_srcTableName" => "geclasedocto"
));

$proto8["m_sql"] = "cd_clasedoc";
$proto8["m_srcTableName"] = "geclasedocto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cd_nombredoc",
	"m_strTable" => "geclasedocto",
	"m_srcTableName" => "geclasedocto"
));

$proto10["m_sql"] = "cd_nombredoc";
$proto10["m_srcTableName"] = "geclasedocto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cd_tipomov",
	"m_strTable" => "geclasedocto",
	"m_srcTableName" => "geclasedocto"
));

$proto12["m_sql"] = "cd_tipomov";
$proto12["m_srcTableName"] = "geclasedocto";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cd_clasedoct",
	"m_strTable" => "geclasedocto",
	"m_srcTableName" => "geclasedocto"
));

$proto14["m_sql"] = "cd_clasedoct";
$proto14["m_srcTableName"] = "geclasedocto";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "geclasedocto";
$proto17["m_srcTableName"] = "geclasedocto";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "clasedoc_id";
$proto17["m_columns"][] = "cd_clasedoc";
$proto17["m_columns"][] = "cd_clasedoct";
$proto17["m_columns"][] = "cd_nombredoc";
$proto17["m_columns"][] = "cd_ultimonro";
$proto17["m_columns"][] = "cd_tipomov";
$proto17["m_columns"][] = "cd_link";
$proto17["m_columns"][] = "cd_link_2";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "geclasedocto";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "geclasedocto";
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
$proto0["m_srcTableName"]="geclasedocto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_geclasedocto = createSqlQuery_geclasedocto();


	
								;

					

$tdatageclasedocto[".sqlquery"] = $queryData_geclasedocto;



$tdatageclasedocto[".hasEvents"] = false;

?>