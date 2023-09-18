<?php
$tdatagedocumentos = array();
$tdatagedocumentos[".searchableFields"] = array();
$tdatagedocumentos[".ShortName"] = "gedocumentos";
$tdatagedocumentos[".OwnerID"] = "";
$tdatagedocumentos[".OriginalTable"] = "gedocumentos";


$tdatagedocumentos[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatagedocumentos[".originalPagesByType"] = $tdatagedocumentos[".pagesByType"];
$tdatagedocumentos[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatagedocumentos[".originalPages"] = $tdatagedocumentos[".pages"];
$tdatagedocumentos[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatagedocumentos[".originalDefaultPages"] = $tdatagedocumentos[".defaultPages"];

//	field labels
$fieldLabelsgedocumentos = array();
$fieldToolTipsgedocumentos = array();
$pageTitlesgedocumentos = array();
$placeHoldersgedocumentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgedocumentos["Spanish"] = array();
	$fieldToolTipsgedocumentos["Spanish"] = array();
	$placeHoldersgedocumentos["Spanish"] = array();
	$pageTitlesgedocumentos["Spanish"] = array();
	$fieldLabelsgedocumentos["Spanish"]["as_nroasiento_fk"] = "As Nroasiento Fk";
	$fieldToolTipsgedocumentos["Spanish"]["as_nroasiento_fk"] = "";
	$placeHoldersgedocumentos["Spanish"]["as_nroasiento_fk"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_concepto"] = "Do Concepto";
	$fieldToolTipsgedocumentos["Spanish"]["do_concepto"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_concepto"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_dep"] = "Do Dep";
	$fieldToolTipsgedocumentos["Spanish"]["do_dep"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_dep"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_depsup"] = "Do Depsup";
	$fieldToolTipsgedocumentos["Spanish"]["do_depsup"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_depsup"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_detalle"] = "Do Detalle";
	$fieldToolTipsgedocumentos["Spanish"]["do_detalle"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_detalle"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_fechadoc"] = "Do Fechadoc";
	$fieldToolTipsgedocumentos["Spanish"]["do_fechadoc"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_fechadoc"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_file"] = "Do File";
	$fieldToolTipsgedocumentos["Spanish"]["do_file"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_file"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_legaliza"] = "Do Legaliza";
	$fieldToolTipsgedocumentos["Spanish"]["do_legaliza"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_legaliza"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_nrodoc"] = "Do Nrodoc";
	$fieldToolTipsgedocumentos["Spanish"]["do_nrodoc"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_nrodoc"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_tipodoc"] = "Do Tipodoc";
	$fieldToolTipsgedocumentos["Spanish"]["do_tipodoc"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_tipodoc"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_tipomov"] = "Do Tipomov";
	$fieldToolTipsgedocumentos["Spanish"]["do_tipomov"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_tipomov"] = "";
	$fieldLabelsgedocumentos["Spanish"]["doccnit"] = "Doccnit";
	$fieldToolTipsgedocumentos["Spanish"]["doccnit"] = "";
	$placeHoldersgedocumentos["Spanish"]["doccnit"] = "";
	$fieldLabelsgedocumentos["Spanish"]["doclasedoc"] = "Doclasedoc";
	$fieldToolTipsgedocumentos["Spanish"]["doclasedoc"] = "";
	$placeHoldersgedocumentos["Spanish"]["doclasedoc"] = "";
	$fieldLabelsgedocumentos["Spanish"]["doclasedoc_id"] = "Doclasedoc Id";
	$fieldToolTipsgedocumentos["Spanish"]["doclasedoc_id"] = "";
	$placeHoldersgedocumentos["Spanish"]["doclasedoc_id"] = "";
	$fieldLabelsgedocumentos["Spanish"]["docnomproveedor"] = "Docnomproveedor";
	$fieldToolTipsgedocumentos["Spanish"]["docnomproveedor"] = "";
	$placeHoldersgedocumentos["Spanish"]["docnomproveedor"] = "";
	$fieldLabelsgedocumentos["Spanish"]["docodregion"] = "Docodregion";
	$fieldToolTipsgedocumentos["Spanish"]["docodregion"] = "";
	$placeHoldersgedocumentos["Spanish"]["docodregion"] = "";
	$fieldLabelsgedocumentos["Spanish"]["egreso"] = "Egreso";
	$fieldToolTipsgedocumentos["Spanish"]["egreso"] = "";
	$placeHoldersgedocumentos["Spanish"]["egreso"] = "";
	$fieldLabelsgedocumentos["Spanish"]["sys_fecha"] = "Sys Fecha";
	$fieldToolTipsgedocumentos["Spanish"]["sys_fecha"] = "";
	$placeHoldersgedocumentos["Spanish"]["sys_fecha"] = "";
	$fieldLabelsgedocumentos["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsgedocumentos["Spanish"]["sys_user"] = "";
	$placeHoldersgedocumentos["Spanish"]["sys_user"] = "";
	$fieldLabelsgedocumentos["Spanish"]["do_email"] = "Do Email";
	$fieldToolTipsgedocumentos["Spanish"]["do_email"] = "";
	$placeHoldersgedocumentos["Spanish"]["do_email"] = "";
	if (count($fieldToolTipsgedocumentos["Spanish"]))
		$tdatagedocumentos[".isUseToolTips"] = true;
}


	$tdatagedocumentos[".NCSearch"] = true;



$tdatagedocumentos[".shortTableName"] = "gedocumentos";
$tdatagedocumentos[".nSecOptions"] = 0;

$tdatagedocumentos[".mainTableOwnerID"] = "";
$tdatagedocumentos[".entityType"] = 0;
$tdatagedocumentos[".connId"] = "dbrf_at_127_0_0_1";


$tdatagedocumentos[".strOriginalTableName"] = "gedocumentos";

	



$tdatagedocumentos[".showAddInPopup"] = false;

$tdatagedocumentos[".showEditInPopup"] = false;

$tdatagedocumentos[".showViewInPopup"] = false;

$tdatagedocumentos[".listAjax"] = false;
//	temporary
//$tdatagedocumentos[".listAjax"] = false;

	$tdatagedocumentos[".audit"] = false;

	$tdatagedocumentos[".locking"] = false;


$pages = $tdatagedocumentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagedocumentos[".edit"] = true;
	$tdatagedocumentos[".afterEditAction"] = 1;
	$tdatagedocumentos[".closePopupAfterEdit"] = 1;
	$tdatagedocumentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagedocumentos[".add"] = true;
$tdatagedocumentos[".afterAddAction"] = 1;
$tdatagedocumentos[".closePopupAfterAdd"] = 1;
$tdatagedocumentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagedocumentos[".list"] = true;
}



$tdatagedocumentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagedocumentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagedocumentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagedocumentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagedocumentos[".printFriendly"] = true;
}



$tdatagedocumentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagedocumentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagedocumentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagedocumentos[".isUseAjaxSuggest"] = true;



												

$tdatagedocumentos[".ajaxCodeSnippetAdded"] = false;

$tdatagedocumentos[".buttonsAdded"] = false;

$tdatagedocumentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagedocumentos[".isUseTimeForSearch"] = false;


$tdatagedocumentos[".badgeColor"] = "6B8E23";


$tdatagedocumentos[".allSearchFields"] = array();
$tdatagedocumentos[".filterFields"] = array();
$tdatagedocumentos[".requiredSearchFields"] = array();

$tdatagedocumentos[".googleLikeFields"] = array();
$tdatagedocumentos[".googleLikeFields"][] = "doclasedoc_id";
$tdatagedocumentos[".googleLikeFields"][] = "as_nroasiento_fk";
$tdatagedocumentos[".googleLikeFields"][] = "do_tipomov";
$tdatagedocumentos[".googleLikeFields"][] = "doclasedoc";
$tdatagedocumentos[".googleLikeFields"][] = "do_nrodoc";
$tdatagedocumentos[".googleLikeFields"][] = "do_fechadoc";
$tdatagedocumentos[".googleLikeFields"][] = "docodregion";
$tdatagedocumentos[".googleLikeFields"][] = "do_detalle";
$tdatagedocumentos[".googleLikeFields"][] = "do_tipodoc";
$tdatagedocumentos[".googleLikeFields"][] = "doccnit";
$tdatagedocumentos[".googleLikeFields"][] = "docnomproveedor";
$tdatagedocumentos[".googleLikeFields"][] = "do_email";
$tdatagedocumentos[".googleLikeFields"][] = "do_file";
$tdatagedocumentos[".googleLikeFields"][] = "sys_user";
$tdatagedocumentos[".googleLikeFields"][] = "sys_fecha";
$tdatagedocumentos[".googleLikeFields"][] = "do_legaliza";
$tdatagedocumentos[".googleLikeFields"][] = "egreso";
$tdatagedocumentos[".googleLikeFields"][] = "do_concepto";
$tdatagedocumentos[".googleLikeFields"][] = "do_depsup";
$tdatagedocumentos[".googleLikeFields"][] = "do_dep";



$tdatagedocumentos[".tableType"] = "list";

$tdatagedocumentos[".printerPageOrientation"] = 0;
$tdatagedocumentos[".nPrinterPageScale"] = 100;

$tdatagedocumentos[".nPrinterSplitRecords"] = 40;

$tdatagedocumentos[".geocodingEnabled"] = false;










$tdatagedocumentos[".pageSize"] = 20;

$tdatagedocumentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagedocumentos[".strOrderBy"] = $tstrOrderBy;

$tdatagedocumentos[".orderindexes"] = array();


$tdatagedocumentos[".sqlHead"] = "SELECT doclasedoc_id,  	as_nroasiento_fk,  	do_tipomov,  	doclasedoc,  	do_nrodoc,  	do_fechadoc,  	docodregion,  	do_detalle,  	do_tipodoc,  	doccnit,  	docnomproveedor,  	do_email,  	do_file,  	sys_user,  	sys_fecha,  	do_legaliza,  	egreso,  	do_concepto,  	do_depsup,  	do_dep";
$tdatagedocumentos[".sqlFrom"] = "FROM gedocumentos";
$tdatagedocumentos[".sqlWhereExpr"] = "";
$tdatagedocumentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagedocumentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagedocumentos[".arrGroupsPerPage"] = $arrGPP;

$tdatagedocumentos[".highlightSearchResults"] = true;

$tableKeysgedocumentos = array();
$tableKeysgedocumentos[] = "doclasedoc_id";
$tdatagedocumentos[".Keys"] = $tableKeysgedocumentos;


$tdatagedocumentos[".hideMobileList"] = array();




//	doclasedoc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "doclasedoc_id";
	$fdata["GoodName"] = "doclasedoc_id";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","doclasedoc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "doclasedoc_id";

		$fdata["sourceSingle"] = "doclasedoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_id";

	
	
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


	$tdatagedocumentos["doclasedoc_id"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "doclasedoc_id";
//	as_nroasiento_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_nroasiento_fk";
	$fdata["GoodName"] = "as_nroasiento_fk";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","as_nroasiento_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "as_nroasiento_fk";

		$fdata["sourceSingle"] = "as_nroasiento_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_nroasiento_fk";

	
	
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
	$edata["LookupTable"] = "alasientos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "as_nroasiento";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "as_estadoasien";

	

	
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


	$tdatagedocumentos["as_nroasiento_fk"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "as_nroasiento_fk";
//	do_tipomov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "do_tipomov";
	$fdata["GoodName"] = "do_tipomov";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_tipomov");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipomov";

		$fdata["sourceSingle"] = "do_tipomov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipomov";

	
	
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


	$tdatagedocumentos["do_tipomov"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_tipomov";
//	doclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "doclasedoc";
	$fdata["GoodName"] = "doclasedoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","doclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc";

		$fdata["sourceSingle"] = "doclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc";

	
	
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
	$edata["LookupTable"] = "geclasedocto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cd_clasedoc";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cd_clasedoct";

	

	
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


	$tdatagedocumentos["doclasedoc"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "doclasedoc";
//	do_nrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "do_nrodoc";
	$fdata["GoodName"] = "do_nrodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_nrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_nrodoc";

		$fdata["sourceSingle"] = "do_nrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_nrodoc";

	
	
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


	$tdatagedocumentos["do_nrodoc"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_nrodoc";
//	do_fechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "do_fechadoc";
	$fdata["GoodName"] = "do_fechadoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_fechadoc");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "do_fechadoc";

		$fdata["sourceSingle"] = "do_fechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_fechadoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagedocumentos["do_fechadoc"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_fechadoc";
//	docodregion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "docodregion";
	$fdata["GoodName"] = "docodregion";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","docodregion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "docodregion";

		$fdata["sourceSingle"] = "docodregion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docodregion";

	
	
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


	$tdatagedocumentos["docodregion"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "docodregion";
//	do_detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "do_detalle";
	$fdata["GoodName"] = "do_detalle";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_detalle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_detalle";

		$fdata["sourceSingle"] = "do_detalle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_detalle";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatagedocumentos["do_detalle"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_detalle";
//	do_tipodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "do_tipodoc";
	$fdata["GoodName"] = "do_tipodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_tipodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipodoc";

		$fdata["sourceSingle"] = "do_tipodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipodoc";

	
	
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


	$tdatagedocumentos["do_tipodoc"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_tipodoc";
//	doccnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "doccnit";
	$fdata["GoodName"] = "doccnit";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","doccnit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doccnit";

		$fdata["sourceSingle"] = "doccnit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doccnit";

	
	
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


	$tdatagedocumentos["doccnit"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "doccnit";
//	docnomproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "docnomproveedor";
	$fdata["GoodName"] = "docnomproveedor";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","docnomproveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "docnomproveedor";

		$fdata["sourceSingle"] = "docnomproveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docnomproveedor";

	
	
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


	$tdatagedocumentos["docnomproveedor"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "docnomproveedor";
//	do_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "do_email";
	$fdata["GoodName"] = "do_email";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_email";

		$fdata["sourceSingle"] = "do_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_email";

	
	
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


	$tdatagedocumentos["do_email"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_email";
//	do_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "do_file";
	$fdata["GoodName"] = "do_file";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_file";

		$fdata["sourceSingle"] = "do_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_file";

	
	
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
			$edata["EditParams"].= " maxlength=600";

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


	$tdatagedocumentos["do_file"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_file";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatagedocumentos["sys_user"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "sys_user";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","sys_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha";

		$fdata["sourceSingle"] = "sys_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagedocumentos["sys_fecha"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "sys_fecha";
//	do_legaliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "do_legaliza";
	$fdata["GoodName"] = "do_legaliza";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_legaliza");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "do_legaliza";

		$fdata["sourceSingle"] = "do_legaliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_legaliza";

	
	
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
	$edata["LookupTable"] = "global_type_legal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "legal_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "legal_code";

	

	
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


	$tdatagedocumentos["do_legaliza"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_legaliza";
//	egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "egreso";
	$fdata["GoodName"] = "egreso";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","egreso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "egreso";

		$fdata["sourceSingle"] = "egreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "egreso";

	
	
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


	$tdatagedocumentos["egreso"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "egreso";
//	do_concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "do_concepto";
	$fdata["GoodName"] = "do_concepto";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_concepto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_concepto";

		$fdata["sourceSingle"] = "do_concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_concepto";

	
	
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
	$edata["LookupTable"] = "alconceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "co_codconcepto";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "co_activo";

	

	
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


	$tdatagedocumentos["do_concepto"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_concepto";
//	do_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "do_depsup";
	$fdata["GoodName"] = "do_depsup";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_depsup";

		$fdata["sourceSingle"] = "do_depsup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_depsup";

	
	
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


	$tdatagedocumentos["do_depsup"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_depsup";
//	do_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "do_dep";
	$fdata["GoodName"] = "do_dep";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos","do_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_dep";

		$fdata["sourceSingle"] = "do_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_dep";

	
	
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


	$tdatagedocumentos["do_dep"] = $fdata;
		$tdatagedocumentos[".searchableFields"][] = "do_dep";


$tables_data["gedocumentos"]=&$tdatagedocumentos;
$field_labels["gedocumentos"] = &$fieldLabelsgedocumentos;
$fieldToolTips["gedocumentos"] = &$fieldToolTipsgedocumentos;
$placeHolders["gedocumentos"] = &$placeHoldersgedocumentos;
$page_titles["gedocumentos"] = &$pageTitlesgedocumentos;


changeTextControlsToDate( "gedocumentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["gedocumentos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["gedocumentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gedocumentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "doclasedoc_id,  	as_nroasiento_fk,  	do_tipomov,  	doclasedoc,  	do_nrodoc,  	do_fechadoc,  	docodregion,  	do_detalle,  	do_tipodoc,  	doccnit,  	docnomproveedor,  	do_email,  	do_file,  	sys_user,  	sys_fecha,  	do_legaliza,  	egreso,  	do_concepto,  	do_depsup,  	do_dep";
$proto0["m_strFrom"] = "FROM gedocumentos";
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
	"m_strName" => "doclasedoc_id",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto6["m_sql"] = "doclasedoc_id";
$proto6["m_srcTableName"] = "gedocumentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento_fk",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto8["m_sql"] = "as_nroasiento_fk";
$proto8["m_srcTableName"] = "gedocumentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipomov",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto10["m_sql"] = "do_tipomov";
$proto10["m_srcTableName"] = "gedocumentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto12["m_sql"] = "doclasedoc";
$proto12["m_srcTableName"] = "gedocumentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "do_nrodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto14["m_sql"] = "do_nrodoc";
$proto14["m_srcTableName"] = "gedocumentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "do_fechadoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto16["m_sql"] = "do_fechadoc";
$proto16["m_srcTableName"] = "gedocumentos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "docodregion",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto18["m_sql"] = "docodregion";
$proto18["m_srcTableName"] = "gedocumentos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "do_detalle",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto20["m_sql"] = "do_detalle";
$proto20["m_srcTableName"] = "gedocumentos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto22["m_sql"] = "do_tipodoc";
$proto22["m_srcTableName"] = "gedocumentos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "doccnit",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto24["m_sql"] = "doccnit";
$proto24["m_srcTableName"] = "gedocumentos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "docnomproveedor",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto26["m_sql"] = "docnomproveedor";
$proto26["m_srcTableName"] = "gedocumentos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "do_email",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto28["m_sql"] = "do_email";
$proto28["m_srcTableName"] = "gedocumentos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "do_file",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto30["m_sql"] = "do_file";
$proto30["m_srcTableName"] = "gedocumentos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "gedocumentos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto34["m_sql"] = "sys_fecha";
$proto34["m_srcTableName"] = "gedocumentos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "do_legaliza",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto36["m_sql"] = "do_legaliza";
$proto36["m_srcTableName"] = "gedocumentos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "egreso",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto38["m_sql"] = "egreso";
$proto38["m_srcTableName"] = "gedocumentos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "do_concepto",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto40["m_sql"] = "do_concepto";
$proto40["m_srcTableName"] = "gedocumentos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "do_depsup",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto42["m_sql"] = "do_depsup";
$proto42["m_srcTableName"] = "gedocumentos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "do_dep",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos"
));

$proto44["m_sql"] = "do_dep";
$proto44["m_srcTableName"] = "gedocumentos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "gedocumentos";
$proto47["m_srcTableName"] = "gedocumentos";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "doclasedoc_id";
$proto47["m_columns"][] = "as_nroasiento_fk";
$proto47["m_columns"][] = "do_tipomov";
$proto47["m_columns"][] = "doclasedoc";
$proto47["m_columns"][] = "do_nrodoc";
$proto47["m_columns"][] = "do_fechadoc";
$proto47["m_columns"][] = "docodregion";
$proto47["m_columns"][] = "do_detalle";
$proto47["m_columns"][] = "do_tipodoc";
$proto47["m_columns"][] = "doccnit";
$proto47["m_columns"][] = "docnomproveedor";
$proto47["m_columns"][] = "do_email";
$proto47["m_columns"][] = "do_file";
$proto47["m_columns"][] = "sys_user";
$proto47["m_columns"][] = "sys_fecha";
$proto47["m_columns"][] = "do_legaliza";
$proto47["m_columns"][] = "egreso";
$proto47["m_columns"][] = "do_concepto";
$proto47["m_columns"][] = "do_depsup";
$proto47["m_columns"][] = "do_dep";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "gedocumentos";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "gedocumentos";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="gedocumentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gedocumentos = createSqlQuery_gedocumentos();


	
								;

																				

$tdatagedocumentos[".sqlquery"] = $queryData_gedocumentos;



$tdatagedocumentos[".hasEvents"] = false;

?>